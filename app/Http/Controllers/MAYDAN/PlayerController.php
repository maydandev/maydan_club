<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Player;

use Yajra\Datatables\Datatables;

class PlayerController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.players.players');

    }





   public function all_data()
    {


   $players = Player::select('players.*'





  )->get();
return Datatables::of($players)->addColumn('action', function ($player) {
                return '
                <a href="/players/'.$player->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.players.player_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'weight' => 'required',

       'height' => 'required',

       'nationality' => 'required',

       'birth_country' => 'required',

       'birth_place' => 'required',

       'birth_date' => 'required',

       'age' => 'required',

       'position' => 'required',

       'number' => 'required',

       'lastname' => 'required',

       'firstname' => 'required',

       'player_name' => 'required',

       'player_id' => 'required',

       'season' => 'required',

       'team_id' => 'required',]);
    $player = new Player ();

         $player->weight = $request->weight;
  $player->height = $request->height;
  $player->nationality = $request->nationality;
  $player->birth_country = $request->birth_country;
  $player->birth_place = $request->birth_place;
  $player->birth_date = $request->birth_date;
  $player->age = $request->age;
  $player->position = $request->position;
  $player->number = $request->number;
  $player->lastname = $request->lastname;
  $player->firstname = $request->firstname;
  $player->player_name = $request->player_name;
  $player->player_id = $request->player_id;
  $player->season = $request->season;
  $player->team_id = $request->team_id;

      $save = $player->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/players/'.$player->id.'">player</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:players,id',]);

    $player = Player::find($id);
    $next = Player::where('id','>',$id)->min('id');
    $previous = Player::where('id','<',$id)->max('id');
       return view('MAYDAN.players.player_view')
        ->with('player',$player)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $player = Player::find($id); 

      $player->weight = $request->weight;
  $player->height = $request->height;
  $player->nationality = $request->nationality;
  $player->birth_country = $request->birth_country;
  $player->birth_place = $request->birth_place;
  $player->birth_date = $request->birth_date;
  $player->age = $request->age;
  $player->position = $request->position;
  $player->number = $request->number;
  $player->lastname = $request->lastname;
  $player->firstname = $request->firstname;
  $player->player_name = $request->player_name;
  $player->player_id = $request->player_id;
  $player->season = $request->season;
  $player->team_id = $request->team_id;
    
       $update =  $player->update();

       if($update) {
        \Session::flash('message', ' player was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $player = Player::find($id);
      $delete =  $player->delete();

                   if($delete) {
        \Session::flash('message', ' player was deleted sucssesfily ');
          return back();
       }

    }
}
