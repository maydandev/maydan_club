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
use App\MAYDAN\Shop_order_detail;
class Shop_order_detailAPIController extends APIController
{
    

             //////////////////////////////////shop_order_details/////////////////////////////////


                    public function shop_order_details(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_order_details = Shop_order_detail::select('shop_order_details.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_details retrieved successfully" : "shop_order_details retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_details);
                    return $check_success;



                                    }


                    public function show_shop_order_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_order_detail_id' => 'required|exists:shop_order_details,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_order_detail_id =  $request->shop_order_detail_id;
                    // check_failure
                    $shop_order_detail = Shop_order_detail::select('shop_order_details.*')->find($shop_order_detail_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_detail retrieved successfully" : "shop_order_detail retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_detail);
                    return $check_success;



                                    }


                    public function add_shop_order_detail(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'products_quantity' => 'required',
                        'products_tax' => 'required',
                        'final_price' => 'required',
                        'products_price' => 'required',
                        'products_name' => 'required',
                        'products_model' => 'required',
                        'shop_product_id' => 'required',
                        'shop_order_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_order_detail = new Shop_order_detail ();
      $shop_order_detail->products_quantity = $request->products_quantity;
  $shop_order_detail->products_tax = $request->products_tax;
  $shop_order_detail->final_price = $request->final_price;
  $shop_order_detail->products_price = $request->products_price;
  $shop_order_detail->products_name = $request->products_name;
  $shop_order_detail->products_model = $request->products_model;
  $shop_order_detail->shop_product_id = $request->shop_product_id;
  $shop_order_detail->shop_order_id = $request->shop_order_id;



                        $save = $shop_order_detail->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_detail saved successfully" : "shop_order_detail saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_detail);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_order_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_order_detail_id =  $request->shop_order_detail_id;
                    


         $conditions = [ 'shop_order_detail_id' => 'required|exists:shop_order_details,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_order_detail = Shop_order_detail::find($shop_order_detail_id);

                    // update
      if(isset($request->products_quantity)) {
  $shop_order_detail->products_quantity = $request->products_quantity;
                                   }  if(isset($request->products_tax)) {
  $shop_order_detail->products_tax = $request->products_tax;
                                   }  if(isset($request->final_price)) {
  $shop_order_detail->final_price = $request->final_price;
                                   }  if(isset($request->products_price)) {
  $shop_order_detail->products_price = $request->products_price;
                                   }  if(isset($request->products_name)) {
  $shop_order_detail->products_name = $request->products_name;
                                   }  if(isset($request->products_model)) {
  $shop_order_detail->products_model = $request->products_model;
                                   }  if(isset($request->shop_product_id)) {
  $shop_order_detail->shop_product_id = $request->shop_product_id;
                                   }  if(isset($request->shop_order_id)) {
  $shop_order_detail->shop_order_id = $request->shop_order_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_order_details');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_order_detail->$key = $value;
      // }
      //  }
                  $shop_order_detail->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_detail updated successfully" : "shop_order_detail updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_detail);

                    return $check_success;

               }



                    public function delete_shop_order_detail(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_order_detail_id' => 'required|exists:shop_order_details,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_order_detail_id =  $request->shop_order_detail_id;

                    $shop_order_detail = Shop_order_detail::select('shop_order_details.*')->find($shop_order_detail_id);
                    $delete =  $shop_order_detail->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_detail deleted successfully" : "shop_order_detail deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}