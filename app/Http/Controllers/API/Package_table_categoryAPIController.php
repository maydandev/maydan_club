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
use App\MAYDAN\Package_table_category;
class Package_table_categoryAPIController extends APIController
{
    

             //////////////////////////////////package_table_categories/////////////////////////////////


                    public function package_table_categories(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $package_table_categories = Package_table_category::select('package_table_categories.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_categories retrieved successfully" : "package_table_categories retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_categories);
                    return $check_success;



                                    }


                    public function show_package_table_category(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['package_table_category_id' => 'required|exists:package_table_categories,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $package_table_category_id =  $request->package_table_category_id;
                    // check_failure
                    $package_table_category = Package_table_category::select('package_table_categories.*')->find($package_table_category_id);

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_category retrieved successfully" : "package_table_category retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_category);
                    return $check_success;



                                    }


                    public function add_package_table_category(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'sort' => 'required',
                        'is_active' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $package_table_category = new Package_table_category ();
      $package_table_category->sort = $request->sort;
  $package_table_category->is_active = ($request->is_active) ? $request->is_active : 0;
  $package_table_category->name = $request->name;



                        $save = $package_table_category->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_category saved successfully" : "package_table_category saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_category);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_package_table_category(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $package_table_category_id =  $request->package_table_category_id;
                    


         $conditions = [ 'package_table_category_id' => 'required|exists:package_table_categories,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $package_table_category = Package_table_category::find($package_table_category_id);

                    // update
      if(isset($request->sort)) {
  $package_table_category->sort = $request->sort;
                                   }  $package_table_category->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->name)) {
  $package_table_category->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('package_table_categories');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $package_table_category->$key = $value;
      // }
      //  }
                  $package_table_category->update();
                    $ResponseMessage =  ($lang=='ar') ?  "package_table_category updated successfully" : "package_table_category updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_category);

                    return $check_success;

               }



                    public function delete_package_table_category(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['package_table_category_id' => 'required|exists:package_table_categories,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $package_table_category_id =  $request->package_table_category_id;

                    $package_table_category = Package_table_category::select('package_table_categories.*')->find($package_table_category_id);
                    $delete =  $package_table_category->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_category deleted successfully" : "package_table_category deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}