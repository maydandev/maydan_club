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
use App\MAYDAN\Api_event_type_detail;
class Api_event_type_detailAPIController extends APIController
{
    

             //////////////////////////////////api_event_type_details/////////////////////////////////


                    public function api_event_type_details(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $api_event_type_details = Api_event_type_detail::select('api_event_type_details.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type_details retrieved successfully" : "api_event_type_details retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type_details);
                    return $check_success;



                                    }


                    public function show_api_event_type_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['api_event_type_detail_id' => 'required|exists:api_event_type_details,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $api_event_type_detail_id =  $request->api_event_type_detail_id;
                    // check_failure
                    $api_event_type_detail = Api_event_type_detail::select('api_event_type_details.*')->find($api_event_type_detail_id);

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type_detail retrieved successfully" : "api_event_type_detail retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type_detail);
                    return $check_success;



                                    }


                    public function add_api_event_type_detail(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'event_type_id' => 'required',
                        'event_type_detail' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $api_event_type_detail = new Api_event_type_detail ();
      $api_event_type_detail->event_type_id = $request->event_type_id;
  $api_event_type_detail->event_type_detail = $request->event_type_detail;



                        $save = $api_event_type_detail->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type_detail saved successfully" : "api_event_type_detail saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type_detail);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_api_event_type_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $api_event_type_detail_id =  $request->api_event_type_detail_id;
                    


         $conditions = [ 'api_event_type_detail_id' => 'required|exists:api_event_type_details,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $api_event_type_detail = Api_event_type_detail::find($api_event_type_detail_id);

                    // update
      if(isset($request->event_type_id)) {
  $api_event_type_detail->event_type_id = $request->event_type_id;
                                   }  if(isset($request->event_type_detail)) {
  $api_event_type_detail->event_type_detail = $request->event_type_detail;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('api_event_type_details');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $api_event_type_detail->$key = $value;
      // }
      //  }
                  $api_event_type_detail->update();
                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type_detail updated successfully" : "api_event_type_detail updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type_detail);

                    return $check_success;

               }



                    public function delete_api_event_type_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['api_event_type_detail_id' => 'required|exists:api_event_type_details,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $api_event_type_detail_id =  $request->api_event_type_detail_id;

                    $api_event_type_detail = Api_event_type_detail::select('api_event_type_details.*')->find($api_event_type_detail_id);
                    $delete =  $api_event_type_detail->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type_detail deleted successfully" : "api_event_type_detail deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}