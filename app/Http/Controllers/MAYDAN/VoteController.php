<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Vote;
use App\Models\MAYDAN\Application_football_team;
use App\Models\MAYDAN\Football_team_post;
use App\Models\MAYDAN\Vote_question;
use App\Models\MAYDAN\Vote_option;
use App\Models\MAYDAN\Vote_question_option;
use App\Models\MAYDAN\Vote_answer;


use App\Models\MAYDAN\Post;
use Yajra\Datatables\Datatables;

class VoteController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $votes = Vote::paginate(10);
        return view('MAYDAN.votes.votes' , compact('votes'));

    }







   public function all_data()
    {


   $votes = Vote::select('votes.*'





  )->get();
return Datatables::of($votes)->addColumn('action', function ($vote) {
                return '
                <a href="/votes/'.$vote->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




public function create()
{

  $Application = Auth::user()->Application();

  $application_football_teams = Application_football_team::select('application_football_teams.*' ,'football_teams.name')->
  leftjoin('football_teams','football_teams.id' ,'=','application_football_teams.football_team_id')->
  where('application_football_teams.application_id',$Application->id)->get();

  
      return view('MAYDAN.votes.vote_add')->with('application_football_teams' , $application_football_teams)
   ;
}


public function show($id,Request $request)
{
    
  $Application = Auth::user()->Application();

// $this->validate($request, ['id' => 'required|exists:votes,id',]);

$vote = Vote::with('post')->find($id);

$Vote_question = Vote_question::whereVoteId($vote->id)->with('options')->first();   


 

   
     $football_team_posts = Football_team_post::wherePostId($vote->post->id)->get();
           
         
  

     $teams = [] ; 
   $application_football_teams = Application_football_team::select('application_football_teams.*' ,'football_teams.name')->
   leftjoin('football_teams','football_teams.id' ,'=','application_football_teams.football_team_id')->
   where('application_football_teams.application_id',$Application->id)->get();

   foreach($football_team_posts as $football_team_post){
    $teams[] = $football_team_post->football_team_id;
  }


   return view('MAYDAN.votes.vote_view')
    ->with('football_team_posts',$football_team_posts)
    ->with('application_football_teams',$application_football_teams)
    ->with('vote',$vote)
    ->with('teams',$teams)
 
    ->with('vote_question',$Vote_question)

     
    
    ;

 }
 
public function store( Request $request)
{

  $Application = Auth::user()->Application();

//   dd($request->all());
  $this->validate($request, [
'application_football_team_ids' => 'required|array',



   'headline' => 'required',

   'question' => 'required',

   'deadline' => 'required|date|after:yesterday',
   'deadline_time' => 'required',

   'question_option' => 'required|array',
   
   ]);


   $post = new Post ();

$post->post_type_id = 3;
$post->application_id = $Application->id;


$post->title = $request->headline;

$save = $post->save();



$vote = new Vote ();

//          $vote->result_total_voters = $request->result_total_voters;
//   $vote->result_percentage = $request->result_percentage;
//   $vote->total_voters = $request->total_voters;
$vote->deadline = $request->deadline . " " . $request->deadline_time;
$vote->post_id = $post->id;
$vote->vote_status_id = 1;

  $save = $vote->save();




  $vote_question = new Vote_question ();

  $vote_question->vote_question = $request->question;
$vote_question->vote_id = $vote->id;

$save = $vote_question->save();



foreach($request->question_option as $opti){

  $vote_option = new Vote_option ();

  $vote_option->vote_option = $opti;
$vote_option->vote_id = $vote->id;

$save = $vote_option->save();




$vote_question_option = new Vote_question_option ();

$vote_question_option->percentage = 0;
$vote_question_option->vote_option_id = $vote_option->id;
$vote_question_option->vote_question_id = $vote_question->id;
$vote_question_option->vote_id = $vote->id;

$save = $vote_question_option->save();


}




   if($save) {
       
          $application_football_team_ids = $request->application_football_team_ids;
       

       foreach ($application_football_team_ids as $team) {
     $football_team_post = new Football_team_post(); 
     $football_team_post->post_id = $post->id;
     $football_team_post->football_team_id = $team;
     $football_team_post->save();
       }

    \Session::flash('message', 'new  <a href="/votes/'.$vote->id.'">vote</a> was stored successfully');
   }
   return back();
}

 
public function update(Request $request, $id)
{
  $Application = Auth::user()->Application();


//   dd($request->all());
  $this->validate($request, [
'application_football_team_ids' => 'required|array',

   ]);

 
  $vote = Vote::find($id); 

$vote->deadline = $request->deadline_date . " " . $request->deadline_time;


   $update =  $vote->update();


   $post = Post::find($vote->post_id); 



$post->title = $request->headline;
 
    $update =  $post->update();



    $vote_question =  Vote_question::whereVoteId($vote->id)->first();

    $vote_question->vote_question = $request->question;

 $save = $vote_question->save();


 $vote_option =  Vote_option ::whereVoteId($vote->id)->delete();
 $vote_question_option =  Vote_question_option ::whereVoteId($vote->id)->delete();



 foreach($request->question_option as $opti){

  $vote_option = new Vote_option ();

  $vote_option->vote_option = $opti;
$vote_option->vote_id = $vote->id;

$save = $vote_option->save();




$vote_question_option = new Vote_question_option ();

$vote_question_option->percentage = 0;
$vote_question_option->vote_option_id = $vote_option->id;
$vote_question_option->vote_question_id = $vote_question->id;
$vote_question_option->vote_id = $vote->id;

$save = $vote_question_option->save();


}




   if($update) {
       
       
             $application_football_team_ids = $request->application_football_team_ids;
           
           if($application_football_team_ids) {
       
           Football_team_post::wherePostId($post->id)->delete(); 
 
       foreach ($application_football_team_ids as $team) {
     $football_team_post = new Football_team_post(); 
     $football_team_post->post_id = $post->id;
     $football_team_post->football_team_id = $team;
     $football_team_post->save();
       }
       
   }
   
   
    \Session::flash('message', ' vote was updated successfully');
     return back();
   }

}
    public function destroy($id)
    {
       $vote = Vote::find($id);
      $delete =  $vote->delete();

                   if($delete) {
        \Session::flash('message', ' vote was deleted successfully');
          return back();
       }

    }


       
    public function vote_answers($id)
    {
      

         $vote_question = Vote_question::whereVoteId($id)->first();
         $vote_answers = Vote_answer::whereVoteId($id)->paginate(15);

        return view('MAYDAN.votes.vote_answers')
        ->with('vote_answers' , $vote_answers)
        ->with('vote_question' , $vote_question)
;


    }
}
