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
use App\MAYDAN\Shop_coupon_code;
class Shop_coupon_codeAPIController extends APIController
{
    

             //////////////////////////////////shop_coupon_codes/////////////////////////////////


                    public function shop_coupon_codes(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_coupon_codes = Shop_coupon_code::select('shop_coupon_codes.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_coupon_codes retrieved successfully" : "shop_coupon_codes retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_coupon_codes);
                    return $check_success;



                                    }


                    public function show_shop_coupon_code(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_coupon_code_id' => 'required|exists:shop_coupon_codes,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_coupon_code_id =  $request->shop_coupon_code_id;
                    // check_failure
                    $shop_coupon_code = Shop_coupon_code::select('shop_coupon_codes.*')->find($shop_coupon_code_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_coupon_code retrieved successfully" : "shop_coupon_code retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_coupon_code);
                    return $check_success;



                                    }


                    public function add_shop_coupon_code(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'coupon_discount_type' => 'required',
                        'coupon_amout' => 'required',
                        'is_active' => 'required',
                        'is_use' => 'required',
                        'coupon_code' => 'required',
                        'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_coupon_code = new Shop_coupon_code ();
      $shop_coupon_code->coupon_discount_type = $request->coupon_discount_type;
  $shop_coupon_code->coupon_amout = $request->coupon_amout;
  $shop_coupon_code->is_active = ($request->is_active) ? $request->is_active : 0;
  $shop_coupon_code->is_use = $request->is_use;
  $shop_coupon_code->coupon_code = $request->coupon_code;
  $shop_coupon_code->application_id = $request->application_id;



                        $save = $shop_coupon_code->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_coupon_code saved successfully" : "shop_coupon_code saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_coupon_code);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_coupon_code(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_coupon_code_id =  $request->shop_coupon_code_id;
                    


         $conditions = [ 'shop_coupon_code_id' => 'required|exists:shop_coupon_codes,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_coupon_code = Shop_coupon_code::find($shop_coupon_code_id);

                    // update
      if(isset($request->coupon_discount_type)) {
  $shop_coupon_code->coupon_discount_type = $request->coupon_discount_type;
                                   }  if(isset($request->coupon_amout)) {
  $shop_coupon_code->coupon_amout = $request->coupon_amout;
                                   }  $shop_coupon_code->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->is_use)) {
  $shop_coupon_code->is_use = $request->is_use;
                                   }  if(isset($request->coupon_code)) {
  $shop_coupon_code->coupon_code = $request->coupon_code;
                                   }  if(isset($request->application_id)) {
  $shop_coupon_code->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_coupon_codes');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_coupon_code->$key = $value;
      // }
      //  }
                  $shop_coupon_code->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_coupon_code updated successfully" : "shop_coupon_code updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_coupon_code);

                    return $check_success;

               }



                    public function delete_shop_coupon_code(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_coupon_code_id' => 'required|exists:shop_coupon_codes,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_coupon_code_id =  $request->shop_coupon_code_id;

                    $shop_coupon_code = Shop_coupon_code::select('shop_coupon_codes.*')->find($shop_coupon_code_id);
                    $delete =  $shop_coupon_code->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_coupon_code deleted successfully" : "shop_coupon_code deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}