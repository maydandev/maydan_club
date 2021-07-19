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
use App\MAYDAN\Package;
class PackageAPIController extends APIController
{
    

             //////////////////////////////////packages/////////////////////////////////


                    public function packages(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $packages = Package::select('packages.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "packages retrieved successfully" : "packages retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$packages);
                    return $check_success;



                                    }


                    public function show_package(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['package_id' => 'required|exists:packages,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $package_id =  $request->package_id;
                    // check_failure
                    $package = Package::select('packages.*')->find($package_id);

                    $ResponseMessage =  ($lang=='ar') ?  "package retrieved successfully" : "package retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package);
                    return $check_success;



                                    }


                    public function add_package(Request $request)
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
                        'is_recommend' => 'required',
                        'cost' => 'required',
                        'alias' => 'required',
                        'title' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $package = new Package ();
      $package->sort = $request->sort;
  $package->is_active = ($request->is_active) ? $request->is_active : 0;
  $package->is_recommend = $request->is_recommend;
  $package->cost = $request->cost;
  $package->alias = $request->alias;
  $package->title = $request->title;



                        $save = $package->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "package saved successfully" : "package saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_package(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $package_id =  $request->package_id;
                    


         $conditions = [ 'package_id' => 'required|exists:packages,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $package = Package::find($package_id);

                    // update
      if(isset($request->sort)) {
  $package->sort = $request->sort;
                                   }  $package->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->is_recommend)) {
  $package->is_recommend = $request->is_recommend;
                                   }  if(isset($request->cost)) {
  $package->cost = $request->cost;
                                   }  if(isset($request->alias)) {
  $package->alias = $request->alias;
                                   }  if(isset($request->title)) {
  $package->title = $request->title;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('packages');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $package->$key = $value;
      // }
      //  }
                  $package->update();
                    $ResponseMessage =  ($lang=='ar') ?  "package updated successfully" : "package updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$package);

                    return $check_success;

               }



                    public function delete_package(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['package_id' => 'required|exists:packages,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $package_id =  $request->package_id;

                    $package = Package::select('packages.*')->find($package_id);
                    $delete =  $package->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "package deleted successfully" : "package deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}