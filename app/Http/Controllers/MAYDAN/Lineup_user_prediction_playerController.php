<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Lineup_user_prediction_player;

use Yajra\Datatables\Datatables;

class Lineup_user_prediction_playerController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.lineup_user_prediction_players.lineup_user_prediction_players');

    }





   public function all_data()
    {


   $lineup_user_prediction_players = Lineup_user_prediction_player::select('lineup_user_prediction_players.*'





  )->get();
return Datatables::of($lineup_user_prediction_players)->addColumn('action', function ($lineup_user_prediction_player) {
                return '
                <a href="/lineup_user_prediction_players/'.$lineup_user_prediction_player->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.lineup_user_prediction_players.lineup_user_prediction_player_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'user_id' => 'required',

       'player_name' => 'required',

       'player_id' => 'required',

       'lineup_prediction_id' => 'required',]);
    $lineup_user_prediction_player = new Lineup_user_prediction_player ();

         $lineup_user_prediction_player->user_id = $request->user_id;
  $lineup_user_prediction_player->player_name = $request->player_name;
  $lineup_user_prediction_player->player_id = $request->player_id;
  $lineup_user_prediction_player->lineup_prediction_id = $request->lineup_prediction_id;

      $save = $lineup_user_prediction_player->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/lineup_user_prediction_players/'.$lineup_user_prediction_player->id.'">lineup_user_prediction_player</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:lineup_user_prediction_players,id',]);

    $lineup_user_prediction_player = Lineup_user_prediction_player::find($id);
    $next = Lineup_user_prediction_player::where('id','>',$id)->min('id');
    $previous = Lineup_user_prediction_player::where('id','<',$id)->max('id');
       return view('MAYDAN.lineup_user_prediction_players.lineup_user_prediction_player_view')
        ->with('lineup_user_prediction_player',$lineup_user_prediction_player)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $lineup_user_prediction_player = Lineup_user_prediction_player::find($id); 

      $lineup_user_prediction_player->user_id = $request->user_id;
  $lineup_user_prediction_player->player_name = $request->player_name;
  $lineup_user_prediction_player->player_id = $request->player_id;
  $lineup_user_prediction_player->lineup_prediction_id = $request->lineup_prediction_id;
    
       $update =  $lineup_user_prediction_player->update();

       if($update) {
        \Session::flash('message', ' lineup_user_prediction_player was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $lineup_user_prediction_player = Lineup_user_prediction_player::find($id);
      $delete =  $lineup_user_prediction_player->delete();

                   if($delete) {
        \Session::flash('message', ' lineup_user_prediction_player was deleted sucssesfily ');
          return back();
       }

    }
}
