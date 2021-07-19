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
use App\MAYDAN\Prediction;
class PredictionAPIController extends APIController
{
    

             //////////////////////////////////predictions/////////////////////////////////


                    public function predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $predictions = Prediction::select('predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "predictions retrieved successfully" : "predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$predictions);
                    return $check_success;



                                    }


                    public function show_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['prediction_id' => 'required|exists:predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $prediction_id =  $request->prediction_id;
                    // check_failure
                    $prediction = Prediction::select('predictions.*')->find($prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "prediction retrieved successfully" : "prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction);
                    return $check_success;



                                    }


                    public function add_prediction(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'correct_predictors' => 'required',
                        'correct_predictions' => 'required',
                        'predictors' => 'required',
                        'prediction_type_id' => 'required',
                        'post_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $prediction = new Prediction ();
      $prediction->is_active = ($request->is_active) ? $request->is_active : 0;
  $prediction->correct_predictors = $request->correct_predictors;
  $prediction->correct_predictions = $request->correct_predictions;
  $prediction->predictors = $request->predictors;
  $prediction->prediction_type_id = $request->prediction_type_id;
  $prediction->post_id = $request->post_id;



                        $save = $prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "prediction saved successfully" : "prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $prediction_id =  $request->prediction_id;
                    


         $conditions = [ 'prediction_id' => 'required|exists:predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $prediction = Prediction::find($prediction_id);

                    // update
      $prediction->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->correct_predictors)) {
  $prediction->correct_predictors = $request->correct_predictors;
                                   }  if(isset($request->correct_predictions)) {
  $prediction->correct_predictions = $request->correct_predictions;
                                   }  if(isset($request->predictors)) {
  $prediction->predictors = $request->predictors;
                                   }  if(isset($request->prediction_type_id)) {
  $prediction->prediction_type_id = $request->prediction_type_id;
                                   }  if(isset($request->post_id)) {
  $prediction->post_id = $request->post_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $prediction->$key = $value;
      // }
      //  }
                  $prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "prediction updated successfully" : "prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction);

                    return $check_success;

               }



                    public function delete_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['prediction_id' => 'required|exists:predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $prediction_id =  $request->prediction_id;

                    $prediction = Prediction::select('predictions.*')->find($prediction_id);
                    $delete =  $prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "prediction deleted successfully" : "prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}