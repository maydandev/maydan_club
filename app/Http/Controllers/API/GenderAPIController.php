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
use App\MAYDAN\Gender;
class GenderAPIController extends APIController
{
    

             //////////////////////////////////genders/////////////////////////////////


                    public function genders(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $genders = Gender::select('genders.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "genders retrieved successfully" : "genders retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$genders);
                    return $check_success;



                                    }


                    public function show_gender(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['gender_id' => 'required|exists:genders,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $gender_id =  $request->gender_id;
                    // check_failure
                    $gender = Gender::select('genders.*')->find($gender_id);

                    $ResponseMessage =  ($lang=='ar') ?  "gender retrieved successfully" : "gender retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$gender);
                    return $check_success;



                                    }


                    public function add_gender(Request $request)
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

    $gender = new Gender ();
      $gender->en_name = $request->en_name;
  $gender->name = $request->name;



                        $save = $gender->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "gender saved successfully" : "gender saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$gender);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_gender(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $gender_id =  $request->gender_id;
                    


         $conditions = [ 'gender_id' => 'required|exists:genders,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $gender = Gender::find($gender_id);

                    // update
      if(isset($request->en_name)) {
  $gender->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $gender->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('genders');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $gender->$key = $value;
      // }
      //  }
                  $gender->update();
                    $ResponseMessage =  ($lang=='ar') ?  "gender updated successfully" : "gender updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$gender);

                    return $check_success;

               }



                    public function delete_gender(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['gender_id' => 'required|exists:genders,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $gender_id =  $request->gender_id;

                    $gender = Gender::select('genders.*')->find($gender_id);
                    $delete =  $gender->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "gender deleted successfully" : "gender deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}