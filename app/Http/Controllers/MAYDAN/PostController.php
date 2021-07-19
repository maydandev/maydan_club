<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Post;


use App\Models\MAYDAN\Application_football_team;
use App\Models\MAYDAN\Football_team_post;


use Yajra\Datatables\Datatables;

class PostController extends Controller
{




     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $Application = Auth::user()->Application();

        
      $data = $request->all();
         
      $posts = Post::where('post_type_id' , 1)->where('application_id' , $Application->id)
      ->where(function ($query) use ($data) {
          
if(isset($data['type']) && $data['type'] == 'video'){
     $query->whereNotNull('video');
}


  if(isset($data['type']) && $data['type'] == 'image'){
     $query->whereNotNull('image');
}


   if(isset($data['q']) && $data['q'] != ' '){
     $query->whereTitle(trim('q'));
}


}
)->paginate(15);


        return view('MAYDAN.posts.posts' , compact('posts'));

    }







   public function all_data()
    {


   $posts = Post::select('posts.*'





  )->get();
return Datatables::of($posts)->addColumn('action', function ($post) {
                return '
                <a href="/posts/'.$post->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

      $Application = Auth::user()->Application();
 
      $application_football_teams = Application_football_team::select('application_football_teams.*' ,'football_teams.name')->
      leftjoin('football_teams','football_teams.id' ,'=','application_football_teams.football_team_id')->
      where('application_football_teams.application_id',$Application->id)->get();

      
          return view('MAYDAN.posts.post_add')->with('application_football_teams' , $application_football_teams)
       ;
 }


 public function store(Request $request )
    {
        
          
         
      $Application = Auth::user()->Application();
       
      
      
         

      $this->validate($request, [

       'application_football_team_ids' => 'required|array',

     //  'post_type_id' => 'required',

       'summary' => 'required',

       'content' => 'required',

       //'video' => 'required',

       'image' => 'required',

       'title' => 'required',]);
       
       



    $post = new Post ();

   $post->post_type_id = 1;
  $post->summary = $request->summary;
  $post->content = $request->content;
  $post->application_id = $Application->id;
  
  
  $post->video = $request->video;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/posts';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $post->image = '/'.$destinationPath."/".$fileName;

      }}
  $post->title = $request->title;

      $save = $post->save();
       if($save) {
           
            
           $application_football_team_ids = $request->application_football_team_ids;
           
    
           foreach ($application_football_team_ids as $team) {
         $football_team_post = new Football_team_post(); 
         $football_team_post->post_id = $post->id;
         $football_team_post->football_team_id = $team;
         $football_team_post->save();
           }
           
           

        \Session::flash('message', 'new  <a href="/posts/'.$post->id.'">post</a> was stored successfully ');
       }
       return back();
    }
 
    
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:posts,id',]);
   $Application = Auth::user()->Application();

    $post = Post::find($id);
  

 


    
             $next = Post::where('post_type_id' , 1)->where('application_id' , $Application->id)->where('id','>',$id)->min('id');
             $previous = Post::where('post_type_id' , 1)->where('application_id' , $Application->id)->where('id','<',$id)->max('id');
         
             $football_team_posts = Football_team_post::wherePostId($id)->get();
 

           $teams = [] ; 
         $application_football_teams = Application_football_team::select('application_football_teams.*' ,'football_teams.name')->
         leftjoin('football_teams','football_teams.id' ,'=','application_football_teams.football_team_id')->
         where('application_football_teams.application_id',$Application->id)->get();

         foreach($football_team_posts as $football_team_post){
          $teams[] = $football_team_post->football_team_id;
        }
   
       return view('MAYDAN.posts.post_view')
        ->with('post',$post)
        ->with('application_football_teams',$application_football_teams)
        ->with('next',$next)
        ->with('previous',$previous) 
        ->with('football_team_posts',$football_team_posts) 
        ->with('teams',$teams)
         
        
        
        ;

     }


    public function edit($id)
    {
    
}

public function update(Request $request, $id)
{

  $post = Post::find($id); 


  $post->summary = $request->summary;
$post->content = $request->content;
$post->video = $request->video;

if ($request->hasFile('image')) {
if ($request->file('image')->isValid()) {
$file = $request->file('image');
$destinationPath = 'images/posts';
$fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
$file->move($destinationPath,$fileName);
$post->image = '/'.$destinationPath."/".$fileName;

  }}
$post->title = $request->title;

   $update =  $post->update();

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
       
       
    \Session::flash('message', ' post was updated successfully ');
     return back();
   }

}

    public function destroy($id)
    {
       $post = Post::find($id);
      $delete =  $post->delete();

                   if($delete) {
        \Session::flash('message', ' post was deleted successfully');
          return back();
       }

    }
}
