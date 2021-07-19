<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Embedded_post;
use App\Models\MAYDAN\Platform;
use App\Models\MAYDAN\Football_team_post;
use App\Models\MAYDAN\Application_football_team;

use Yajra\Datatables\Datatables;

class Embedded_postController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $Application = Auth::user()->Application();

   
          
         $data = $request->all();
   
         
         
         $embedded_posts = Embedded_post::
             where(function ($query) use ($data) {
             
   if(isset($data['platform']) && $data['platform'] == 'facebook'){
        $query->wherePostPlatform('facebook');
   }
  
  
     if(isset($data['platform']) && $data['platform'] == 'twitter'){
        $query->wherePostPlatform('twitter');
   }
   
     if(isset($data['platform']) && $data['platform'] == 'youtube'){
        $query->wherePostPlatform('youtube');
   }
   
   
      if(isset($data['q']) && $data['q'] != ' '){
        $query->wherePostUrl(trim('q'));
   }
   
   
}
)->
             where('post_type_id' , 2)->where('application_id' , $Application->id)->paginate(15);



        return view('MAYDAN.embedded_posts.embedded_posts' , compact('embedded_posts'));

    }







   public function all_data()
    {


   $embedded_posts = Embedded_post::select('embedded_posts.*'





  )->get();
return Datatables::of($embedded_posts)->addColumn('action', function ($embedded_post) {
                return '
                <a href="/embedded_posts/'.$embedded_post->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {
      $Application = Auth::user()->Application();
 
$application_football_teams = Application_football_team::select('application_football_teams.*' ,'football_teams.name')->
leftjoin('football_teams','football_teams.id' ,'=','application_football_teams.football_team_id')->
where('application_football_teams.application_id',$Application->id)->get();



$platforms = Platform::all();


       return view('MAYDAN.embedded_posts.embedded_post_add')->with('platforms' , $platforms)
->with('application_football_teams' , $application_football_teams)

       ;
 }


 public function store(Request $request)
    {
 
      $Application = Auth::user()->Application();

      $this->validate($request, [

       'application_football_team_ids' => 'required|array',

     

       'post_url' => 'required',

       'post_platform' => 'required',]);
    $embedded_post = new Embedded_post ();

 
    $embedded_post->post_url = $request->post_url;
$embedded_post->post_type_id = 2;
$embedded_post->post_platform = $request->post_platform;
  $embedded_post->application_id = $Application->id;


 $save = $embedded_post->save();

       if($save) {

        $application_football_team_ids = $request->application_football_team_ids;
           
    
        foreach ($application_football_team_ids as $team) {
      $football_team_post = new Football_team_post(); 
      $football_team_post->post_id = $embedded_post->id;
      $football_team_post->football_team_id = $team;
      $football_team_post->save();
        }

        \Session::flash('message', 'new  <a href="/embedded_posts/'.$embedded_post->id.'">embedded_post</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {


      $Application = Auth::user()->Application();
      $embedded_post = Embedded_post::find($id);
      $next = Embedded_post::where('id','>',$id)->min('id');
      $previous = Embedded_post::where('id','<',$id)->max('id');
      $platforms = Platform::all();
      $Football_team_posts = Football_team_post::wherePostId($id)->get();

      $teams = [] ; 

      foreach($Football_team_posts as $Football_team_post){
        $teams[] = $Football_team_post->football_team_id;
      }


      
   $application_football_teams = Application_football_team::select('application_football_teams.*' ,'football_teams.name')->
   leftjoin('football_teams','football_teams.id' ,'=','application_football_teams.football_team_id')->
   where('application_football_teams.application_id',$Application->id)->get();
   
          return view('MAYDAN.embedded_posts.embedded_post_view')->with('platforms' , $platforms)
   ->with('application_football_teams' , $application_football_teams)
   ->with('embedded_post',$embedded_post)
   ->with('next',$next)
   ->with('teams',$teams)
   ->with('previous',$previous)
   
          ;


   // $this->validate($request, ['id' => 'required|exists:embedded_posts,id',]);

 

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {


      $Application = Auth::user()->Application();

      $this->validate($request, [

       'application_football_team_ids' => 'required|array',

     

       'post_url' => 'required',

       'post_platform' => 'required',]);
       $embedded_post = Embedded_post::find($id); 

 
    $embedded_post->post_url = $request->post_url;
$embedded_post->post_type_id = 2;
$embedded_post->post_platform = $request->post_platform;
  $embedded_post->application_id = $Application->id;


  $update =  $embedded_post->update();
      

       if($update) {

            
        $application_football_team_ids = $request->application_football_team_ids;
               
        if($application_football_team_ids) {
    
        Football_team_post::wherePostId($embedded_post->id)->delete(); 

    foreach ($application_football_team_ids as $team) {
  $football_team_post = new Football_team_post(); 
  $football_team_post->post_id = $embedded_post->id;
  $football_team_post->football_team_id = $team;
  $football_team_post->save();
    }
    
}

        \Session::flash('message', ' embedded_post was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $embedded_post = Embedded_post::find($id);
      $delete =  $embedded_post->delete();

                   if($delete) {
        \Session::flash('message', ' embedded_post was deleted successfully');
          return back();
       }

    }
}
