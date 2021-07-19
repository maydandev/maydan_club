<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Lineup_result_prediction_player;

use Yajra\Datatables\Datatables;

class Lineup_result_prediction_playerController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.lineup_result_prediction_players.lineup_result_prediction_players');

    }





   public function all_data()
    {


   $lineup_result_prediction_players = Lineup_result_prediction_player::select('lineup_result_prediction_players.*'





  )->get();
return Datatables::of($lineup_result_prediction_players)->addColumn('action', function ($lineup_result_prediction_player) {
                return '
                <a href="/lineup_result_prediction_players/'.$lineup_result_prediction_player->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.lineup_result_prediction_players.lineup_result_prediction_player_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'player_key' => 'required',

       'player_name' => 'required',

       'player_id' => 'required',

       'prediction_id' => 'required',

       'fixture_id' => 'required',]);
    $lineup_result_prediction_player = new Lineup_result_prediction_player ();

         $lineup_result_prediction_player->player_key = $request->player_key;
  $lineup_result_prediction_player->player_name = $request->player_name;
  $lineup_result_prediction_player->player_id = $request->player_id;
  $lineup_result_prediction_player->prediction_id = $request->prediction_id;
  $lineup_result_prediction_player->fixture_id = $request->fixture_id;

      $save = $lineup_result_prediction_player->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/lineup_result_prediction_players/'.$lineup_result_prediction_player->id.'">lineup_result_prediction_player</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:lineup_result_prediction_players,id',]);

    $lineup_result_prediction_player = Lineup_result_prediction_player::find($id);
    $next = Lineup_result_prediction_player::where('id','>',$id)->min('id');
    $previous = Lineup_result_prediction_player::where('id','<',$id)->max('id');
       return view('MAYDAN.lineup_result_prediction_players.lineup_result_prediction_player_view')
        ->with('lineup_result_prediction_player',$lineup_result_prediction_player)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $lineup_result_prediction_player = Lineup_result_prediction_player::find($id); 

      $lineup_result_prediction_player->player_key = $request->player_key;
  $lineup_result_prediction_player->player_name = $request->player_name;
  $lineup_result_prediction_player->player_id = $request->player_id;
  $lineup_result_prediction_player->prediction_id = $request->prediction_id;
  $lineup_result_prediction_player->fixture_id = $request->fixture_id;
    
       $update =  $lineup_result_prediction_player->update();

       if($update) {
        \Session::flash('message', ' lineup_result_prediction_player was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $lineup_result_prediction_player = Lineup_result_prediction_player::find($id);
      $delete =  $lineup_result_prediction_player->delete();

                   if($delete) {
        \Session::flash('message', ' lineup_result_prediction_player was deleted sucssesfily ');
          return back();
       }

    }
}
