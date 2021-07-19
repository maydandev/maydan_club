<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Setting;
use App\Models\MAYDAN\Club;

use Yajra\Datatables\Datatables;

class SettingController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.settings.settings');

    }





   public function all_data()
    {


   $settings = Setting::select('settings.*'






                        ,'clubs.code as club_id'
  )->
leftjoin('clubs','clubs.id','=','settings.club_id')->
get();
return Datatables::of($settings)->addColumn('action', function ($setting) {
                return '
                <a href="/settings/'.$setting->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $clubs = Club::all();
       return view('MAYDAN.settings.setting_add')->with('clubs' , $clubs)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'delivery_and_shipping_note' => 'required',

       'is_delivery_and_shipping' => 'required',

       'collect_and_pickup_note' => 'required',

       'is_collect_and_pickup' => 'required',

       'shop_note' => 'required',

       'is_shop' => 'required',

       'first_scorer_points' => 'required',

       'first_scorer_note' => 'required',

       'is_first_scorer' => 'required',

       'match_lineup_points' => 'required',

       'match_lineup_note' => 'required',

       'is_match_lineup' => 'required',

       'final_match_points' => 'required',

       'final_match_note' => 'required',

       'is_final_match' => 'required',

       'application_id' => 'required',

       'club_id' => 'required',]);
    $setting = new Setting ();

         $setting->delivery_and_shipping_note = $request->delivery_and_shipping_note;
  $setting->is_delivery_and_shipping = $request->is_delivery_and_shipping;
  $setting->collect_and_pickup_note = $request->collect_and_pickup_note;
  $setting->is_collect_and_pickup = $request->is_collect_and_pickup;
  $setting->shop_note = $request->shop_note;
  $setting->is_shop = $request->is_shop;
  $setting->first_scorer_points = $request->first_scorer_points;
  $setting->first_scorer_note = $request->first_scorer_note;
  $setting->is_first_scorer = $request->is_first_scorer;
  $setting->match_lineup_points = $request->match_lineup_points;
  $setting->match_lineup_note = $request->match_lineup_note;
  $setting->is_match_lineup = $request->is_match_lineup;
  $setting->final_match_points = $request->final_match_points;
  $setting->final_match_note = $request->final_match_note;
  $setting->is_final_match = $request->is_final_match;
  $setting->application_id = $request->application_id;
  $setting->club_id = $request->club_id;

      $save = $setting->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/settings/'.$setting->id.'">setting</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:settings,id',]);

    $setting = Setting::find($id);
    $next = Setting::where('id','>',$id)->min('id');
    $previous = Setting::where('id','<',$id)->max('id');
$clubs = Club::all();
       return view('MAYDAN.settings.setting_view')
        ->with('setting',$setting)
        ->with('next',$next)
        ->with('previous',$previous)->with('clubs' , $clubs)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $setting = Setting::find($id); 

      $setting->delivery_and_shipping_note = $request->delivery_and_shipping_note;
  $setting->is_delivery_and_shipping = $request->is_delivery_and_shipping;
  $setting->collect_and_pickup_note = $request->collect_and_pickup_note;
  $setting->is_collect_and_pickup = $request->is_collect_and_pickup;
  $setting->shop_note = $request->shop_note;
  $setting->is_shop = $request->is_shop;
  $setting->first_scorer_points = $request->first_scorer_points;
  $setting->first_scorer_note = $request->first_scorer_note;
  $setting->is_first_scorer = $request->is_first_scorer;
  $setting->match_lineup_points = $request->match_lineup_points;
  $setting->match_lineup_note = $request->match_lineup_note;
  $setting->is_match_lineup = $request->is_match_lineup;
  $setting->final_match_points = $request->final_match_points;
  $setting->final_match_note = $request->final_match_note;
  $setting->is_final_match = $request->is_final_match;
  $setting->application_id = $request->application_id;
  $setting->club_id = $request->club_id;
    
       $update =  $setting->update();

       if($update) {
        \Session::flash('message', ' setting was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $setting = Setting::find($id);
      $delete =  $setting->delete();

                   if($delete) {
        \Session::flash('message', ' setting was deleted sucssesfily ');
          return back();
       }

    }
}
