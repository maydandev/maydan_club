<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Application;

use Yajra\Datatables\Datatables;

class ApplicationController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.applications.applications');

    }





   public function all_data()
    {


   $applications = Application::select('applications.*'





  )->get();
return Datatables::of($applications)->addColumn('action', function ($application) {
                return '
                <a href="/applications/'.$application->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.applications.application_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'club_id' => 'required',

       'configuration' => 'required',

       'base_url' => 'required',

       'current_season' => 'required',

       'current_league_id' => 'required',

       'splash_image' => 'required',

       'team_id' => 'required',

       'club_logo' => 'required',

       'currency' => 'required',

       'is_gradient_secondary_color' => 'required',

       'is_gradient_primary_color' => 'required',

       'alternative_secondary_color' => 'required',

       'alternative_primary_color' => 'required',

       'secondary_color' => 'required',

       'primary_color' => 'required',

       'language' => 'required',

       'icon' => 'required',

       'name' => 'required',]);
    $application = new Application ();

         $application->club_id = $request->club_id;
  $application->configuration = $request->configuration;
  $application->base_url = $request->base_url;
  $application->current_season = $request->current_season;
  $application->current_league_id = $request->current_league_id;
  $application->splash_image = $request->splash_image;
  $application->team_id = $request->team_id;
  $application->club_logo = $request->club_logo;
  $application->currency = $request->currency;
  $application->is_gradient_secondary_color = $request->is_gradient_secondary_color;
  $application->is_gradient_primary_color = $request->is_gradient_primary_color;
  $application->alternative_secondary_color = $request->alternative_secondary_color;
  $application->alternative_primary_color = $request->alternative_primary_color;
  $application->secondary_color = $request->secondary_color;
  $application->primary_color = $request->primary_color;
  $application->language = $request->language;
  $application->icon = $request->icon;
  $application->name = $request->name;

      $save = $application->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/applications/'.$application->id.'">application</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:applications,id',]);

    $application = Application::find($id);
    $next = Application::where('id','>',$id)->min('id');
    $previous = Application::where('id','<',$id)->max('id');
       return view('MAYDAN.applications.application_view')
        ->with('application',$application)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $application = Application::find($id); 

      $application->club_id = $request->club_id;
  $application->configuration = $request->configuration;
  $application->base_url = $request->base_url;
  $application->current_season = $request->current_season;
  $application->current_league_id = $request->current_league_id;
  $application->splash_image = $request->splash_image;
  $application->team_id = $request->team_id;
  $application->club_logo = $request->club_logo;
  $application->currency = $request->currency;
  $application->is_gradient_secondary_color = $request->is_gradient_secondary_color;
  $application->is_gradient_primary_color = $request->is_gradient_primary_color;
  $application->alternative_secondary_color = $request->alternative_secondary_color;
  $application->alternative_primary_color = $request->alternative_primary_color;
  $application->secondary_color = $request->secondary_color;
  $application->primary_color = $request->primary_color;
  $application->language = $request->language;
  $application->icon = $request->icon;
  $application->name = $request->name;
    
       $update =  $application->update();

       if($update) {
        \Session::flash('message', ' application was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $application = Application::find($id);
      $delete =  $application->delete();

                   if($delete) {
        \Session::flash('message', ' application was deleted sucssesfily ');
          return back();
       }

    }
}
