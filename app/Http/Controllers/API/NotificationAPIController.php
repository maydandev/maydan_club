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
use App\MAYDAN\Notification;
class NotificationAPIController extends APIController
{
    

             //////////////////////////////////notifications/////////////////////////////////


                    public function notifications(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $notifications = Notification::select('notifications.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "notifications retrieved successfully" : "notifications retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notifications);
                    return $check_success;



                                    }


                    public function show_notification(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['notification_id' => 'required|exists:notifications,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $notification_id =  $request->notification_id;
                    // check_failure
                    $notification = Notification::select('notifications.*')->find($notification_id);

                    $ResponseMessage =  ($lang=='ar') ?  "notification retrieved successfully" : "notification retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification);
                    return $check_success;



                                    }


                    public function add_notification(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'red_card' => 'required',
                        'full_time' => 'required',
                        'half_time' => 'required',
                        'goals' => 'required',
                        'kick_off' => 'required',
                        'line_ups' => 'required',
                        'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $notification = new Notification ();
      $notification->red_card = $request->red_card;
  $notification->full_time = $request->full_time;
  $notification->half_time = $request->half_time;
  $notification->goals = $request->goals;
  $notification->kick_off = $request->kick_off;
  $notification->line_ups = $request->line_ups;
  $notification->application_id = $request->application_id;



                        $save = $notification->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "notification saved successfully" : "notification saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_notification(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $notification_id =  $request->notification_id;
                    


         $conditions = [ 'notification_id' => 'required|exists:notifications,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $notification = Notification::find($notification_id);

                    // update
      if(isset($request->red_card)) {
  $notification->red_card = $request->red_card;
                                   }  if(isset($request->full_time)) {
  $notification->full_time = $request->full_time;
                                   }  if(isset($request->half_time)) {
  $notification->half_time = $request->half_time;
                                   }  if(isset($request->goals)) {
  $notification->goals = $request->goals;
                                   }  if(isset($request->kick_off)) {
  $notification->kick_off = $request->kick_off;
                                   }  if(isset($request->line_ups)) {
  $notification->line_ups = $request->line_ups;
                                   }  if(isset($request->application_id)) {
  $notification->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('notifications');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $notification->$key = $value;
      // }
      //  }
                  $notification->update();
                    $ResponseMessage =  ($lang=='ar') ?  "notification updated successfully" : "notification updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$notification);

                    return $check_success;

               }



                    public function delete_notification(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['notification_id' => 'required|exists:notifications,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $notification_id =  $request->notification_id;

                    $notification = Notification::select('notifications.*')->find($notification_id);
                    $delete =  $notification->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "notification deleted successfully" : "notification deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}