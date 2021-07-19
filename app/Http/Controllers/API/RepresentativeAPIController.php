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
use App\MAYDAN\Representative;
class RepresentativeAPIController extends APIController
{
    

             //////////////////////////////////representatives/////////////////////////////////


                    public function representatives(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $representatives = Representative::select('representatives.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "representatives retrieved successfully" : "representatives retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$representatives);
                    return $check_success;



                                    }


                    public function show_representative(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['representative_id' => 'required|exists:representatives,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $representative_id =  $request->representative_id;
                    // check_failure
                    $representative = Representative::select('representatives.*')->find($representative_id);

                    $ResponseMessage =  ($lang=='ar') ?  "representative retrieved successfully" : "representative retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$representative);
                    return $check_success;



                                    }


                    public function add_representative(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'email' => 'required',
                        'phone_number' => 'required',
                        'position' => 'required',
                        'name' => 'required',
                        'user_id' => 'required|exists:users,id',
        ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $representative = new Representative ();
      $representative->is_active = ($request->is_active) ? $request->is_active : 0;
  $representative->email = $request->email;
  $representative->phone_number = $request->phone_number;
  $representative->position = $request->position;
  $representative->name = $request->name;
  $representative->user_id = $request->user_id;



                        $save = $representative->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "representative saved successfully" : "representative saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$representative);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_representative(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $representative_id =  $request->representative_id;
                    


         $conditions = [ 'representative_id' => 'required|exists:representatives,id'];
                  if(isset($request->user_id)) {
                $conditions['user_id'] = 'required|exists:users,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $representative = Representative::find($representative_id);

                    // update
      $representative->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->email)) {
  $representative->email = $request->email;
                                   }  if(isset($request->phone_number)) {
  $representative->phone_number = $request->phone_number;
                                   }  if(isset($request->position)) {
  $representative->position = $request->position;
                                   }  if(isset($request->name)) {
  $representative->name = $request->name;
                                   }  if(isset($request->user_id)) {
  $representative->user_id = $request->user_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('representatives');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $representative->$key = $value;
      // }
      //  }
                  $representative->update();
                    $ResponseMessage =  ($lang=='ar') ?  "representative updated successfully" : "representative updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$representative);

                    return $check_success;

               }



                    public function delete_representative(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['representative_id' => 'required|exists:representatives,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $representative_id =  $request->representative_id;

                    $representative = Representative::select('representatives.*')->find($representative_id);
                    $delete =  $representative->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "representative deleted successfully" : "representative deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}