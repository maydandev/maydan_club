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
use App\MAYDAN\Feature;
class FeatureAPIController extends APIController
{
    

             //////////////////////////////////features/////////////////////////////////


                    public function features(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $features = Feature::select('features.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "features retrieved successfully" : "features retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$features);
                    return $check_success;



                                    }


                    public function show_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['feature_id' => 'required|exists:features,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $feature_id =  $request->feature_id;
                    // check_failure
                    $feature = Feature::select('features.*')->find($feature_id);

                    $ResponseMessage =  ($lang=='ar') ?  "feature retrieved successfully" : "feature retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$feature);
                    return $check_success;



                                    }


                    public function add_feature(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'sort' => 'required',
                        'text_align' => 'required',
                        'image' => 'required',
                        'icon' => 'required',
                        'text' => 'required',
                        'title' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $feature = new Feature ();
      $feature->is_active = ($request->is_active) ? $request->is_active : 0;
  $feature->sort = $request->sort;
  $feature->text_align = $request->text_align;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/features';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $feature->image = '/'.$destinationPath."/".$fileName;

      }}
  $feature->icon = $request->icon;
  $feature->text = $request->text;
  $feature->title = $request->title;



                        $save = $feature->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "feature saved successfully" : "feature saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$feature);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $feature_id =  $request->feature_id;
                    


         $conditions = [ 'feature_id' => 'required|exists:features,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $feature = Feature::find($feature_id);

                    // update
      $feature->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->sort)) {
  $feature->sort = $request->sort;
                                   }  if(isset($request->text_align)) {
  $feature->text_align = $request->text_align;
                                   }  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/features';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $feature->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->icon)) {
  $feature->icon = $request->icon;
                                   }  if(isset($request->text)) {
  $feature->text = $request->text;
                                   }  if(isset($request->title)) {
  $feature->title = $request->title;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('features');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $feature->$key = $value;
      // }
      //  }
                  $feature->update();
                    $ResponseMessage =  ($lang=='ar') ?  "feature updated successfully" : "feature updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$feature);

                    return $check_success;

               }



                    public function delete_feature(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['feature_id' => 'required|exists:features,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $feature_id =  $request->feature_id;

                    $feature = Feature::select('features.*')->find($feature_id);
                    $delete =  $feature->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "feature deleted successfully" : "feature deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}