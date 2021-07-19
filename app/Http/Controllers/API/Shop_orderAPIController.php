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
use App\MAYDAN\Shop_order;
class Shop_orderAPIController extends APIController
{
    

             //////////////////////////////////shop_orders/////////////////////////////////


                    public function shop_orders(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_orders = Shop_order::select('shop_orders.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_orders retrieved successfully" : "shop_orders retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_orders);
                    return $check_success;



                                    }


                    public function show_shop_order(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_order_id' => 'required|exists:shop_orders,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_order_id =  $request->shop_order_id;
                    // check_failure
                    $shop_order = Shop_order::select('shop_orders.*')->find($shop_order_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order retrieved successfully" : "shop_order retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order);
                    return $check_success;



                                    }


                    public function add_shop_order(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'coupon_amount' => 'required',
                        'coupon_code' => 'required',
                        'is_seen' => 'required',
                        'order_information' => 'required',
                        'shipping_duration' => 'required',
                        'free_shipping' => 'required',
                        'shipping_method' => 'required',
                        'shipping_cost' => 'required',
                        'payment_method' => 'required',
                        'total_tax' => 'required',
                        'order_price' => 'required',
                        'currency_value' => 'required',
                        'currency' => 'required',
                        'order_date_finished' => 'required',
                        'date_purchased' => 'required',
                        'last_modified' => 'required',
                        'shop_order_status_id' => 'required',
                        'application_id' => 'required',
                        'user_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_order = new Shop_order ();
      $shop_order->coupon_amount = $request->coupon_amount;
  $shop_order->coupon_code = $request->coupon_code;
  $shop_order->is_seen = $request->is_seen;
  $shop_order->order_information = $request->order_information;
  $shop_order->shipping_duration = $request->shipping_duration;
  $shop_order->free_shipping = $request->free_shipping;
  $shop_order->shipping_method = $request->shipping_method;
  $shop_order->shipping_cost = $request->shipping_cost;
  $shop_order->payment_method = $request->payment_method;
  $shop_order->total_tax = $request->total_tax;
  $shop_order->order_price = $request->order_price;
  $shop_order->currency_value = $request->currency_value;
  $shop_order->currency = $request->currency;
  $shop_order->order_date_finished = $request->order_date_finished;
  $shop_order->date_purchased = $request->date_purchased;
  $shop_order->last_modified = $request->last_modified;
  $shop_order->shop_order_status_id = $request->shop_order_status_id;
  $shop_order->application_id = $request->application_id;
  $shop_order->user_id = $request->user_id;



                        $save = $shop_order->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order saved successfully" : "shop_order saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_order(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_order_id =  $request->shop_order_id;
                    


         $conditions = [ 'shop_order_id' => 'required|exists:shop_orders,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_order = Shop_order::find($shop_order_id);

                    // update
      if(isset($request->coupon_amount)) {
  $shop_order->coupon_amount = $request->coupon_amount;
                                   }  if(isset($request->coupon_code)) {
  $shop_order->coupon_code = $request->coupon_code;
                                   }  if(isset($request->is_seen)) {
  $shop_order->is_seen = $request->is_seen;
                                   }  if(isset($request->order_information)) {
  $shop_order->order_information = $request->order_information;
                                   }  if(isset($request->shipping_duration)) {
  $shop_order->shipping_duration = $request->shipping_duration;
                                   }  if(isset($request->free_shipping)) {
  $shop_order->free_shipping = $request->free_shipping;
                                   }  if(isset($request->shipping_method)) {
  $shop_order->shipping_method = $request->shipping_method;
                                   }  if(isset($request->shipping_cost)) {
  $shop_order->shipping_cost = $request->shipping_cost;
                                   }  if(isset($request->payment_method)) {
  $shop_order->payment_method = $request->payment_method;
                                   }  if(isset($request->total_tax)) {
  $shop_order->total_tax = $request->total_tax;
                                   }  if(isset($request->order_price)) {
  $shop_order->order_price = $request->order_price;
                                   }  if(isset($request->currency_value)) {
  $shop_order->currency_value = $request->currency_value;
                                   }  if(isset($request->currency)) {
  $shop_order->currency = $request->currency;
                                   }  if(isset($request->order_date_finished)) {
  $shop_order->order_date_finished = $request->order_date_finished;
                                   }  if(isset($request->date_purchased)) {
  $shop_order->date_purchased = $request->date_purchased;
                                   }  if(isset($request->last_modified)) {
  $shop_order->last_modified = $request->last_modified;
                                   }  if(isset($request->shop_order_status_id)) {
  $shop_order->shop_order_status_id = $request->shop_order_status_id;
                                   }  if(isset($request->application_id)) {
  $shop_order->application_id = $request->application_id;
                                   }  if(isset($request->user_id)) {
  $shop_order->user_id = $request->user_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_orders');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_order->$key = $value;
      // }
      //  }
                  $shop_order->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_order updated successfully" : "shop_order updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order);

                    return $check_success;

               }



                    public function delete_shop_order(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_order_id' => 'required|exists:shop_orders,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_order_id =  $request->shop_order_id;

                    $shop_order = Shop_order::select('shop_orders.*')->find($shop_order_id);
                    $delete =  $shop_order->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order deleted successfully" : "shop_order deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}