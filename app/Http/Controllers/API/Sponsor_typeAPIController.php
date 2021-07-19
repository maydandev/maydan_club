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
use App\MAYDAN\Sponsor_type;
class Sponsor_typeAPIController extends APIController
{
    

             //////////////////////////////////sponsor_types/////////////////////////////////


                    public function sponsor_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $sponsor_types = Sponsor_type::select('sponsor_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor_types retrieved successfully" : "sponsor_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor_types);
                    return $check_success;



                                    }


                    public function show_sponsor_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['sponsor_type_id' => 'required|exists:sponsor_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $sponsor_type_id =  $request->sponsor_type_id;
                    // check_failure
                    $sponsor_type = Sponsor_type::select('sponsor_types.*')->find($sponsor_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor_type retrieved successfully" : "sponsor_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor_type);
                    return $check_success;



                                    }


                    public function add_sponsor_type(Request $request)
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

    $sponsor_type = new Sponsor_type ();
      $sponsor_type->en_name = $request->en_name;
  $sponsor_type->name = $request->name;



                        $save = $sponsor_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor_type saved successfully" : "sponsor_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_sponsor_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $sponsor_type_id =  $request->sponsor_type_id;
                    


         $conditions = [ 'sponsor_type_id' => 'required|exists:sponsor_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $sponsor_type = Sponsor_type::find($sponsor_type_id);

                    // update
      if(isset($request->en_name)) {
  $sponsor_type->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $sponsor_type->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('sponsor_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $sponsor_type->$key = $value;
      // }
      //  }
                  $sponsor_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "sponsor_type updated successfully" : "sponsor_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor_type);

                    return $check_success;

               }



                    public function delete_sponsor_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['sponsor_type_id' => 'required|exists:sponsor_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $sponsor_type_id =  $request->sponsor_type_id;

                    $sponsor_type = Sponsor_type::select('sponsor_types.*')->find($sponsor_type_id);
                    $delete =  $sponsor_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor_type deleted successfully" : "sponsor_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}