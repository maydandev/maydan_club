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
use App\MAYDAN\Shop_product_image;
class Shop_product_imageAPIController extends APIController
{
    

             //////////////////////////////////shop_product_images/////////////////////////////////


                    public function shop_product_images(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_product_images = Shop_product_image::select('shop_product_images.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product_images retrieved successfully" : "shop_product_images retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product_images);
                    return $check_success;



                                    }


                    public function show_shop_product_image(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_product_image_id' => 'required|exists:shop_product_images,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_product_image_id =  $request->shop_product_image_id;
                    // check_failure
                    $shop_product_image = Shop_product_image::select('shop_product_images.*')->find($shop_product_image_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product_image retrieved successfully" : "shop_product_image retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product_image);
                    return $check_success;



                                    }


                    public function add_shop_product_image(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'image' => 'required',
                        'shop_product_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_product_image = new Shop_product_image ();
      $shop_product_image->is_active = ($request->is_active) ? $request->is_active : 0;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/shop_product_images';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product_image->image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_product_image->shop_product_id = $request->shop_product_id;



                        $save = $shop_product_image->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product_image saved successfully" : "shop_product_image saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product_image);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_product_image(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_product_image_id =  $request->shop_product_image_id;
                    


         $conditions = [ 'shop_product_image_id' => 'required|exists:shop_product_images,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_product_image = Shop_product_image::find($shop_product_image_id);

                    // update
      $shop_product_image->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/shop_product_images';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product_image->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->shop_product_id)) {
  $shop_product_image->shop_product_id = $request->shop_product_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_product_images');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_product_image->$key = $value;
      // }
      //  }
                  $shop_product_image->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_product_image updated successfully" : "shop_product_image updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_product_image);

                    return $check_success;

               }



                    public function delete_shop_product_image(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_product_image_id' => 'required|exists:shop_product_images,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_product_image_id =  $request->shop_product_image_id;

                    $shop_product_image = Shop_product_image::select('shop_product_images.*')->find($shop_product_image_id);
                    $delete =  $shop_product_image->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_product_image deleted successfully" : "shop_product_image deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}