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
use App\MAYDAN\Delivery_method;
class Delivery_methodAPIController extends APIController
{
    

             //////////////////////////////////delivery_methods/////////////////////////////////


                    public function delivery_methods(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $delivery_methods = Delivery_method::select('delivery_methods.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "delivery_methods retrieved successfully" : "delivery_methods retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$delivery_methods);
                    return $check_success;



                                    }


                    public function show_delivery_method(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['delivery_method_id' => 'required|exists:delivery_methods,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $delivery_method_id =  $request->delivery_method_id;
                    // check_failure
                    $delivery_method = Delivery_method::select('delivery_methods.*')->find($delivery_method_id);

                    $ResponseMessage =  ($lang=='ar') ?  "delivery_method retrieved successfully" : "delivery_method retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$delivery_method);
                    return $check_success;



                                    }


                    public function add_delivery_method(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_cod' => 'required',
                        'min_amount' => 'required',
                        'fees' => 'required',
                        'delivers_unit_id' => 'required',
                        'delivers_max' => 'required',
                        'delivers_min' => 'required',
                        'city_id' => 'required',
                        'country_id' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                        'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $delivery_method = new Delivery_method ();
      $delivery_method->is_cod = ($request->is_cod) ? $request->is_cod : 0;
  $delivery_method->min_amount = $request->min_amount;
  $delivery_method->fees = $request->fees;
  $delivery_method->delivers_unit_id = $request->delivers_unit_id;
  $delivery_method->delivers_max = $request->delivers_max;
  $delivery_method->delivers_min = $request->delivers_min;
  $delivery_method->city_id = $request->city_id;
  $delivery_method->country_id = $request->country_id;
  $delivery_method->en_name = $request->en_name;
  $delivery_method->name = $request->name;
  $delivery_method->application_id = $request->application_id;



                        $save = $delivery_method->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "delivery_method saved successfully" : "delivery_method saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$delivery_method);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_delivery_method(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $delivery_method_id =  $request->delivery_method_id;
                    


         $conditions = [ 'delivery_method_id' => 'required|exists:delivery_methods,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $delivery_method = Delivery_method::find($delivery_method_id);

                    // update
      $delivery_method->is_cod = ($request->is_cod) ? $request->is_cod : 0;
  if(isset($request->min_amount)) {
  $delivery_method->min_amount = $request->min_amount;
                                   }  if(isset($request->fees)) {
  $delivery_method->fees = $request->fees;
                                   }  if(isset($request->delivers_unit_id)) {
  $delivery_method->delivers_unit_id = $request->delivers_unit_id;
                                   }  if(isset($request->delivers_max)) {
  $delivery_method->delivers_max = $request->delivers_max;
                                   }  if(isset($request->delivers_min)) {
  $delivery_method->delivers_min = $request->delivers_min;
                                   }  if(isset($request->city_id)) {
  $delivery_method->city_id = $request->city_id;
                                   }  if(isset($request->country_id)) {
  $delivery_method->country_id = $request->country_id;
                                   }  if(isset($request->en_name)) {
  $delivery_method->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $delivery_method->name = $request->name;
                                   }  if(isset($request->application_id)) {
  $delivery_method->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('delivery_methods');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $delivery_method->$key = $value;
      // }
      //  }
                  $delivery_method->update();
                    $ResponseMessage =  ($lang=='ar') ?  "delivery_method updated successfully" : "delivery_method updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$delivery_method);

                    return $check_success;

               }



                    public function delete_delivery_method(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['delivery_method_id' => 'required|exists:delivery_methods,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $delivery_method_id =  $request->delivery_method_id;

                    $delivery_method = Delivery_method::select('delivery_methods.*')->find($delivery_method_id);
                    $delete =  $delivery_method->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "delivery_method deleted successfully" : "delivery_method deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}