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
use App\MAYDAN\Notification_type;
class Notification_typeAPIController extends APIController
{
    

             //////////////////////////////////notification_types/////////////////////////////////


                    public function notification_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $notification_types = Notification_type::select('notification_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "notification_types retrieved successfully" : "notification_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification_types);
                    return $check_success;



                                    }


                    public function show_notification_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['notification_type_id' => 'required|exists:notification_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $notification_type_id =  $request->notification_type_id;
                    // check_failure
                    $notification_type = Notification_type::select('notification_types.*')->find($notification_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "notification_type retrieved successfully" : "notification_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification_type);
                    return $check_success;



                                    }


                    public function add_notification_type(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $notification_type = new Notification_type ();
      $notification_type->name = $request->name;



                        $save = $notification_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "notification_type saved successfully" : "notification_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_notification_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $notification_type_id =  $request->notification_type_id;
                    


         $conditions = [ 'notification_type_id' => 'required|exists:notification_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $notification_type = Notification_type::find($notification_type_id);

                    // update
      if(isset($request->name)) {
  $notification_type->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('notification_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $notification_type->$key = $value;
      // }
      //  }
                  $notification_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "notification_type updated successfully" : "notification_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification_type);

                    return $check_success;

               }



                    public function delete_notification_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['notification_type_id' => 'required|exists:notification_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $notification_type_id =  $request->notification_type_id;

                    $notification_type = Notification_type::select('notification_types.*')->find($notification_type_id);
                    $delete =  $notification_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "notification_type deleted successfully" : "notification_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}