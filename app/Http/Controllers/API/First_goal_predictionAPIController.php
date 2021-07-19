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
use App\MAYDAN\First_goal_prediction;
class First_goal_predictionAPIController extends APIController
{
    

             //////////////////////////////////first_goal_predictions/////////////////////////////////


                    public function first_goal_predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $first_goal_predictions = First_goal_prediction::select('first_goal_predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_predictions retrieved successfully" : "first_goal_predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_predictions);
                    return $check_success;



                                    }


                    public function show_first_goal_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['first_goal_prediction_id' => 'required|exists:first_goal_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $first_goal_prediction_id =  $request->first_goal_prediction_id;
                    // check_failure
                    $first_goal_prediction = First_goal_prediction::select('first_goal_predictions.*')->find($first_goal_prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_prediction retrieved successfully" : "first_goal_prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_prediction);
                    return $check_success;



                                    }


                    public function add_first_goal_prediction(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'data' => 'required',
                        'result_first_goal_player_name' => 'required',
                        'result_first_goal_player_id' => 'required',
                        'prediction_id' => 'required',
                        'fixture_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $first_goal_prediction = new First_goal_prediction ();
      $first_goal_prediction->data = $request->data;
  $first_goal_prediction->result_first_goal_player_name = $request->result_first_goal_player_name;
  $first_goal_prediction->result_first_goal_player_id = $request->result_first_goal_player_id;
  $first_goal_prediction->prediction_id = $request->prediction_id;
  $first_goal_prediction->fixture_id = $request->fixture_id;



                        $save = $first_goal_prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_prediction saved successfully" : "first_goal_prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_first_goal_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $first_goal_prediction_id =  $request->first_goal_prediction_id;
                    


         $conditions = [ 'first_goal_prediction_id' => 'required|exists:first_goal_predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $first_goal_prediction = First_goal_prediction::find($first_goal_prediction_id);

                    // update
      if(isset($request->data)) {
  $first_goal_prediction->data = $request->data;
                                   }  if(isset($request->result_first_goal_player_name)) {
  $first_goal_prediction->result_first_goal_player_name = $request->result_first_goal_player_name;
                                   }  if(isset($request->result_first_goal_player_id)) {
  $first_goal_prediction->result_first_goal_player_id = $request->result_first_goal_player_id;
                                   }  if(isset($request->prediction_id)) {
  $first_goal_prediction->prediction_id = $request->prediction_id;
                                   }  if(isset($request->fixture_id)) {
  $first_goal_prediction->fixture_id = $request->fixture_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('first_goal_predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $first_goal_prediction->$key = $value;
      // }
      //  }
                  $first_goal_prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_prediction updated successfully" : "first_goal_prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_prediction);

                    return $check_success;

               }



                    public function delete_first_goal_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['first_goal_prediction_id' => 'required|exists:first_goal_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $first_goal_prediction_id =  $request->first_goal_prediction_id;

                    $first_goal_prediction = First_goal_prediction::select('first_goal_predictions.*')->find($first_goal_prediction_id);
                    $delete =  $first_goal_prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_prediction deleted successfully" : "first_goal_prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}