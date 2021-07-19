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
use App\MAYDAN\Lineup_user_prediction;
class Lineup_user_predictionAPIController extends APIController
{
    

             //////////////////////////////////lineup_user_predictions/////////////////////////////////


                    public function lineup_user_predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $lineup_user_predictions = Lineup_user_prediction::select('lineup_user_predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_predictions retrieved successfully" : "lineup_user_predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_predictions);
                    return $check_success;



                                    }


                    public function show_lineup_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['lineup_user_prediction_id' => 'required|exists:lineup_user_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $lineup_user_prediction_id =  $request->lineup_user_prediction_id;
                    // check_failure
                    $lineup_user_prediction = Lineup_user_prediction::select('lineup_user_predictions.*')->find($lineup_user_prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction retrieved successfully" : "lineup_user_prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction);
                    return $check_success;



                                    }


                    public function add_lineup_user_prediction(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'user_id' => 'required',
                        'lineup_prediction_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $lineup_user_prediction = new Lineup_user_prediction ();
      $lineup_user_prediction->user_id = $request->user_id;
  $lineup_user_prediction->lineup_prediction_id = $request->lineup_prediction_id;



                        $save = $lineup_user_prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction saved successfully" : "lineup_user_prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_lineup_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $lineup_user_prediction_id =  $request->lineup_user_prediction_id;
                    


         $conditions = [ 'lineup_user_prediction_id' => 'required|exists:lineup_user_predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $lineup_user_prediction = Lineup_user_prediction::find($lineup_user_prediction_id);

                    // update
      if(isset($request->user_id)) {
  $lineup_user_prediction->user_id = $request->user_id;
                                   }  if(isset($request->lineup_prediction_id)) {
  $lineup_user_prediction->lineup_prediction_id = $request->lineup_prediction_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('lineup_user_predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $lineup_user_prediction->$key = $value;
      // }
      //  }
                  $lineup_user_prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction updated successfully" : "lineup_user_prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_user_prediction);

                    return $check_success;

               }



                    public function delete_lineup_user_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['lineup_user_prediction_id' => 'required|exists:lineup_user_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $lineup_user_prediction_id =  $request->lineup_user_prediction_id;

                    $lineup_user_prediction = Lineup_user_prediction::select('lineup_user_predictions.*')->find($lineup_user_prediction_id);
                    $delete =  $lineup_user_prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_user_prediction deleted successfully" : "lineup_user_prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}