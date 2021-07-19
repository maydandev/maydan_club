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
use App\MAYDAN\Fixture;
class FixtureAPIController extends APIController
{
    

             //////////////////////////////////fixtures/////////////////////////////////


                    public function fixtures(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $fixtures = Fixture::select('fixtures.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "fixtures retrieved successfully" : "fixtures retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$fixtures);
                    return $check_success;



                                    }


                    public function show_fixture(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['fixture_id' => 'required|exists:fixtures,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $fixture_id =  $request->fixture_id;
                    // check_failure
                    $fixture = Fixture::select('fixtures.*')->find($fixture_id);

                    $ResponseMessage =  ($lang=='ar') ?  "fixture retrieved successfully" : "fixture retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$fixture);
                    return $check_success;



                                    }


                    public function add_fixture(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'score_id' => 'required',
                        'goalsAwayTeam' => 'required',
                        'goalsHomeTeam' => 'required',
                        'away_team_id' => 'required',
                        'home_team_id' => 'required',
                        'referee' => 'required',
                        'venue' => 'required',
                        'elapsed' => 'required',
                        'statusShort' => 'required',
                        'status' => 'required',
                        'round' => 'required',
                        'secondHalfStart' => 'required',
                        'firstHalfStart' => 'required',
                        'event_timestamp' => 'required',
                        'event_date' => 'required',
                        'league_id' => 'required',
                        'fixture_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $fixture = new Fixture ();
      $fixture->score_id = $request->score_id;
  $fixture->goalsAwayTeam = $request->goalsAwayTeam;
  $fixture->goalsHomeTeam = $request->goalsHomeTeam;
  $fixture->away_team_id = $request->away_team_id;
  $fixture->home_team_id = $request->home_team_id;
  $fixture->referee = $request->referee;
  $fixture->venue = $request->venue;
  $fixture->elapsed = $request->elapsed;
  $fixture->statusShort = $request->statusShort;
  $fixture->status = $request->status;
  $fixture->round = $request->round;
  $fixture->secondHalfStart = $request->secondHalfStart;
  $fixture->firstHalfStart = $request->firstHalfStart;
  $fixture->event_timestamp = $request->event_timestamp;
  $fixture->event_date = $request->event_date;
  $fixture->league_id = $request->league_id;
  $fixture->fixture_id = $request->fixture_id;



                        $save = $fixture->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "fixture saved successfully" : "fixture saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$fixture);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_fixture(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $fixture_id =  $request->fixture_id;
                    


         $conditions = [ 'fixture_id' => 'required|exists:fixtures,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $fixture = Fixture::find($fixture_id);

                    // update
      if(isset($request->score_id)) {
  $fixture->score_id = $request->score_id;
                                   }  if(isset($request->goalsAwayTeam)) {
  $fixture->goalsAwayTeam = $request->goalsAwayTeam;
                                   }  if(isset($request->goalsHomeTeam)) {
  $fixture->goalsHomeTeam = $request->goalsHomeTeam;
                                   }  if(isset($request->away_team_id)) {
  $fixture->away_team_id = $request->away_team_id;
                                   }  if(isset($request->home_team_id)) {
  $fixture->home_team_id = $request->home_team_id;
                                   }  if(isset($request->referee)) {
  $fixture->referee = $request->referee;
                                   }  if(isset($request->venue)) {
  $fixture->venue = $request->venue;
                                   }  if(isset($request->elapsed)) {
  $fixture->elapsed = $request->elapsed;
                                   }  if(isset($request->statusShort)) {
  $fixture->statusShort = $request->statusShort;
                                   }  if(isset($request->status)) {
  $fixture->status = $request->status;
                                   }  if(isset($request->round)) {
  $fixture->round = $request->round;
                                   }  if(isset($request->secondHalfStart)) {
  $fixture->secondHalfStart = $request->secondHalfStart;
                                   }  if(isset($request->firstHalfStart)) {
  $fixture->firstHalfStart = $request->firstHalfStart;
                                   }  if(isset($request->event_timestamp)) {
  $fixture->event_timestamp = $request->event_timestamp;
                                   }  if(isset($request->event_date)) {
  $fixture->event_date = $request->event_date;
                                   }  if(isset($request->league_id)) {
  $fixture->league_id = $request->league_id;
                                   }  if(isset($request->fixture_id)) {
  $fixture->fixture_id = $request->fixture_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('fixtures');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $fixture->$key = $value;
      // }
      //  }
                  $fixture->update();
                    $ResponseMessage =  ($lang=='ar') ?  "fixture updated successfully" : "fixture updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$fixture);

                    return $check_success;

               }



                    public function delete_fixture(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['fixture_id' => 'required|exists:fixtures,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $fixture_id =  $request->fixture_id;

                    $fixture = Fixture::select('fixtures.*')->find($fixture_id);
                    $delete =  $fixture->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "fixture deleted successfully" : "fixture deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}