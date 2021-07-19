<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\League;

use Yajra\Datatables\Datatables;

class LeagueController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.leagues.leagues');

    }





   public function all_data()
    {


   $leagues = League::select('leagues.*'





  )->get();
return Datatables::of($leagues)->addColumn('action', function ($league) {
                return '
                <a href="/leagues/'.$league->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.leagues.league_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'coverage_odds' => 'required',

       'coverage_predictions' => 'required',

       'coverage_topscorers' => 'required',

       'coverage_players' => 'required',

       'coverage_fixtures_players_statistics' => 'required',

       'coverage_fixtures_statistics' => 'required',

       'coverage_fixtures_lineups' => 'required',

       'coverage_fixtures_events' => 'required',

       'coverage_standings' => 'required',

       'is_current' => 'required',

       'standings' => 'required',

       'flag' => 'required',

       'logo' => 'required',

       'season_end' => 'required',

       'season_start' => 'required',

       'season' => 'required',

       'country_id' => 'required',

       'league_type_id' => 'required',

       'name' => 'required',

       'league_id' => 'required',]);
    $league = new League ();

         $league->coverage_odds = $request->coverage_odds;
  $league->coverage_predictions = $request->coverage_predictions;
  $league->coverage_topscorers = $request->coverage_topscorers;
  $league->coverage_players = $request->coverage_players;
  $league->coverage_fixtures_players_statistics = $request->coverage_fixtures_players_statistics;
  $league->coverage_fixtures_statistics = $request->coverage_fixtures_statistics;
  $league->coverage_fixtures_lineups = $request->coverage_fixtures_lineups;
  $league->coverage_fixtures_events = $request->coverage_fixtures_events;
  $league->coverage_standings = $request->coverage_standings;
  $league->is_current = $request->is_current;
  $league->standings = $request->standings;
  $league->flag = $request->flag;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/leagues';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $league->logo = '/'.$destinationPath."/".$fileName;

      }}
  $league->season_end = $request->season_end;
  $league->season_start = $request->season_start;
  $league->season = $request->season;
  $league->country_id = $request->country_id;
  $league->league_type_id = $request->league_type_id;
  $league->name = $request->name;
  $league->league_id = $request->league_id;

      $save = $league->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/leagues/'.$league->id.'">league</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:leagues,id',]);

    $league = League::find($id);
    $next = League::where('id','>',$id)->min('id');
    $previous = League::where('id','<',$id)->max('id');
       return view('MAYDAN.leagues.league_view')
        ->with('league',$league)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $league = League::find($id); 

      $league->coverage_odds = $request->coverage_odds;
  $league->coverage_predictions = $request->coverage_predictions;
  $league->coverage_topscorers = $request->coverage_topscorers;
  $league->coverage_players = $request->coverage_players;
  $league->coverage_fixtures_players_statistics = $request->coverage_fixtures_players_statistics;
  $league->coverage_fixtures_statistics = $request->coverage_fixtures_statistics;
  $league->coverage_fixtures_lineups = $request->coverage_fixtures_lineups;
  $league->coverage_fixtures_events = $request->coverage_fixtures_events;
  $league->coverage_standings = $request->coverage_standings;
  $league->is_current = $request->is_current;
  $league->standings = $request->standings;
  $league->flag = $request->flag;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/leagues';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $league->logo = '/'.$destinationPath."/".$fileName;

      }}
  $league->season_end = $request->season_end;
  $league->season_start = $request->season_start;
  $league->season = $request->season;
  $league->country_id = $request->country_id;
  $league->league_type_id = $request->league_type_id;
  $league->name = $request->name;
  $league->league_id = $request->league_id;
    
       $update =  $league->update();

       if($update) {
        \Session::flash('message', ' league was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $league = League::find($id);
      $delete =  $league->delete();

                   if($delete) {
        \Session::flash('message', ' league was deleted sucssesfily ');
          return back();
       }

    }
}
