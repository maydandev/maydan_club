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
use App\MAYDAN\Player;
class PlayerAPIController extends APIController
{
    

             //////////////////////////////////players/////////////////////////////////


                    public function players(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $players = Player::select('players.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "players retrieved successfully" : "players retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$players);
                    return $check_success;



                                    }


                    public function show_player(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['player_id' => 'required|exists:players,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $player_id =  $request->player_id;
                    // check_failure
                    $player = Player::select('players.*')->find($player_id);

                    $ResponseMessage =  ($lang=='ar') ?  "player retrieved successfully" : "player retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$player);
                    return $check_success;



                                    }


                    public function add_player(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'weight' => 'required',
                        'height' => 'required',
                        'nationality' => 'required',
                        'birth_country' => 'required',
                        'birth_place' => 'required',
                        'birth_date' => 'required',
                        'age' => 'required',
                        'position' => 'required',
                        'number' => 'required',
                        'lastname' => 'required',
                        'firstname' => 'required',
                        'player_name' => 'required',
                        'player_id' => 'required',
                        'season' => 'required',
                        'team_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $player = new Player ();
      $player->weight = $request->weight;
  $player->height = $request->height;
  $player->nationality = $request->nationality;
  $player->birth_country = $request->birth_country;
  $player->birth_place = $request->birth_place;
  $player->birth_date = $request->birth_date;
  $player->age = $request->age;
  $player->position = $request->position;
  $player->number = $request->number;
  $player->lastname = $request->lastname;
  $player->firstname = $request->firstname;
  $player->player_name = $request->player_name;
  $player->player_id = $request->player_id;
  $player->season = $request->season;
  $player->team_id = $request->team_id;



                        $save = $player->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "player saved successfully" : "player saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$player);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_player(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $player_id =  $request->player_id;
                    


         $conditions = [ 'player_id' => 'required|exists:players,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $player = Player::find($player_id);

                    // update
      if(isset($request->weight)) {
  $player->weight = $request->weight;
                                   }  if(isset($request->height)) {
  $player->height = $request->height;
                                   }  if(isset($request->nationality)) {
  $player->nationality = $request->nationality;
                                   }  if(isset($request->birth_country)) {
  $player->birth_country = $request->birth_country;
                                   }  if(isset($request->birth_place)) {
  $player->birth_place = $request->birth_place;
                                   }  if(isset($request->birth_date)) {
  $player->birth_date = $request->birth_date;
                                   }  if(isset($request->age)) {
  $player->age = $request->age;
                                   }  if(isset($request->position)) {
  $player->position = $request->position;
                                   }  if(isset($request->number)) {
  $player->number = $request->number;
                                   }  if(isset($request->lastname)) {
  $player->lastname = $request->lastname;
                                   }  if(isset($request->firstname)) {
  $player->firstname = $request->firstname;
                                   }  if(isset($request->player_name)) {
  $player->player_name = $request->player_name;
                                   }  if(isset($request->player_id)) {
  $player->player_id = $request->player_id;
                                   }  if(isset($request->season)) {
  $player->season = $request->season;
                                   }  if(isset($request->team_id)) {
  $player->team_id = $request->team_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('players');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $player->$key = $value;
      // }
      //  }
                  $player->update();
                    $ResponseMessage =  ($lang=='ar') ?  "player updated successfully" : "player updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$player);

                    return $check_success;

               }



                    public function delete_player(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['player_id' => 'required|exists:players,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $player_id =  $request->player_id;

                    $player = Player::select('players.*')->find($player_id);
                    $delete =  $player->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "player deleted successfully" : "player deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}