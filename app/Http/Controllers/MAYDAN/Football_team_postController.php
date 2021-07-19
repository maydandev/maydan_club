<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Football_team_post;

use Yajra\Datatables\Datatables;

class Football_team_postController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.football_team_posts.football_team_posts');

    }





   public function all_data()
    {


   $football_team_posts = Football_team_post::select('football_team_posts.*'





  )->get();
return Datatables::of($football_team_posts)->addColumn('action', function ($football_team_post) {
                return '
                <a href="/football_team_posts/'.$football_team_post->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.football_team_posts.football_team_post_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'football_team_id' => 'required',

       'post_id' => 'required',]);
    $football_team_post = new Football_team_post ();

         $football_team_post->football_team_id = $request->football_team_id;
  $football_team_post->post_id = $request->post_id;

      $save = $football_team_post->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/football_team_posts/'.$football_team_post->id.'">football_team_post</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:football_team_posts,id',]);

    $football_team_post = Football_team_post::find($id);
    $next = Football_team_post::where('id','>',$id)->min('id');
    $previous = Football_team_post::where('id','<',$id)->max('id');
       return view('MAYDAN.football_team_posts.football_team_post_view')
        ->with('football_team_post',$football_team_post)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $football_team_post = Football_team_post::find($id); 

      $football_team_post->football_team_id = $request->football_team_id;
  $football_team_post->post_id = $request->post_id;
    
       $update =  $football_team_post->update();

       if($update) {
        \Session::flash('message', ' football_team_post was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $football_team_post = Football_team_post::find($id);
      $delete =  $football_team_post->delete();

                   if($delete) {
        \Session::flash('message', ' football_team_post was deleted sucssesfily ');
          return back();
       }

    }
}
