<?php

namespace App\Http\Controllers\API;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use session;
use DateTime;
use DB;
use App;
use Auth;
use Carbon\Carbon;
use App\MAYDAN\Setting;
class SettingAPIController extends APIController
{
    

             //////////////////////////////////settings/////////////////////////////////


                    public function settings(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $settings = Setting::select('settings.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "settings retrieved successfully" : "settings retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$settings);
                    return $check_success;



                                    }


                    public function show_setting(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['setting_id' => 'required|exists:settings,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $setting_id =  $request->setting_id;
                    // check_failure
                    $setting = Setting::select('settings.*')->find($setting_id);

                    $ResponseMessage =  ($lang=='ar') ?  "setting retrieved successfully" : "setting retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$setting);
                    return $check_success;



                                    }


                    public function add_setting(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
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
                        'club_id' => 'required|exists:clubs,id',
        ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

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

                    $ResponseMessage =  ($lang=='ar') ?  "setting saved successfully" : "setting saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$setting);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_setting(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $setting_id =  $request->setting_id;
                    


         $conditions = [ 'setting_id' => 'required|exists:settings,id'];
                  if(isset($request->club_id)) {
                $conditions['club_id'] = 'required|exists:clubs,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $setting = Setting::find($setting_id);

                    // update
      if(isset($request->delivery_and_shipping_note)) {
  $setting->delivery_and_shipping_note = $request->delivery_and_shipping_note;
                                   }  if(isset($request->is_delivery_and_shipping)) {
  $setting->is_delivery_and_shipping = $request->is_delivery_and_shipping;
                                   }  if(isset($request->collect_and_pickup_note)) {
  $setting->collect_and_pickup_note = $request->collect_and_pickup_note;
                                   }  if(isset($request->is_collect_and_pickup)) {
  $setting->is_collect_and_pickup = $request->is_collect_and_pickup;
                                   }  if(isset($request->shop_note)) {
  $setting->shop_note = $request->shop_note;
                                   }  if(isset($request->is_shop)) {
  $setting->is_shop = $request->is_shop;
                                   }  if(isset($request->first_scorer_points)) {
  $setting->first_scorer_points = $request->first_scorer_points;
                                   }  if(isset($request->first_scorer_note)) {
  $setting->first_scorer_note = $request->first_scorer_note;
                                   }  if(isset($request->is_first_scorer)) {
  $setting->is_first_scorer = $request->is_first_scorer;
                                   }  if(isset($request->match_lineup_points)) {
  $setting->match_lineup_points = $request->match_lineup_points;
                                   }  if(isset($request->match_lineup_note)) {
  $setting->match_lineup_note = $request->match_lineup_note;
                                   }  if(isset($request->is_match_lineup)) {
  $setting->is_match_lineup = $request->is_match_lineup;
                                   }  if(isset($request->final_match_points)) {
  $setting->final_match_points = $request->final_match_points;
                                   }  if(isset($request->final_match_note)) {
  $setting->final_match_note = $request->final_match_note;
                                   }  if(isset($request->is_final_match)) {
  $setting->is_final_match = $request->is_final_match;
                                   }  if(isset($request->application_id)) {
  $setting->application_id = $request->application_id;
                                   }  if(isset($request->club_id)) {
  $setting->club_id = $request->club_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('settings');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $setting->$key = $value;
      // }
      //  }
                  $setting->update();
                    $ResponseMessage =  ($lang=='ar') ?  "setting updated successfully" : "setting updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$setting);

                    return $check_success;

               }



                    public function delete_setting(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['setting_id' => 'required|exists:settings,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $setting_id =  $request->setting_id;

                    $setting = Setting::select('settings.*')->find($setting_id);
                    $delete =  $setting->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "setting deleted successfully" : "setting deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}