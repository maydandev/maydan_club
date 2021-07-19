<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\App_release;
use App\Models\MAYDAN\App_release_status;
use App\Models\MAYDAN\Club;

use Yajra\Datatables\Datatables;

class App_releaseController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.app_releases.app_releases');

    }





   public function all_data()
    {


   $app_releases = App_release::select('app_releases.*'






                        ,'app_release_statuses.name as app_release_status_id'

                        ,'clubs.code as club_id'
  )->
leftjoin('app_release_statuses','app_release_statuses.id','=','app_releases.app_release_status_id')->

leftjoin('clubs','clubs.id','=','app_releases.club_id')->
get();
return Datatables::of($app_releases)->addColumn('action', function ($app_release) {
                return '
                <a href="/app_releases/'.$app_release->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $app_release_statuses = App_release_status::all();
$clubs = Club::all();
       return view('MAYDAN.app_releases.app_release_add')->with('app_release_statuses' , $app_release_statuses)
->with('clubs' , $clubs)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'notes' => 'required',

       'ios_release_version' => 'required',

       'ios_version' => 'required',

       'android_release_version' => 'required',

       'android_version' => 'required',

       'is_delivery_and_shipping' => 'required',

       'is_collect_and_pickup' => 'required',

       'is_shop' => 'required',

       'is_first_scorer' => 'required',

       'is_match_lineup' => 'required',

       'is_final_match' => 'required',

       'club_logo' => 'required',

       'currency' => 'required',

       'secondary_color' => 'required',

       'primary_color' => 'required',

       'language' => 'required',

       'icon' => 'required',

       'name' => 'required',

       'version' => 'required',

       'app_release_status_id' => 'required',

       'application_id' => 'required',

       'club_id' => 'required',]);
    $app_release = new App_release ();

         $app_release->is_active = ($request->is_active) ? $request->is_active : 0;
  $app_release->notes = $request->notes;
  $app_release->ios_release_version = $request->ios_release_version;
  $app_release->ios_version = $request->ios_version;
  $app_release->android_release_version = $request->android_release_version;
  $app_release->android_version = $request->android_version;
  $app_release->is_delivery_and_shipping = $request->is_delivery_and_shipping;
  $app_release->is_collect_and_pickup = $request->is_collect_and_pickup;
  $app_release->is_shop = $request->is_shop;
  $app_release->is_first_scorer = $request->is_first_scorer;
  $app_release->is_match_lineup = $request->is_match_lineup;
  $app_release->is_final_match = $request->is_final_match;
  $app_release->club_logo = $request->club_logo;
  $app_release->currency = $request->currency;
  $app_release->secondary_color = $request->secondary_color;
  $app_release->primary_color = $request->primary_color;
  $app_release->language = $request->language;
  $app_release->icon = $request->icon;
  $app_release->name = $request->name;
  $app_release->version = $request->version;
  $app_release->app_release_status_id = $request->app_release_status_id;
  $app_release->application_id = $request->application_id;
  $app_release->club_id = $request->club_id;

      $save = $app_release->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/app_releases/'.$app_release->id.'">app_release</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:app_releases,id',]);

    $app_release = App_release::find($id);
    $next = App_release::where('id','>',$id)->min('id');
    $previous = App_release::where('id','<',$id)->max('id');
$app_release_statuses = App_release_status::all();
$clubs = Club::all();
       return view('MAYDAN.app_releases.app_release_view')
        ->with('app_release',$app_release)
        ->with('next',$next)
        ->with('previous',$previous)->with('app_release_statuses' , $app_release_statuses)
->with('clubs' , $clubs)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $app_release = App_release::find($id); 

      $app_release->is_active = ($request->is_active) ? $request->is_active : 0;
  $app_release->notes = $request->notes;
  $app_release->ios_release_version = $request->ios_release_version;
  $app_release->ios_version = $request->ios_version;
  $app_release->android_release_version = $request->android_release_version;
  $app_release->android_version = $request->android_version;
  $app_release->is_delivery_and_shipping = $request->is_delivery_and_shipping;
  $app_release->is_collect_and_pickup = $request->is_collect_and_pickup;
  $app_release->is_shop = $request->is_shop;
  $app_release->is_first_scorer = $request->is_first_scorer;
  $app_release->is_match_lineup = $request->is_match_lineup;
  $app_release->is_final_match = $request->is_final_match;
  $app_release->club_logo = $request->club_logo;
  $app_release->currency = $request->currency;
  $app_release->secondary_color = $request->secondary_color;
  $app_release->primary_color = $request->primary_color;
  $app_release->language = $request->language;
  $app_release->icon = $request->icon;
  $app_release->name = $request->name;
  $app_release->version = $request->version;
  $app_release->app_release_status_id = $request->app_release_status_id;
  $app_release->application_id = $request->application_id;
  $app_release->club_id = $request->club_id;
    
       $update =  $app_release->update();

       if($update) {
        \Session::flash('message', ' app_release was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $app_release = App_release::find($id);
      $delete =  $app_release->delete();

                   if($delete) {
        \Session::flash('message', ' app_release was deleted sucssesfily ');
          return back();
       }

    }
}
