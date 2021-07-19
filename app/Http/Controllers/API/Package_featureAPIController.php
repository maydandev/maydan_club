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
use App\MAYDAN\Package_feature;
class Package_featureAPIController extends APIController
{
    

             //////////////////////////////////package_features/////////////////////////////////


                    public function package_features(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $package_features = Package_feature::select('package_features.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "package_features retrieved successfully" : "package_features retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_features);
                    return $check_success;



                                    }


                    public function show_package_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['package_feature_id' => 'required|exists:package_features,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $package_feature_id =  $request->package_feature_id;
                    // check_failure
                    $package_feature = Package_feature::select('package_features.*')->find($package_feature_id);

                    $ResponseMessage =  ($lang=='ar') ?  "package_feature retrieved successfully" : "package_feature retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_feature);
                    return $check_success;



                                    }


                    public function add_package_feature(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'feature' => 'required',
                        'package_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $package_feature = new Package_feature ();
      $package_feature->feature = $request->feature;
  $package_feature->package_id = $request->package_id;



                        $save = $package_feature->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "package_feature saved successfully" : "package_feature saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_feature);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_package_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $package_feature_id =  $request->package_feature_id;
                    


         $conditions = [ 'package_feature_id' => 'required|exists:package_features,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $package_feature = Package_feature::find($package_feature_id);

                    // update
      if(isset($request->feature)) {
  $package_feature->feature = $request->feature;
                                   }  if(isset($request->package_id)) {
  $package_feature->package_id = $request->package_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('package_features');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $package_feature->$key = $value;
      // }
      //  }
                  $package_feature->update();
                    $ResponseMessage =  ($lang=='ar') ?  "package_feature updated successfully" : "package_feature updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package_feature);

                    return $check_success;

               }



                    public function delete_package_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['package_feature_id' => 'required|exists:package_features,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $package_feature_id =  $request->package_feature_id;

                    $package_feature = Package_feature::select('package_features.*')->find($package_feature_id);
                    $delete =  $package_feature->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "package_feature deleted successfully" : "package_feature deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}