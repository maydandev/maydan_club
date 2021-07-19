<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Leaderboard;
use App\Models\User;

use Yajra\Datatables\Datatables;

class LeaderboardController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

      $Application = Auth::user()->Application();


         $leaderboards = User::select('leaderboards.id' , 'leaderboards.user_id' , 'leaderboards.total_score' , 'users.first_name' , 'users.last_name' , 'users.created_at')
         ->join('leaderboards' , 'leaderboards.user_id' , '=' , 'users.id')
         ->where('leaderboards.application_id',$Application->id)
         ->orderby('leaderboards.total_score' ,'DESC')
         ->paginate(15);

         
        return view('MAYDAN.leaderboards.leaderboards' , compact('leaderboards'));

    }







   public function all_data()
    {


   $leaderboards = Leaderboard::select('leaderboards.*'





  )->get();
return Datatables::of($leaderboards)->addColumn('action', function ($leaderboard) {
                return '
                <a href="/leaderboards/'.$leaderboard->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.leaderboards.leaderboard_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'application_id' => 'required',

       'user_id' => 'required',

       'total_score' => 'required',]);
    $leaderboard = new Leaderboard ();

         $leaderboard->application_id = $request->application_id;
  $leaderboard->user_id = $request->user_id;
  $leaderboard->total_score = $request->total_score;

      $save = $leaderboard->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/leaderboards/'.$leaderboard->id.'">leaderboard</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:leaderboards,id',]);

    $leaderboard = Leaderboard::find($id);
    $next = Leaderboard::where('id','>',$id)->min('id');
    $previous = Leaderboard::where('id','<',$id)->max('id');
       return view('MAYDAN.leaderboards.leaderboard_view')
        ->with('leaderboard',$leaderboard)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $leaderboard = Leaderboard::find($id); 

      $leaderboard->application_id = $request->application_id;
  $leaderboard->user_id = $request->user_id;
  $leaderboard->total_score = $request->total_score;
    
       $update =  $leaderboard->update();

       if($update) {
        \Session::flash('message', ' leaderboard was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $leaderboard = Leaderboard::find($id);
      $delete =  $leaderboard->delete();

                   if($delete) {
        \Session::flash('message', ' leaderboard was deleted successfully');
          return back();
       }

    }
}
