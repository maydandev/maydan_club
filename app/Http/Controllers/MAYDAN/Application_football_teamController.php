<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Application_football_team;

use Yajra\Datatables\Datatables;

class Application_football_teamController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.application_football_teams.application_football_teams');

    }





   public function all_data()
    {


   $application_football_teams = Application_football_team::select('application_football_teams.*'





  )->get();
return Datatables::of($application_football_teams)->addColumn('action', function ($application_football_team) {
                return '
                <a href="/application_football_teams/'.$application_football_team->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.application_football_teams.application_football_team_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'football_team_id' => 'required',

       'application_id' => 'required',]);
    $application_football_team = new Application_football_team ();

         $application_football_team->football_team_id = $request->football_team_id;
  $application_football_team->application_id = $request->application_id;

      $save = $application_football_team->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/application_football_teams/'.$application_football_team->id.'">application_football_team</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:application_football_teams,id',]);

    $application_football_team = Application_football_team::find($id);
    $next = Application_football_team::where('id','>',$id)->min('id');
    $previous = Application_football_team::where('id','<',$id)->max('id');
       return view('MAYDAN.application_football_teams.application_football_team_view')
        ->with('application_football_team',$application_football_team)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $application_football_team = Application_football_team::find($id); 

      $application_football_team->football_team_id = $request->football_team_id;
  $application_football_team->application_id = $request->application_id;
    
       $update =  $application_football_team->update();

       if($update) {
        \Session::flash('message', ' application_football_team was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $application_football_team = Application_football_team::find($id);
      $delete =  $application_football_team->delete();

                   if($delete) {
        \Session::flash('message', ' application_football_team was deleted sucssesfily ');
          return back();
       }

    }
}
