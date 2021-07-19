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
use App\MAYDAN\Football_team;
class Football_teamAPIController extends APIController
{
    

             //////////////////////////////////football_teams/////////////////////////////////


                    public function football_teams(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $football_teams = Football_team::select('football_teams.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "football_teams retrieved successfully" : "football_teams retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_teams);
                    return $check_success;



                                    }


                    public function show_football_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['football_team_id' => 'required|exists:football_teams,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $football_team_id =  $request->football_team_id;
                    // check_failure
                    $football_team = Football_team::select('football_teams.*')->find($football_team_id);

                    $ResponseMessage =  ($lang=='ar') ?  "football_team retrieved successfully" : "football_team retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team);
                    return $check_success;



                                    }


                    public function add_football_team(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'venue_capacity' => 'required',
                        'venue_city' => 'required',
                        'venue_address' => 'required',
                        'venue_surface' => 'required',
                        'venue_name' => 'required',
                        'founded' => 'required',
                        'country_id' => 'required',
                        'is_national' => 'required',
                        'logo' => 'required',
                        'code' => 'required',
                        'name' => 'required',
                        'team_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $football_team = new Football_team ();
      $football_team->venue_capacity = $request->venue_capacity;
  $football_team->venue_city = $request->venue_city;
  $football_team->venue_address = $request->venue_address;
  $football_team->venue_surface = $request->venue_surface;
  $football_team->venue_name = $request->venue_name;
  $football_team->founded = $request->founded;
  $football_team->country_id = $request->country_id;
  $football_team->is_national = $request->is_national;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/football_teams';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $football_team->logo = '/'.$destinationPath."/".$fileName;

      }}
  $football_team->code = $request->code;
  $football_team->name = $request->name;
  $football_team->team_id = $request->team_id;



                        $save = $football_team->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "football_team saved successfully" : "football_team saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_football_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $football_team_id =  $request->football_team_id;
                    


         $conditions = [ 'football_team_id' => 'required|exists:football_teams,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $football_team = Football_team::find($football_team_id);

                    // update
      if(isset($request->venue_capacity)) {
  $football_team->venue_capacity = $request->venue_capacity;
                                   }  if(isset($request->venue_city)) {
  $football_team->venue_city = $request->venue_city;
                                   }  if(isset($request->venue_address)) {
  $football_team->venue_address = $request->venue_address;
                                   }  if(isset($request->venue_surface)) {
  $football_team->venue_surface = $request->venue_surface;
                                   }  if(isset($request->venue_name)) {
  $football_team->venue_name = $request->venue_name;
                                   }  if(isset($request->founded)) {
  $football_team->founded = $request->founded;
                                   }  if(isset($request->country_id)) {
  $football_team->country_id = $request->country_id;
                                   }  if(isset($request->is_national)) {
  $football_team->is_national = $request->is_national;
                                   }  if(isset($request->logo)) {
  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/football_teams';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $football_team->logo = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->code)) {
  $football_team->code = $request->code;
                                   }  if(isset($request->name)) {
  $football_team->name = $request->name;
                                   }  if(isset($request->team_id)) {
  $football_team->team_id = $request->team_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('football_teams');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $football_team->$key = $value;
      // }
      //  }
                  $football_team->update();
                    $ResponseMessage =  ($lang=='ar') ?  "football_team updated successfully" : "football_team updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team);

                    return $check_success;

               }



                    public function delete_football_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['football_team_id' => 'required|exists:football_teams,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $football_team_id =  $request->football_team_id;

                    $football_team = Football_team::select('football_teams.*')->find($football_team_id);
                    $delete =  $football_team->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "football_team deleted successfully" : "football_team deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}