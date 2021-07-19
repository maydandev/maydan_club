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
use App\MAYDAN\Package_table_feature;
class Package_table_featureAPIController extends APIController
{
    

             //////////////////////////////////package_table_features/////////////////////////////////


                    public function package_table_features(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $package_table_features = Package_table_feature::select('package_table_features.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_features retrieved successfully" : "package_table_features retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_features);
                    return $check_success;



                                    }


                    public function show_package_table_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['package_table_feature_id' => 'required|exists:package_table_features,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $package_table_feature_id =  $request->package_table_feature_id;
                    // check_failure
                    $package_table_feature = Package_table_feature::select('package_table_features.*')->find($package_table_feature_id);

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_feature retrieved successfully" : "package_table_feature retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_feature);
                    return $check_success;



                                    }


                    public function add_package_table_feature(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_available' => 'required',
                        'package_table_category_id' => 'required',
                        'package_id' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $package_table_feature = new Package_table_feature ();
      $package_table_feature->is_available = $request->is_available;
  $package_table_feature->package_table_category_id = $request->package_table_category_id;
  $package_table_feature->package_id = $request->package_id;
  $package_table_feature->name = $request->name;



                        $save = $package_table_feature->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_feature saved successfully" : "package_table_feature saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_feature);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_package_table_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $package_table_feature_id =  $request->package_table_feature_id;
                    


         $conditions = [ 'package_table_feature_id' => 'required|exists:package_table_features,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $package_table_feature = Package_table_feature::find($package_table_feature_id);

                    // update
      if(isset($request->is_available)) {
  $package_table_feature->is_available = $request->is_available;
                                   }  if(isset($request->package_table_category_id)) {
  $package_table_feature->package_table_category_id = $request->package_table_category_id;
                                   }  if(isset($request->package_id)) {
  $package_table_feature->package_id = $request->package_id;
                                   }  if(isset($request->name)) {
  $package_table_feature->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('package_table_features');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $package_table_feature->$key = $value;
      // }
      //  }
                  $package_table_feature->update();
                    $ResponseMessage =  ($lang=='ar') ?  "package_table_feature updated successfully" : "package_table_feature updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_table_feature);

                    return $check_success;

               }



                    public function delete_package_table_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['package_table_feature_id' => 'required|exists:package_table_features,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $package_table_feature_id =  $request->package_table_feature_id;

                    $package_table_feature = Package_table_feature::select('package_table_features.*')->find($package_table_feature_id);
                    $delete =  $package_table_feature->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "package_table_feature deleted successfully" : "package_table_feature deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}