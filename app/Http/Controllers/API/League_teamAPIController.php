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
use App\MAYDAN\League_team;
class League_teamAPIController extends APIController
{
    

             //////////////////////////////////league_teams/////////////////////////////////


                    public function league_teams(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $league_teams = League_team::select('league_teams.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "league_teams retrieved successfully" : "league_teams retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_teams);
                    return $check_success;



                                    }


                    public function show_league_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['league_team_id' => 'required|exists:league_teams,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $league_team_id =  $request->league_team_id;
                    // check_failure
                    $league_team = League_team::select('league_teams.*')->find($league_team_id);

                    $ResponseMessage =  ($lang=='ar') ?  "league_team retrieved successfully" : "league_team retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_team);
                    return $check_success;



                                    }


                    public function add_league_team(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'league_id' => 'required',
                        'team_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $league_team = new League_team ();
      $league_team->league_id = $request->league_id;
  $league_team->team_id = $request->team_id;



                        $save = $league_team->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "league_team saved successfully" : "league_team saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_team);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_league_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $league_team_id =  $request->league_team_id;
                    


         $conditions = [ 'league_team_id' => 'required|exists:league_teams,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $league_team = League_team::find($league_team_id);

                    // update
      if(isset($request->league_id)) {
  $league_team->league_id = $request->league_id;
                                   }  if(isset($request->team_id)) {
  $league_team->team_id = $request->team_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('league_teams');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $league_team->$key = $value;
      // }
      //  }
                  $league_team->update();
                    $ResponseMessage =  ($lang=='ar') ?  "league_team updated successfully" : "league_team updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_team);

                    return $check_success;

               }



                    public function delete_league_team(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['league_team_id' => 'required|exists:league_teams,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $league_team_id =  $request->league_team_id;

                    $league_team = League_team::select('league_teams.*')->find($league_team_id);
                    $delete =  $league_team->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "league_team deleted successfully" : "league_team deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}