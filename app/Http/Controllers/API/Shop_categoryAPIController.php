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
use App\MAYDAN\Shop_category;
class Shop_categoryAPIController extends APIController
{
    

             //////////////////////////////////shop_categories/////////////////////////////////


                    public function shop_categories(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_categories = Shop_category::select('shop_categories.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_categories retrieved successfully" : "shop_categories retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_categories);
                    return $check_success;



                                    }


                    public function show_shop_category(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_category_id' => 'required|exists:shop_categories,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_category_id =  $request->shop_category_id;
                    // check_failure
                    $shop_category = Shop_category::select('shop_categories.*')->find($shop_category_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_category retrieved successfully" : "shop_category retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_category);
                    return $check_success;



                                    }


                    public function add_shop_category(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'category_status' => 'required',
                        'category_slug' => 'required',
                        'last_modified' => 'required',
                        'sort_order' => 'required',
                        'parent_id' => 'required',
                        'category_icon' => 'required',
                        'category_image' => 'required',
                        'application_id' => 'required',
                        'category_name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_category = new Shop_category ();
      $shop_category->category_status = $request->category_status;
  $shop_category->category_slug = $request->category_slug;
  $shop_category->last_modified = $request->last_modified;
  $shop_category->sort_order = $request->sort_order;
  $shop_category->parent_id = $request->parent_id;
  $shop_category->category_icon = $request->category_icon;

  if ($request->hasFile('category_image')) {
  if ($request->file('category_image')->isValid()) {
  $file = $request->file('category_image');
  $destinationPath = 'images/shop_categories';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_category->category_image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_category->application_id = $request->application_id;
  $shop_category->category_name = $request->category_name;



                        $save = $shop_category->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_category saved successfully" : "shop_category saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_category);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_category(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_category_id =  $request->shop_category_id;
                    


         $conditions = [ 'shop_category_id' => 'required|exists:shop_categories,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_category = Shop_category::find($shop_category_id);

                    // update
      if(isset($request->category_status)) {
  $shop_category->category_status = $request->category_status;
                                   }  if(isset($request->category_slug)) {
  $shop_category->category_slug = $request->category_slug;
                                   }  if(isset($request->last_modified)) {
  $shop_category->last_modified = $request->last_modified;
                                   }  if(isset($request->sort_order)) {
  $shop_category->sort_order = $request->sort_order;
                                   }  if(isset($request->parent_id)) {
  $shop_category->parent_id = $request->parent_id;
                                   }  if(isset($request->category_icon)) {
  $shop_category->category_icon = $request->category_icon;
                                   }  if(isset($request->category_image)) {
  if ($request->hasFile('category_image')) {
  if ($request->file('category_image')->isValid()) {
  $file = $request->file('category_image');
  $destinationPath = 'images/shop_categories';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_category->category_image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->application_id)) {
  $shop_category->application_id = $request->application_id;
                                   }  if(isset($request->category_name)) {
  $shop_category->category_name = $request->category_name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_categories');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_category->$key = $value;
      // }
      //  }
                  $shop_category->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_category updated successfully" : "shop_category updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_category);

                    return $check_success;

               }



                    public function delete_shop_category(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_category_id' => 'required|exists:shop_categories,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_category_id =  $request->shop_category_id;

                    $shop_category = Shop_category::select('shop_categories.*')->find($shop_category_id);
                    $delete =  $shop_category->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_category deleted successfully" : "shop_category deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}