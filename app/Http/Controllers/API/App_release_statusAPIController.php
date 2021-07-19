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
use App\MAYDAN\App_release_status;
class App_release_statusAPIController extends APIController
{
    

             //////////////////////////////////app_release_statuses/////////////////////////////////


                    public function app_release_statuses(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $app_release_statuses = App_release_status::select('app_release_statuses.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "app_release_statuses retrieved successfully" : "app_release_statuses retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release_statuses);
                    return $check_success;



                                    }


                    public function show_app_release_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['app_release_status_id' => 'required|exists:app_release_statuses,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $app_release_status_id =  $request->app_release_status_id;
                    // check_failure
                    $app_release_status = App_release_status::select('app_release_statuses.*')->find($app_release_status_id);

                    $ResponseMessage =  ($lang=='ar') ?  "app_release_status retrieved successfully" : "app_release_status retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release_status);
                    return $check_success;



                                    }


                    public function add_app_release_status(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'color' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $app_release_status = new App_release_status ();
      $app_release_status->color = $request->color;
  $app_release_status->en_name = $request->en_name;
  $app_release_status->name = $request->name;



                        $save = $app_release_status->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "app_release_status saved successfully" : "app_release_status saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release_status);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_app_release_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $app_release_status_id =  $request->app_release_status_id;
                    


         $conditions = [ 'app_release_status_id' => 'required|exists:app_release_statuses,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $app_release_status = App_release_status::find($app_release_status_id);

                    // update
      if(isset($request->color)) {
  $app_release_status->color = $request->color;
                                   }  if(isset($request->en_name)) {
  $app_release_status->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $app_release_status->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('app_release_statuses');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $app_release_status->$key = $value;
      // }
      //  }
                  $app_release_status->update();
                    $ResponseMessage =  ($lang=='ar') ?  "app_release_status updated successfully" : "app_release_status updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$app_release_status);

                    return $check_success;

               }



                    public function delete_app_release_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['app_release_status_id' => 'required|exists:app_release_statuses,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $app_release_status_id =  $request->app_release_status_id;

                    $app_release_status = App_release_status::select('app_release_statuses.*')->find($app_release_status_id);
                    $delete =  $app_release_status->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "app_release_status deleted successfully" : "app_release_status deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}