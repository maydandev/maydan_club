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
use App\MAYDAN\Final_result_user_prediction;
class Final_result_user_predictionAPIController extends APIController
{
    

             //////////////////////////////////final_result_user_predictions/////////////////////////////////


                    public function final_result_user_predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $final_result_user_predictions = Final_result_user_prediction::select('final_result_user_predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_user_predictions retrieved successfully" : "final_result_user_predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_user_predictions);
                    return $check_success;



                                    }


                    public function show_final_result_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['final_result_user_prediction_id' => 'required|exists:final_result_user_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $final_result_user_prediction_id =  $request->final_result_user_prediction_id;
                    // check_failure
                    $final_result_user_prediction = Final_result_user_prediction::select('final_result_user_predictions.*')->find($final_result_user_prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_user_prediction retrieved successfully" : "final_result_user_prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_user_prediction);
                    return $check_success;



                                    }


                    public function add_final_result_user_prediction(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'away_score' => 'required',
                        'home_score' => 'required',
                        'final_result_prediction_id' => 'required',
                        'user_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $final_result_user_prediction = new Final_result_user_prediction ();
      $final_result_user_prediction->away_score = $request->away_score;
  $final_result_user_prediction->home_score = $request->home_score;
  $final_result_user_prediction->final_result_prediction_id = $request->final_result_prediction_id;
  $final_result_user_prediction->user_id = $request->user_id;



                        $save = $final_result_user_prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_user_prediction saved successfully" : "final_result_user_prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_user_prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_final_result_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $final_result_user_prediction_id =  $request->final_result_user_prediction_id;
                    


         $conditions = [ 'final_result_user_prediction_id' => 'required|exists:final_result_user_predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $final_result_user_prediction = Final_result_user_prediction::find($final_result_user_prediction_id);

                    // update
      if(isset($request->away_score)) {
  $final_result_user_prediction->away_score = $request->away_score;
                                   }  if(isset($request->home_score)) {
  $final_result_user_prediction->home_score = $request->home_score;
                                   }  if(isset($request->final_result_prediction_id)) {
  $final_result_user_prediction->final_result_prediction_id = $request->final_result_prediction_id;
                                   }  if(isset($request->user_id)) {
  $final_result_user_prediction->user_id = $request->user_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('final_result_user_predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $final_result_user_prediction->$key = $value;
      // }
      //  }
                  $final_result_user_prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "final_result_user_prediction updated successfully" : "final_result_user_prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_user_prediction);

                    return $check_success;

               }



                    public function delete_final_result_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['final_result_user_prediction_id' => 'required|exists:final_result_user_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $final_result_user_prediction_id =  $request->final_result_user_prediction_id;

                    $final_result_user_prediction = Final_result_user_prediction::select('final_result_user_predictions.*')->find($final_result_user_prediction_id);
                    $delete =  $final_result_user_prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_user_prediction deleted successfully" : "final_result_user_prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}