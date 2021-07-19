<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Quiz;
use App\Models\MAYDAN\Post;
use App\Models\MAYDAN\Quizze_question;
use App\Models\MAYDAN\Quizze_option;
use App\Models\MAYDAN\Quizze_question_option;
use App\Models\MAYDAN\Quizze_answer;
use App\Models\User;

use App\Models\MAYDAN\Application_football_team;
use App\Models\MAYDAN\Football_team_post;


 
class QuizController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

      $Application = Auth::user()->Application();
  
         

  
         $quizzes = Quiz::select('quizzes.*')->
             leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id')->
             where('posts.application_id' , $Application->id)->paginate(15);
             
           //  return $quizzes;

        return view('MAYDAN.quizzes.quizzes')->with('quizzes' , $quizzes)

        ;


 

    }
    
    
    
        public function participants($id )
    {


  // $this->validate($request, ['id' => 'required|exists:quizzes,id',]);

  $quiz = Quiz::select('quizzes.*' , 'posts.image' , 'posts.title as headline' , 'posts.summary')
      ->leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id') ->

      find($id);
      
   
      
      
   

  
 
 
           $users = User::select('users.id' , 'users.email' ,  'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               
               
            ->leftjoin('quizze_answers' , 'quizze_answers.user_id' , '=' ,'users.id') ->   

               where('quizze_answers.quizze_id' , $quiz->id)
               ->groupby('users.id' , 'users.email' , 'users.image' , 'users.first_name' , 'users.last_name' , 'users.city' ,
           'users.address' , 'users.phone_number' ,'users.birthday' , 'users.created_at')
               ->paginate(15);
               
       
       
    
      
     $quizze_questions =  Quizze_question::where('quizze_id' , $quiz->id)->with('options')->get();        
  
 
       return view('MAYDAN.quizzes.participants')
        ->with('quiz',$quiz)
    
        ->with('quizze_questions',$quizze_questions)
        ->with('users',$users)
        
        

        ;



 

    }
    
    
    
    
    
    
         public function quizze_answers( $id , $user_id)
    {

  $quiz = Quiz::select('quizzes.*' , 'posts.image' , 'posts.title as headline' , 'posts.summary')
      ->leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id') ->

      find($id);

         $quizze_answers = Quizze_answer::select('quizze_answers.*')->whereUserId($user_id)->paginate(15);
             
             
              

        return view('MAYDAN.quizzes.quizze_answers')->with('quizze_answers' , $quizze_answers)
        ->with('quiz' , $quiz)
;


     
 }
    
    





 
       public function create()
    {


      $Application = Auth::user()->Application();
         $application_football_teams = Application_football_team::where('application_id' , $Application->id)->get();
         
         
          return view('MAYDAN.quizzes.quiz_add')
          ->with('application_football_teams' , $application_football_teams)
       ;
         
         
 }




  


 public function store( Request $request)
    {
         
       
        
    //  dd($request->all());
    $Application = Auth::user()->Application();

      $this->validate($request, [

   'application_football_team_ids' => 'required|array',

       'image' => 'required',
       'summary' => 'required',
       
       

       'headline' => 'required',

       'timer' => 'required',
       'questions' => 'required',
  
       
       ]);
       
       
    //    dd($request->all());
       
              $post = new Post ();

 $post->post_type_id = 4;
  $post->application_id = $Application->id;


if ($request->hasFile('image')) {
if ($request->file('image')->isValid()) {
$file = $request->file('image');
$destinationPath = 'images/posts';
$fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
$file->move($destinationPath,$fileName);
$post->image = '/'.$destinationPath."/".$fileName;

    }}
$post->title = $request->headline;
$post->summary = $request->summary;



    $save = $post->save();




    $quiz = new Quiz ();

         $quiz->timer = $request->timer;
   //      $quiz->top_result = $request->top_result;
//  $quiz->average_score = $request->average_score;
//  $quiz->total_participants = $request->total_participants;
 // $quiz->deadline = $request->deadline;
  $quiz->post_id = $post->id;

      $save = $quiz->save();
      
      
 
   for($x = 1; $x <= $request->questions ; $x++){
  
        $quizze_question = new Quizze_question ();
      //   $quizze_question->quizze_question_option_id = $quizze_question_option->id;
  $quizze_question->quizze_question = $request["question_$x"];  
  $quizze_question->quizze_id = $quiz->id;
      $save = $quizze_question->save();

   foreach($request["answer_question_$x"] as $aq){   
   
     $quizze_option = new Quizze_option ();

         $quizze_option->quizze_option = $aq;
  $quizze_option->quizze_id = $quiz->id;

      $save = $quizze_option->save();
      
      
      
       $quizze_question_option = new Quizze_question_option ();

         $quizze_question_option->quizze_option_id = $quizze_option->id;
  $quizze_question_option->quizze_question_id = $quizze_question->id;
  $quizze_question_option->quizze_id = $quiz->id;

      $save = $quizze_question_option->save();
      
      
   } 
   
   
   }
     
     
      
      
      
  
      
      
       if($save) {
           
                  $application_football_team_ids = $request->application_football_team_ids;
           
    
           foreach ($application_football_team_ids as $team) {
         $football_team_post = new Football_team_post(); 
         $football_team_post->post_id = $post->id;
         $football_team_post->football_team_id = $team;
         $football_team_post->save();
           }

        \Session::flash('message', 'new  <a href="/quizzes/'.$quiz->id.'">quiz</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id ,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:quizzes,id',]);

  $quiz = Quiz::select('quizzes.*' , 'posts.image' , 'posts.title as headline' , 'posts.summary')
      ->leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id') ->

      find($id);
      
   
      
      
   
 
  
      $Application = Auth::user()->Application();

 
         $next = Quiz::
             leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id')->
             where('posts.application_id' , $Application->id)->where('quizzes.id','>',$id)->max('quizzes.id');
          
    
        $previous = Quiz::
             leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id')->
             where('posts.application_id' , $Application->id)->where('quizzes.id','<',$id)->min('quizzes.id');
          
       
       
    
      
     $quizze_questions =  Quizze_question::where('quizze_id' , $quiz->id)->with('options')->get();        
  
    $next = Quiz::where('id','>',$id)->min('id');
    $previous = Quiz::where('id','<',$id)->max('id');
       return view('MAYDAN.quizzes.quiz_view')
        ->with('quiz',$quiz)
        ->with('next',$next)
        ->with('quizze_questions',$quizze_questions)
        ->with('previous',$previous) 
        

        ;

     }



   public function edit( $id)
    {


  $quiz = Quiz::select('quizzes.*' , 'posts.image' , 'posts.title as headline' , 'posts.summary')
      ->leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id') ->

      find($id);
      
   
      
      
   
 
  
      $Application = Auth::user()->Application();

 
         $next = Quiz::
             leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id')->
             where('posts.application_id' , $Application->id)->where('quizzes.id','>',$id)->max('quizzes.id');
          
    
        $previous = Quiz::
             leftjoin('posts' , 'posts.id' , '=' ,'quizzes.post_id')->
             where('posts.application_id' , $Application->id)->where('quizzes.id','<',$id)->min('quizzes.id');
          
       
       
    
      
     $quizze_questions =  Quizze_question::where('quizze_id' , $quiz->id)->with('options')->get();        
  


       return view('MAYDAN.quizzes.quiz_edit')
        ->with('quiz',$quiz)

        ->with('quizze_questions',$quizze_questions)
    
        
 ;

     }
 

     public function update(  Request $request, $id)
    {

//dd($request->all());
 
      $quiz = Quiz::find($id); 
      
    
          $quiz->timer = $request->timer;

       $update =  $quiz->update();


       $post = Post::find($quiz->post_id); 

  
 
   $post->title = $request->headline;
   
   $post->summary = $request->summary;
     
        $update =  $post->update();
        
        

 

       if($update) {
        \Session::flash('message', ' quiz was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($subdomain, $id)
    {
       $quiz = Quiz::find($id);
      $delete =  $quiz->delete();

                   if($delete) {
        \Session::flash('message', ' quiz was deleted sucssesfily ');
          return back();
       }

    }
}
