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
use App\MAYDAN\Prediction_type;
class Prediction_typeAPIController extends APIController
{
    

             //////////////////////////////////prediction_types/////////////////////////////////


                    public function prediction_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $prediction_types = Prediction_type::select('prediction_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "prediction_types retrieved successfully" : "prediction_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction_types);
                    return $check_success;



                                    }


                    public function show_prediction_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['prediction_type_id' => 'required|exists:prediction_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $prediction_type_id =  $request->prediction_type_id;
                    // check_failure
                    $prediction_type = Prediction_type::select('prediction_types.*')->find($prediction_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "prediction_type retrieved successfully" : "prediction_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction_type);
                    return $check_success;



                                    }


                    public function add_prediction_type(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'color' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $prediction_type = new Prediction_type ();
      $prediction_type->color = $request->color;
  $prediction_type->en_name = $request->en_name;
  $prediction_type->name = $request->name;



                        $save = $prediction_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "prediction_type saved successfully" : "prediction_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_prediction_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $prediction_type_id =  $request->prediction_type_id;
                    


         $conditions = [ 'prediction_type_id' => 'required|exists:prediction_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $prediction_type = Prediction_type::find($prediction_type_id);

                    // update
      if(isset($request->color)) {
  $prediction_type->color = $request->color;
                                   }  if(isset($request->en_name)) {
  $prediction_type->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $prediction_type->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('prediction_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $prediction_type->$key = $value;
      // }
      //  }
                  $prediction_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "prediction_type updated successfully" : "prediction_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$prediction_type);

                    return $check_success;

               }



                    public function delete_prediction_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['prediction_type_id' => 'required|exists:prediction_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $prediction_type_id =  $request->prediction_type_id;

                    $prediction_type = Prediction_type::select('prediction_types.*')->find($prediction_type_id);
                    $delete =  $prediction_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "prediction_type deleted successfully" : "prediction_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}