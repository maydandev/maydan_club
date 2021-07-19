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
use App\MAYDAN\User_type;
class User_typeAPIController extends APIController
{
    

             //////////////////////////////////user_types/////////////////////////////////


                    public function user_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $user_types = User_type::select('user_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "user_types retrieved successfully" : "user_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user_types);
                    return $check_success;



                                    }


                    public function show_user_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['user_type_id' => 'required|exists:user_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $user_type_id =  $request->user_type_id;
                    // check_failure
                    $user_type = User_type::select('user_types.*')->find($user_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "user_type retrieved successfully" : "user_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user_type);
                    return $check_success;



                                    }


                    public function add_user_type(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $user_type = new User_type ();
      $user_type->en_name = $request->en_name;
  $user_type->name = $request->name;



                        $save = $user_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "user_type saved successfully" : "user_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_user_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $user_type_id =  $request->user_type_id;
                    


         $conditions = [ 'user_type_id' => 'required|exists:user_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $user_type = User_type::find($user_type_id);

                    // update
      if(isset($request->en_name)) {
  $user_type->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $user_type->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('user_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $user_type->$key = $value;
      // }
      //  }
                  $user_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "user_type updated successfully" : "user_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user_type);

                    return $check_success;

               }



                    public function delete_user_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['user_type_id' => 'required|exists:user_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $user_type_id =  $request->user_type_id;

                    $user_type = User_type::select('user_types.*')->find($user_type_id);
                    $delete =  $user_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "user_type deleted successfully" : "user_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}