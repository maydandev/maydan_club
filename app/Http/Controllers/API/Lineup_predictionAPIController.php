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
use App\MAYDAN\Lineup_prediction;
class Lineup_predictionAPIController extends APIController
{
    

             //////////////////////////////////lineup_predictions/////////////////////////////////


                    public function lineup_predictions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $lineup_predictions = Lineup_prediction::select('lineup_predictions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_predictions retrieved successfully" : "lineup_predictions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_predictions);
                    return $check_success;



                                    }


                    public function show_lineup_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['lineup_prediction_id' => 'required|exists:lineup_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $lineup_prediction_id =  $request->lineup_prediction_id;
                    // check_failure
                    $lineup_prediction = Lineup_prediction::select('lineup_predictions.*')->find($lineup_prediction_id);

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_prediction retrieved successfully" : "lineup_prediction retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_prediction);
                    return $check_success;



                                    }


                    public function add_lineup_prediction(Request $request)
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
                        'fixture_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $lineup_prediction = new Lineup_prediction ();
      $lineup_prediction->data = $request->data;
  $lineup_prediction->prediction_id = $request->prediction_id;
  $lineup_prediction->fixture_id = $request->fixture_id;



                        $save = $lineup_prediction->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_prediction saved successfully" : "lineup_prediction saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_prediction);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_lineup_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $lineup_prediction_id =  $request->lineup_prediction_id;
                    


         $conditions = [ 'lineup_prediction_id' => 'required|exists:lineup_predictions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $lineup_prediction = Lineup_prediction::find($lineup_prediction_id);

                    // update
      if(isset($request->data)) {
  $lineup_prediction->data = $request->data;
                                   }  if(isset($request->prediction_id)) {
  $lineup_prediction->prediction_id = $request->prediction_id;
                                   }  if(isset($request->fixture_id)) {
  $lineup_prediction->fixture_id = $request->fixture_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('lineup_predictions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $lineup_prediction->$key = $value;
      // }
      //  }
                  $lineup_prediction->update();
                    $ResponseMessage =  ($lang=='ar') ?  "lineup_prediction updated successfully" : "lineup_prediction updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$lineup_prediction);

                    return $check_success;

               }



                    public function delete_lineup_prediction(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['lineup_prediction_id' => 'required|exists:lineup_predictions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $lineup_prediction_id =  $request->lineup_prediction_id;

                    $lineup_prediction = Lineup_prediction::select('lineup_predictions.*')->find($lineup_prediction_id);
                    $delete =  $lineup_prediction->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "lineup_prediction deleted successfully" : "lineup_prediction deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}