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
use App\MAYDAN\Lineup_user_prediction_player;
class Lineup_user_prediction_playerAPIController extends APIController
{
    

             //////////////////////////////////lineup_user_prediction_players/////////////////////////////////


                    public function lineup_user_prediction_players(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $lineup_user_prediction_players = Lineup_user_prediction_player::select('lineup_user_prediction_players.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction_players retrieved successfully" : "lineup_user_prediction_players retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction_players);
                    return $check_success;



                                    }


                    public function show_lineup_user_prediction_player(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['lineup_user_prediction_player_id' => 'required|exists:lineup_user_prediction_players,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $lineup_user_prediction_player_id =  $request->lineup_user_prediction_player_id;
                    // check_failure
                    $lineup_user_prediction_player = Lineup_user_prediction_player::select('lineup_user_prediction_players.*')->find($lineup_user_prediction_player_id);

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction_player retrieved successfully" : "lineup_user_prediction_player retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction_player);
                    return $check_success;



                                    }


                    public function add_lineup_user_prediction_player(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'user_id' => 'required',
                        'player_name' => 'required',
                        'player_id' => 'required',
                        'lineup_prediction_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $lineup_user_prediction_player = new Lineup_user_prediction_player ();
      $lineup_user_prediction_player->user_id = $request->user_id;
  $lineup_user_prediction_player->player_name = $request->player_name;
  $lineup_user_prediction_player->player_id = $request->player_id;
  $lineup_user_prediction_player->lineup_prediction_id = $request->lineup_prediction_id;



                        $save = $lineup_user_prediction_player->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction_player saved successfully" : "lineup_user_prediction_player saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction_player);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_lineup_user_prediction_player(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $lineup_user_prediction_player_id =  $request->lineup_user_prediction_player_id;
                    


         $conditions = [ 'lineup_user_prediction_player_id' => 'required|exists:lineup_user_prediction_players,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $lineup_user_prediction_player = Lineup_user_prediction_player::find($lineup_user_prediction_player_id);

                    // update
      if(isset($request->user_id)) {
  $lineup_user_prediction_player->user_id = $request->user_id;
                                   }  if(isset($request->player_name)) {
  $lineup_user_prediction_player->player_name = $request->player_name;
                                   }  if(isset($request->player_id)) {
  $lineup_user_prediction_player->player_id = $request->player_id;
                                   }  if(isset($request->lineup_prediction_id)) {
  $lineup_user_prediction_player->lineup_prediction_id = $request->lineup_prediction_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('lineup_user_prediction_players');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $lineup_user_prediction_player->$key = $value;
      // }
      //  }
                  $lineup_user_prediction_player->update();
                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction_player updated successfully" : "lineup_user_prediction_player updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction_player);

                    return $check_success;

               }



                    public function delete_lineup_user_prediction_player(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['lineup_user_prediction_player_id' => 'required|exists:lineup_user_prediction_players,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $lineup_user_prediction_player_id =  $request->lineup_user_prediction_player_id;

                    $lineup_user_prediction_player = Lineup_user_prediction_player::select('lineup_user_prediction_players.*')->find($lineup_user_prediction_player_id);
                    $delete =  $lineup_user_prediction_player->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction_player deleted successfully" : "lineup_user_prediction_player deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}