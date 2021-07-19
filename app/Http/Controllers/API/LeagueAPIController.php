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
use App\MAYDAN\League;
class LeagueAPIController extends APIController
{
    

             //////////////////////////////////leagues/////////////////////////////////


                    public function leagues(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $leagues = League::select('leagues.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "leagues retrieved successfully" : "leagues retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$leagues);
                    return $check_success;



                                    }


                    public function show_league(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['league_id' => 'required|exists:leagues,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $league_id =  $request->league_id;
                    // check_failure
                    $league = League::select('leagues.*')->find($league_id);

                    $ResponseMessage =  ($lang=='ar') ?  "league retrieved successfully" : "league retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league);
                    return $check_success;



                                    }


                    public function add_league(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'coverage_odds' => 'required',
                        'coverage_predictions' => 'required',
                        'coverage_topscorers' => 'required',
                        'coverage_players' => 'required',
                        'coverage_fixtures_players_statistics' => 'required',
                        'coverage_fixtures_statistics' => 'required',
                        'coverage_fixtures_lineups' => 'required',
                        'coverage_fixtures_events' => 'required',
                        'coverage_standings' => 'required',
                        'is_current' => 'required',
                        'standings' => 'required',
                        'flag' => 'required',
                        'logo' => 'required',
                        'season_end' => 'required',
                        'season_start' => 'required',
                        'season' => 'required',
                        'country_id' => 'required',
                        'league_type_id' => 'required',
                        'name' => 'required',
                        'league_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $league = new League ();
      $league->coverage_odds = $request->coverage_odds;
  $league->coverage_predictions = $request->coverage_predictions;
  $league->coverage_topscorers = $request->coverage_topscorers;
  $league->coverage_players = $request->coverage_players;
  $league->coverage_fixtures_players_statistics = $request->coverage_fixtures_players_statistics;
  $league->coverage_fixtures_statistics = $request->coverage_fixtures_statistics;
  $league->coverage_fixtures_lineups = $request->coverage_fixtures_lineups;
  $league->coverage_fixtures_events = $request->coverage_fixtures_events;
  $league->coverage_standings = $request->coverage_standings;
  $league->is_current = $request->is_current;
  $league->standings = $request->standings;

  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/leagues';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $league->flag = '/'.$destinationPath."/".$fileName;

      }}

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/leagues';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $league->logo = '/'.$destinationPath."/".$fileName;

      }}
  $league->season_end = $request->season_end;
  $league->season_start = $request->season_start;
  $league->season = $request->season;
  $league->country_id = $request->country_id;
  $league->league_type_id = $request->league_type_id;
  $league->name = $request->name;
  $league->league_id = $request->league_id;



                        $save = $league->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "league saved successfully" : "league saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_league(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $league_id =  $request->league_id;
                    


         $conditions = [ 'league_id' => 'required|exists:leagues,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $league = League::find($league_id);

                    // update
      if(isset($request->coverage_odds)) {
  $league->coverage_odds = $request->coverage_odds;
                                   }  if(isset($request->coverage_predictions)) {
  $league->coverage_predictions = $request->coverage_predictions;
                                   }  if(isset($request->coverage_topscorers)) {
  $league->coverage_topscorers = $request->coverage_topscorers;
                                   }  if(isset($request->coverage_players)) {
  $league->coverage_players = $request->coverage_players;
                                   }  if(isset($request->coverage_fixtures_players_statistics)) {
  $league->coverage_fixtures_players_statistics = $request->coverage_fixtures_players_statistics;
                                   }  if(isset($request->coverage_fixtures_statistics)) {
  $league->coverage_fixtures_statistics = $request->coverage_fixtures_statistics;
                                   }  if(isset($request->coverage_fixtures_lineups)) {
  $league->coverage_fixtures_lineups = $request->coverage_fixtures_lineups;
                                   }  if(isset($request->coverage_fixtures_events)) {
  $league->coverage_fixtures_events = $request->coverage_fixtures_events;
                                   }  if(isset($request->coverage_standings)) {
  $league->coverage_standings = $request->coverage_standings;
                                   }  if(isset($request->is_current)) {
  $league->is_current = $request->is_current;
                                   }  if(isset($request->standings)) {
  $league->standings = $request->standings;
                                   }  if(isset($request->flag)) {
  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/leagues';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $league->flag = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->logo)) {
  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/leagues';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $league->logo = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->season_end)) {
  $league->season_end = $request->season_end;
                                   }  if(isset($request->season_start)) {
  $league->season_start = $request->season_start;
                                   }  if(isset($request->season)) {
  $league->season = $request->season;
                                   }  if(isset($request->country_id)) {
  $league->country_id = $request->country_id;
                                   }  if(isset($request->league_type_id)) {
  $league->league_type_id = $request->league_type_id;
                                   }  if(isset($request->name)) {
  $league->name = $request->name;
                                   }  if(isset($request->league_id)) {
  $league->league_id = $request->league_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('leagues');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $league->$key = $value;
      // }
      //  }
                  $league->update();
                    $ResponseMessage =  ($lang=='ar') ?  "league updated successfully" : "league updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league);

                    return $check_success;

               }



                    public function delete_league(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['league_id' => 'required|exists:leagues,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $league_id =  $request->league_id;

                    $league = League::select('leagues.*')->find($league_id);
                    $delete =  $league->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "league deleted successfully" : "league deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}