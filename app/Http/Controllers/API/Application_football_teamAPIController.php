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
use App\MAYDAN\Application_football_team;
class Application_football_teamAPIController extends APIController
{
    

             //////////////////////////////////application_football_teams/////////////////////////////////


                    public function application_football_teams(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $application_football_teams = Application_football_team::select('application_football_teams.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "application_football_teams retrieved successfully" : "application_football_teams retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application_football_teams);
                    return $check_success;



                                    }


                    public function show_application_football_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['application_football_team_id' => 'required|exists:application_football_teams,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $application_football_team_id =  $request->application_football_team_id;
                    // check_failure
                    $application_football_team = Application_football_team::select('application_football_teams.*')->find($application_football_team_id);

                    $ResponseMessage =  ($lang=='ar') ?  "application_football_team retrieved successfully" : "application_football_team retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application_football_team);
                    return $check_success;



                                    }


                    public function add_application_football_team(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'football_team_id' => 'required',
                        'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $application_football_team = new Application_football_team ();
      $application_football_team->football_team_id = $request->football_team_id;
  $application_football_team->application_id = $request->application_id;



                        $save = $application_football_team->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "application_football_team saved successfully" : "application_football_team saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application_football_team);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_application_football_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $application_football_team_id =  $request->application_football_team_id;
                    


         $conditions = [ 'application_football_team_id' => 'required|exists:application_football_teams,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $application_football_team = Application_football_team::find($application_football_team_id);

                    // update
      if(isset($request->football_team_id)) {
  $application_football_team->football_team_id = $request->football_team_id;
                                   }  if(isset($request->application_id)) {
  $application_football_team->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('application_football_teams');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $application_football_team->$key = $value;
      // }
      //  }
                  $application_football_team->update();
                    $ResponseMessage =  ($lang=='ar') ?  "application_football_team updated successfully" : "application_football_team updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$application_football_team);

                    return $check_success;

               }



                    public function delete_application_football_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['application_football_team_id' => 'required|exists:application_football_teams,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $application_football_team_id =  $request->application_football_team_id;

                    $application_football_team = Application_football_team::select('application_football_teams.*')->find($application_football_team_id);
                    $delete =  $application_football_team->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "application_football_team deleted successfully" : "application_football_team deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}