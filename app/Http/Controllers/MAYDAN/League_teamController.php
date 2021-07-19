<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\League_team;

use Yajra\Datatables\Datatables;

class League_teamController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.league_teams.league_teams');

    }





   public function all_data()
    {


   $league_teams = League_team::select('league_teams.*'





  )->get();
return Datatables::of($league_teams)->addColumn('action', function ($league_team) {
                return '
                <a href="/league_teams/'.$league_team->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.league_teams.league_team_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'league_id' => 'required',

       'team_id' => 'required',]);
    $league_team = new League_team ();

         $league_team->league_id = $request->league_id;
  $league_team->team_id = $request->team_id;

      $save = $league_team->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/league_teams/'.$league_team->id.'">league_team</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:league_teams,id',]);

    $league_team = League_team::find($id);
    $next = League_team::where('id','>',$id)->min('id');
    $previous = League_team::where('id','<',$id)->max('id');
       return view('MAYDAN.league_teams.league_team_view')
        ->with('league_team',$league_team)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $league_team = League_team::find($id); 

      $league_team->league_id = $request->league_id;
  $league_team->team_id = $request->team_id;
    
       $update =  $league_team->update();

       if($update) {
        \Session::flash('message', ' league_team was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $league_team = League_team::find($id);
      $delete =  $league_team->delete();

                   if($delete) {
        \Session::flash('message', ' league_team was deleted sucssesfily ');
          return back();
       }

    }
}
