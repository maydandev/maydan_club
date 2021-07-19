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
use App\MAYDAN\Shop_product;
class Shop_productAPIController extends APIController
{
    

             //////////////////////////////////shop_products/////////////////////////////////


                    public function shop_products(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_products = Shop_product::select('shop_products.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_products retrieved successfully" : "shop_products retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_products);
                    return $check_success;



                                    }


                    public function show_shop_product(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_product_id' => 'required|exists:shop_products,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_product_id =  $request->shop_product_id;
                    // check_failure
                    $shop_product = Shop_product::select('shop_products.*')->find($shop_product_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product retrieved successfully" : "shop_product retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product);
                    return $check_success;



                                    }


                    public function add_shop_product(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'product_desc' => 'required',
                        'product_min_order' => 'required',
                        'product_status' => 'required',
                        'product_weight_unit' => 'required',
                        'product_weight' => 'required',
                        'product_date_available' => 'required',
                        'product_last_modified' => 'required',
                        'product_price' => 'required',
                        'product_video_link' => 'required',
                        'product_image' => 'required',
                        'product_model' => 'required',
                        'product_quantity' => 'required',
                        'shop_category_id' => 'required',
                        'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_product = new Shop_product ();
      $shop_product->product_desc = $request->product_desc;
  $shop_product->product_min_order = $request->product_min_order;
  $shop_product->product_status = $request->product_status;
  $shop_product->product_weight_unit = $request->product_weight_unit;
  $shop_product->product_weight = $request->product_weight;
  $shop_product->product_date_available = $request->product_date_available;
  $shop_product->product_last_modified = $request->product_last_modified;
  $shop_product->product_price = $request->product_price;
  $shop_product->product_video_link = $request->product_video_link;

  if ($request->hasFile('product_image')) {
  if ($request->file('product_image')->isValid()) {
  $file = $request->file('product_image');
  $destinationPath = 'images/shop_products';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product->product_image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_product->product_model = $request->product_model;
  $shop_product->product_quantity = $request->product_quantity;
  $shop_product->shop_category_id = $request->shop_category_id;
  $shop_product->application_id = $request->application_id;



                        $save = $shop_product->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product saved successfully" : "shop_product saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_product(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_product_id =  $request->shop_product_id;
                    


         $conditions = [ 'shop_product_id' => 'required|exists:shop_products,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_product = Shop_product::find($shop_product_id);

                    // update
      if(isset($request->product_desc)) {
  $shop_product->product_desc = $request->product_desc;
                                   }  if(isset($request->product_min_order)) {
  $shop_product->product_min_order = $request->product_min_order;
                                   }  if(isset($request->product_status)) {
  $shop_product->product_status = $request->product_status;
                                   }  if(isset($request->product_weight_unit)) {
  $shop_product->product_weight_unit = $request->product_weight_unit;
                                   }  if(isset($request->product_weight)) {
  $shop_product->product_weight = $request->product_weight;
                                   }  if(isset($request->product_date_available)) {
  $shop_product->product_date_available = $request->product_date_available;
                                   }  if(isset($request->product_last_modified)) {
  $shop_product->product_last_modified = $request->product_last_modified;
                                   }  if(isset($request->product_price)) {
  $shop_product->product_price = $request->product_price;
                                   }  if(isset($request->product_video_link)) {
  $shop_product->product_video_link = $request->product_video_link;
                                   }  if(isset($request->product_image)) {
  if ($request->hasFile('product_image')) {
  if ($request->file('product_image')->isValid()) {
  $file = $request->file('product_image');
  $destinationPath = 'images/shop_products';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product->product_image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->product_model)) {
  $shop_product->product_model = $request->product_model;
                                   }  if(isset($request->product_quantity)) {
  $shop_product->product_quantity = $request->product_quantity;
                                   }  if(isset($request->shop_category_id)) {
  $shop_product->shop_category_id = $request->shop_category_id;
                                   }  if(isset($request->application_id)) {
  $shop_product->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_products');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_product->$key = $value;
      // }
      //  }
                  $shop_product->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_product updated successfully" : "shop_product updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product);

                    return $check_success;

               }



                    public function delete_shop_product(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_product_id' => 'required|exists:shop_products,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_product_id =  $request->shop_product_id;

                    $shop_product = Shop_product::select('shop_products.*')->find($shop_product_id);
                    $delete =  $shop_product->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product deleted successfully" : "shop_product deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}