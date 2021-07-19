<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Football_team;

use Yajra\Datatables\Datatables;

class Football_teamController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $football_teams = Football_team::paginate(10);
        return view('MAYDAN.football_teams.football_teams' , compact('football_teams'));

    }







   public function all_data()
    {


   $football_teams = Football_team::select('football_teams.*'





  )->get();
return Datatables::of($football_teams)->addColumn('action', function ($football_team) {
                return '
                <a href="/football_teams/'.$football_team->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.football_teams.football_team_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'team_id' => 'required',

       'name' => 'required',

       'code' => 'required',

       'logo' => 'required',

       'is_national' => 'required',

       'country_id' => 'required',

       'founded' => 'required',

       'venue_name' => 'required',

       'venue_surface' => 'required',

       'venue_address' => 'required',

       'venue_city' => 'required',

       'venue_capacity' => 'required',]);
    $football_team = new Football_team ();

         $football_team->team_id = $request->team_id;
  $football_team->name = $request->name;
  $football_team->code = $request->code;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/football_teams';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $football_team->logo = '/'.$destinationPath."/".$fileName;

      }}
  $football_team->is_national = $request->is_national;
  $football_team->country_id = $request->country_id;
  $football_team->founded = $request->founded;
  $football_team->venue_name = $request->venue_name;
  $football_team->venue_surface = $request->venue_surface;
  $football_team->venue_address = $request->venue_address;
  $football_team->venue_city = $request->venue_city;
  $football_team->venue_capacity = $request->venue_capacity;

      $save = $football_team->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/football_teams/'.$football_team->id.'">football_team</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:football_teams,id',]);

    $football_team = Football_team::find($id);
    $next = Football_team::where('id','>',$id)->min('id');
    $previous = Football_team::where('id','<',$id)->max('id');
       return view('MAYDAN.football_teams.football_team_view')
        ->with('football_team',$football_team)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $football_team = Football_team::find($id); 

      $football_team->team_id = $request->team_id;
  $football_team->name = $request->name;
  $football_team->code = $request->code;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/football_teams';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $football_team->logo = '/'.$destinationPath."/".$fileName;

      }}
  $football_team->is_national = $request->is_national;
  $football_team->country_id = $request->country_id;
  $football_team->founded = $request->founded;
  $football_team->venue_name = $request->venue_name;
  $football_team->venue_surface = $request->venue_surface;
  $football_team->venue_address = $request->venue_address;
  $football_team->venue_city = $request->venue_city;
  $football_team->venue_capacity = $request->venue_capacity;
    
       $update =  $football_team->update();

       if($update) {
        \Session::flash('message', ' football_team was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $football_team = Football_team::find($id);
      $delete =  $football_team->delete();

                   if($delete) {
        \Session::flash('message', ' football_team was deleted successfully');
          return back();
       }

    }
}
