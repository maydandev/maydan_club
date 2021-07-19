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
use App\MAYDAN\Final_result_prediction;
class Final_result_predictionAPIController extends APIController
{
    

             //////////////////////////////////final_result_predictions/////////////////////////////////


                    public function final_result_predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $final_result_predictions = Final_result_prediction::select('final_result_predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_predictions retrieved successfully" : "final_result_predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_predictions);
                    return $check_success;



                                    }


                    public function show_final_result_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['final_result_prediction_id' => 'required|exists:final_result_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $final_result_prediction_id =  $request->final_result_prediction_id;
                    // check_failure
                    $final_result_prediction = Final_result_prediction::select('final_result_predictions.*')->find($final_result_prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction retrieved successfully" : "final_result_prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction);
                    return $check_success;



                                    }


                    public function add_final_result_prediction(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'data' => 'required',
                        'prediction_id' => 'required',
                        'is_active' => 'required',
                        'result_away_team' => 'required',
                        'result_home_team' => 'required',
                        'status' => 'required',
                        'away_team_id' => 'required',
                        'home_team_id' => 'required',
                        'fixture_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $final_result_prediction = new Final_result_prediction ();
      $final_result_prediction->data = $request->data;
  $final_result_prediction->prediction_id = $request->prediction_id;
  $final_result_prediction->is_active = ($request->is_active) ? $request->is_active : 0;
  $final_result_prediction->result_away_team = $request->result_away_team;
  $final_result_prediction->result_home_team = $request->result_home_team;
  $final_result_prediction->status = $request->status;
  $final_result_prediction->away_team_id = $request->away_team_id;
  $final_result_prediction->home_team_id = $request->home_team_id;
  $final_result_prediction->fixture_id = $request->fixture_id;



                        $save = $final_result_prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction saved successfully" : "final_result_prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_final_result_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $final_result_prediction_id =  $request->final_result_prediction_id;
                    


         $conditions = [ 'final_result_prediction_id' => 'required|exists:final_result_predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $final_result_prediction = Final_result_prediction::find($final_result_prediction_id);

                    // update
      if(isset($request->data)) {
  $final_result_prediction->data = $request->data;
                                   }  if(isset($request->prediction_id)) {
  $final_result_prediction->prediction_id = $request->prediction_id;
                                   }  $final_result_prediction->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->result_away_team)) {
  $final_result_prediction->result_away_team = $request->result_away_team;
                                   }  if(isset($request->result_home_team)) {
  $final_result_prediction->result_home_team = $request->result_home_team;
                                   }  if(isset($request->status)) {
  $final_result_prediction->status = $request->status;
                                   }  if(isset($request->away_team_id)) {
  $final_result_prediction->away_team_id = $request->away_team_id;
                                   }  if(isset($request->home_team_id)) {
  $final_result_prediction->home_team_id = $request->home_team_id;
                                   }  if(isset($request->fixture_id)) {
  $final_result_prediction->fixture_id = $request->fixture_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('final_result_predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $final_result_prediction->$key = $value;
      // }
      //  }
                  $final_result_prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction updated successfully" : "final_result_prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction);

                    return $check_success;

               }



                    public function delete_final_result_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['final_result_prediction_id' => 'required|exists:final_result_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $final_result_prediction_id =  $request->final_result_prediction_id;

                    $final_result_prediction = Final_result_prediction::select('final_result_predictions.*')->find($final_result_prediction_id);
                    $delete =  $final_result_prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction deleted successfully" : "final_result_prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}