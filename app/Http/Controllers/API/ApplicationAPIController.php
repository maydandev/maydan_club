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
use App\MAYDAN\Application;
class ApplicationAPIController extends APIController
{
    

             //////////////////////////////////applications/////////////////////////////////


                    public function applications(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $applications = Application::select('applications.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "applications retrieved successfully" : "applications retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$applications);
                    return $check_success;



                                    }


                    public function show_application(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['application_id' => 'required|exists:applications,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $application_id =  $request->application_id;
                    // check_failure
                    $application = Application::select('applications.*')->find($application_id);

                    $ResponseMessage =  ($lang=='ar') ?  "application retrieved successfully" : "application retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application);
                    return $check_success;



                                    }


                    public function add_application(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
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
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

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

                    $ResponseMessage =  ($lang=='ar') ?  "application saved successfully" : "application saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_application(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $application_id =  $request->application_id;
                    


         $conditions = [ 'application_id' => 'required|exists:applications,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $application = Application::find($application_id);

                    // update
      if(isset($request->club_id)) {
  $application->club_id = $request->club_id;
                                   }  if(isset($request->configuration)) {
  $application->configuration = $request->configuration;
                                   }  if(isset($request->base_url)) {
  $application->base_url = $request->base_url;
                                   }  if(isset($request->current_season)) {
  $application->current_season = $request->current_season;
                                   }  if(isset($request->current_league_id)) {
  $application->current_league_id = $request->current_league_id;
                                   }  if(isset($request->splash_image)) {
  $application->splash_image = $request->splash_image;
                                   }  if(isset($request->team_id)) {
  $application->team_id = $request->team_id;
                                   }  if(isset($request->club_logo)) {
  $application->club_logo = $request->club_logo;
                                   }  if(isset($request->currency)) {
  $application->currency = $request->currency;
                                   }  if(isset($request->is_gradient_secondary_color)) {
  $application->is_gradient_secondary_color = $request->is_gradient_secondary_color;
                                   }  if(isset($request->is_gradient_primary_color)) {
  $application->is_gradient_primary_color = $request->is_gradient_primary_color;
                                   }  if(isset($request->alternative_secondary_color)) {
  $application->alternative_secondary_color = $request->alternative_secondary_color;
                                   }  if(isset($request->alternative_primary_color)) {
  $application->alternative_primary_color = $request->alternative_primary_color;
                                   }  if(isset($request->secondary_color)) {
  $application->secondary_color = $request->secondary_color;
                                   }  if(isset($request->primary_color)) {
  $application->primary_color = $request->primary_color;
                                   }  if(isset($request->language)) {
  $application->language = $request->language;
                                   }  if(isset($request->icon)) {
  $application->icon = $request->icon;
                                   }  if(isset($request->name)) {
  $application->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('applications');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $application->$key = $value;
      // }
      //  }
                  $application->update();
                    $ResponseMessage =  ($lang=='ar') ?  "application updated successfully" : "application updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application);

                    return $check_success;

               }



                    public function delete_application(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['application_id' => 'required|exists:applications,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $application_id =  $request->application_id;

                    $application = Application::select('applications.*')->find($application_id);
                    $delete =  $application->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "application deleted successfully" : "application deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}