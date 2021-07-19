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
use App\MAYDAN\First_goal_user_prediction;
class First_goal_user_predictionAPIController extends APIController
{
    

             //////////////////////////////////first_goal_user_predictions/////////////////////////////////


                    public function first_goal_user_predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $first_goal_user_predictions = First_goal_user_prediction::select('first_goal_user_predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_user_predictions retrieved successfully" : "first_goal_user_predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_user_predictions);
                    return $check_success;



                                    }


                    public function show_first_goal_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['first_goal_user_prediction_id' => 'required|exists:first_goal_user_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $first_goal_user_prediction_id =  $request->first_goal_user_prediction_id;
                    // check_failure
                    $first_goal_user_prediction = First_goal_user_prediction::select('first_goal_user_predictions.*')->find($first_goal_user_prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_user_prediction retrieved successfully" : "first_goal_user_prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_user_prediction);
                    return $check_success;



                                    }


                    public function add_first_goal_user_prediction(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'payler_name' => 'required',
                        'payler_id' => 'required',
                        'first_goal_prediction_id' => 'required',
                        'user_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $first_goal_user_prediction = new First_goal_user_prediction ();
      $first_goal_user_prediction->payler_name = $request->payler_name;
  $first_goal_user_prediction->payler_id = $request->payler_id;
  $first_goal_user_prediction->first_goal_prediction_id = $request->first_goal_prediction_id;
  $first_goal_user_prediction->user_id = $request->user_id;



                        $save = $first_goal_user_prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_user_prediction saved successfully" : "first_goal_user_prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_user_prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_first_goal_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $first_goal_user_prediction_id =  $request->first_goal_user_prediction_id;
                    


         $conditions = [ 'first_goal_user_prediction_id' => 'required|exists:first_goal_user_predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $first_goal_user_prediction = First_goal_user_prediction::find($first_goal_user_prediction_id);

                    // update
      if(isset($request->payler_name)) {
  $first_goal_user_prediction->payler_name = $request->payler_name;
                                   }  if(isset($request->payler_id)) {
  $first_goal_user_prediction->payler_id = $request->payler_id;
                                   }  if(isset($request->first_goal_prediction_id)) {
  $first_goal_user_prediction->first_goal_prediction_id = $request->first_goal_prediction_id;
                                   }  if(isset($request->user_id)) {
  $first_goal_user_prediction->user_id = $request->user_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('first_goal_user_predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $first_goal_user_prediction->$key = $value;
      // }
      //  }
                  $first_goal_user_prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_user_prediction updated successfully" : "first_goal_user_prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$first_goal_user_prediction);

                    return $check_success;

               }



                    public function delete_first_goal_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['first_goal_user_prediction_id' => 'required|exists:first_goal_user_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $first_goal_user_prediction_id =  $request->first_goal_user_prediction_id;

                    $first_goal_user_prediction = First_goal_user_prediction::select('first_goal_user_predictions.*')->find($first_goal_user_prediction_id);
                    $delete =  $first_goal_user_prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "first_goal_user_prediction deleted successfully" : "first_goal_user_prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}