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
use App\MAYDAN\Api_event_type;
class Api_event_typeAPIController extends APIController
{
    

             //////////////////////////////////api_event_types/////////////////////////////////


                    public function api_event_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $api_event_types = Api_event_type::select('api_event_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_types retrieved successfully" : "api_event_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_types);
                    return $check_success;



                                    }


                    public function show_api_event_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['api_event_type_id' => 'required|exists:api_event_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $api_event_type_id =  $request->api_event_type_id;
                    // check_failure
                    $api_event_type = Api_event_type::select('api_event_types.*')->find($api_event_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type retrieved successfully" : "api_event_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type);
                    return $check_success;



                                    }


                    public function add_api_event_type(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'event_type' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $api_event_type = new Api_event_type ();
      $api_event_type->event_type = $request->event_type;



                        $save = $api_event_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type saved successfully" : "api_event_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_api_event_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $api_event_type_id =  $request->api_event_type_id;
                    


         $conditions = [ 'api_event_type_id' => 'required|exists:api_event_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $api_event_type = Api_event_type::find($api_event_type_id);

                    // update
      if(isset($request->event_type)) {
  $api_event_type->event_type = $request->event_type;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('api_event_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $api_event_type->$key = $value;
      // }
      //  }
                  $api_event_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type updated successfully" : "api_event_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$api_event_type);

                    return $check_success;

               }



                    public function delete_api_event_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['api_event_type_id' => 'required|exists:api_event_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $api_event_type_id =  $request->api_event_type_id;

                    $api_event_type = Api_event_type::select('api_event_types.*')->find($api_event_type_id);
                    $delete =  $api_event_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "api_event_type deleted successfully" : "api_event_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}