<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Fixture;

use Yajra\Datatables\Datatables;

class FixtureController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $fixtures = Fixture::paginate(10);
        return view('MAYDAN.fixtures.fixtures' , compact('fixtures'));

    }







   public function all_data()
    {


   $fixtures = Fixture::select('fixtures.*'





  )->get();
return Datatables::of($fixtures)->addColumn('action', function ($fixture) {
                return '
                <a href="/fixtures/'.$fixture->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.fixtures.fixture_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'fixture_id' => 'required',

       'league_id' => 'required',

       'event_date' => 'required',

       'event_timestamp' => 'required',

       'firstHalfStart' => 'required',

       'secondHalfStart' => 'required',

       'round' => 'required',

       'status' => 'required',

       'statusShort' => 'required',

       'elapsed' => 'required',

       'venue' => 'required',

       'referee' => 'required',

       'home_team_id' => 'required',

       'away_team_id' => 'required',

       'goalsHomeTeam' => 'required',

       'goalsAwayTeam' => 'required',

       'score_id' => 'required',]);
    $fixture = new Fixture ();

         $fixture->fixture_id = $request->fixture_id;
  $fixture->league_id = $request->league_id;
  $fixture->event_date = $request->event_date;
  $fixture->event_timestamp = $request->event_timestamp;
  $fixture->firstHalfStart = $request->firstHalfStart;
  $fixture->secondHalfStart = $request->secondHalfStart;
  $fixture->round = $request->round;
  $fixture->status = $request->status;
  $fixture->statusShort = $request->statusShort;
  $fixture->elapsed = $request->elapsed;
  $fixture->venue = $request->venue;
  $fixture->referee = $request->referee;
  $fixture->home_team_id = $request->home_team_id;
  $fixture->away_team_id = $request->away_team_id;
  $fixture->goalsHomeTeam = $request->goalsHomeTeam;
  $fixture->goalsAwayTeam = $request->goalsAwayTeam;
  $fixture->score_id = $request->score_id;

      $save = $fixture->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/fixtures/'.$fixture->id.'">fixture</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:fixtures,id',]);

    $fixture = Fixture::find($id);
    $next = Fixture::where('id','>',$id)->min('id');
    $previous = Fixture::where('id','<',$id)->max('id');
       return view('MAYDAN.fixtures.fixture_view')
        ->with('fixture',$fixture)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $fixture = Fixture::find($id); 

      $fixture->fixture_id = $request->fixture_id;
  $fixture->league_id = $request->league_id;
  $fixture->event_date = $request->event_date;
  $fixture->event_timestamp = $request->event_timestamp;
  $fixture->firstHalfStart = $request->firstHalfStart;
  $fixture->secondHalfStart = $request->secondHalfStart;
  $fixture->round = $request->round;
  $fixture->status = $request->status;
  $fixture->statusShort = $request->statusShort;
  $fixture->elapsed = $request->elapsed;
  $fixture->venue = $request->venue;
  $fixture->referee = $request->referee;
  $fixture->home_team_id = $request->home_team_id;
  $fixture->away_team_id = $request->away_team_id;
  $fixture->goalsHomeTeam = $request->goalsHomeTeam;
  $fixture->goalsAwayTeam = $request->goalsAwayTeam;
  $fixture->score_id = $request->score_id;
    
       $update =  $fixture->update();

       if($update) {
        \Session::flash('message', ' fixture was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $fixture = Fixture::find($id);
      $delete =  $fixture->delete();

                   if($delete) {
        \Session::flash('message', ' fixture was deleted successfully');
          return back();
       }

    }
}
