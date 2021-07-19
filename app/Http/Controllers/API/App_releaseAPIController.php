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
use App\MAYDAN\App_release;
class App_releaseAPIController extends APIController
{
    

             //////////////////////////////////app_releases/////////////////////////////////


                    public function app_releases(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $app_releases = App_release::select('app_releases.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "app_releases retrieved successfully" : "app_releases retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_releases);
                    return $check_success;



                                    }


                    public function show_app_release(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['app_release_id' => 'required|exists:app_releases,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $app_release_id =  $request->app_release_id;
                    // check_failure
                    $app_release = App_release::select('app_releases.*')->find($app_release_id);

                    $ResponseMessage =  ($lang=='ar') ?  "app_release retrieved successfully" : "app_release retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release);
                    return $check_success;



                                    }


                    public function add_app_release(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
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
                        'app_release_status_id' => 'required|exists:app_release_statuses,id',
            'application_id' => 'required',
                        'club_id' => 'required|exists:clubs,id',
        ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

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

                    $ResponseMessage =  ($lang=='ar') ?  "app_release saved successfully" : "app_release saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_app_release(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $app_release_id =  $request->app_release_id;
                    


         $conditions = [ 'app_release_id' => 'required|exists:app_releases,id'];
                  if(isset($request->app_release_status_id)) {
                $conditions['app_release_status_id'] = 'required|exists:app_release_statuses,id';
                  }                  if(isset($request->club_id)) {
                $conditions['club_id'] = 'required|exists:clubs,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $app_release = App_release::find($app_release_id);

                    // update
      $app_release->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->notes)) {
  $app_release->notes = $request->notes;
                                   }  if(isset($request->ios_release_version)) {
  $app_release->ios_release_version = $request->ios_release_version;
                                   }  if(isset($request->ios_version)) {
  $app_release->ios_version = $request->ios_version;
                                   }  if(isset($request->android_release_version)) {
  $app_release->android_release_version = $request->android_release_version;
                                   }  if(isset($request->android_version)) {
  $app_release->android_version = $request->android_version;
                                   }  if(isset($request->is_delivery_and_shipping)) {
  $app_release->is_delivery_and_shipping = $request->is_delivery_and_shipping;
                                   }  if(isset($request->is_collect_and_pickup)) {
  $app_release->is_collect_and_pickup = $request->is_collect_and_pickup;
                                   }  if(isset($request->is_shop)) {
  $app_release->is_shop = $request->is_shop;
                                   }  if(isset($request->is_first_scorer)) {
  $app_release->is_first_scorer = $request->is_first_scorer;
                                   }  if(isset($request->is_match_lineup)) {
  $app_release->is_match_lineup = $request->is_match_lineup;
                                   }  if(isset($request->is_final_match)) {
  $app_release->is_final_match = $request->is_final_match;
                                   }  if(isset($request->club_logo)) {
  $app_release->club_logo = $request->club_logo;
                                   }  if(isset($request->currency)) {
  $app_release->currency = $request->currency;
                                   }  if(isset($request->secondary_color)) {
  $app_release->secondary_color = $request->secondary_color;
                                   }  if(isset($request->primary_color)) {
  $app_release->primary_color = $request->primary_color;
                                   }  if(isset($request->language)) {
  $app_release->language = $request->language;
                                   }  if(isset($request->icon)) {
  $app_release->icon = $request->icon;
                                   }  if(isset($request->name)) {
  $app_release->name = $request->name;
                                   }  if(isset($request->version)) {
  $app_release->version = $request->version;
                                   }  if(isset($request->app_release_status_id)) {
  $app_release->app_release_status_id = $request->app_release_status_id;
                                   }  if(isset($request->application_id)) {
  $app_release->application_id = $request->application_id;
                                   }  if(isset($request->club_id)) {
  $app_release->club_id = $request->club_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('app_releases');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $app_release->$key = $value;
      // }
      //  }
                  $app_release->update();
                    $ResponseMessage =  ($lang=='ar') ?  "app_release updated successfully" : "app_release updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release);

                    return $check_success;

               }



                    public function delete_app_release(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['app_release_id' => 'required|exists:app_releases,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $app_release_id =  $request->app_release_id;

                    $app_release = App_release::select('app_releases.*')->find($app_release_id);
                    $delete =  $app_release->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "app_release deleted successfully" : "app_release deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}