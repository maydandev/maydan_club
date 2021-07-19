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
use App\MAYDAN\Final_result_prediction_detail;
class Final_result_prediction_detailAPIController extends APIController
{
    

             //////////////////////////////////final_result_prediction_details/////////////////////////////////


                    public function final_result_prediction_details(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $final_result_prediction_details = Final_result_prediction_detail::select('final_result_prediction_details.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction_details retrieved successfully" : "final_result_prediction_details retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction_details);
                    return $check_success;



                                    }


                    public function show_final_result_prediction_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['final_result_prediction_detail_id' => 'required|exists:final_result_prediction_details,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $final_result_prediction_detail_id =  $request->final_result_prediction_detail_id;
                    // check_failure
                    $final_result_prediction_detail = Final_result_prediction_detail::select('final_result_prediction_details.*')->find($final_result_prediction_detail_id);

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction_detail retrieved successfully" : "final_result_prediction_detail retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction_detail);
                    return $check_success;



                                    }


                    public function add_final_result_prediction_detail(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'away_team_result' => 'required',
                        'home_team_result' => 'required',
                        'user_id' => 'required',
                        'final_result_prediction_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $final_result_prediction_detail = new Final_result_prediction_detail ();
      $final_result_prediction_detail->away_team_result = $request->away_team_result;
  $final_result_prediction_detail->home_team_result = $request->home_team_result;
  $final_result_prediction_detail->user_id = $request->user_id;
  $final_result_prediction_detail->final_result_prediction_id = $request->final_result_prediction_id;



                        $save = $final_result_prediction_detail->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction_detail saved successfully" : "final_result_prediction_detail saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction_detail);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_final_result_prediction_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $final_result_prediction_detail_id =  $request->final_result_prediction_detail_id;
                    


         $conditions = [ 'final_result_prediction_detail_id' => 'required|exists:final_result_prediction_details,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $final_result_prediction_detail = Final_result_prediction_detail::find($final_result_prediction_detail_id);

                    // update
      if(isset($request->away_team_result)) {
  $final_result_prediction_detail->away_team_result = $request->away_team_result;
                                   }  if(isset($request->home_team_result)) {
  $final_result_prediction_detail->home_team_result = $request->home_team_result;
                                   }  if(isset($request->user_id)) {
  $final_result_prediction_detail->user_id = $request->user_id;
                                   }  if(isset($request->final_result_prediction_id)) {
  $final_result_prediction_detail->final_result_prediction_id = $request->final_result_prediction_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('final_result_prediction_details');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $final_result_prediction_detail->$key = $value;
      // }
      //  }
                  $final_result_prediction_detail->update();
                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction_detail updated successfully" : "final_result_prediction_detail updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$final_result_prediction_detail);

                    return $check_success;

               }



                    public function delete_final_result_prediction_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['final_result_prediction_detail_id' => 'required|exists:final_result_prediction_details,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $final_result_prediction_detail_id =  $request->final_result_prediction_detail_id;

                    $final_result_prediction_detail = Final_result_prediction_detail::select('final_result_prediction_details.*')->find($final_result_prediction_detail_id);
                    $delete =  $final_result_prediction_detail->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "final_result_prediction_detail deleted successfully" : "final_result_prediction_detail deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}