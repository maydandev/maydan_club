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
use App\MAYDAN\Quizze_option;
class Quizze_optionAPIController extends APIController
{
    

             //////////////////////////////////quizze_options/////////////////////////////////


                    public function quizze_options(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $quizze_options = Quizze_option::select('quizze_options.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_options retrieved successfully" : "quizze_options retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_options);
                    return $check_success;



                                    }


                    public function show_quizze_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['quizze_option_id' => 'required|exists:quizze_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $quizze_option_id =  $request->quizze_option_id;
                    // check_failure
                    $quizze_option = Quizze_option::select('quizze_options.*')->find($quizze_option_id);

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_option retrieved successfully" : "quizze_option retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_option);
                    return $check_success;



                                    }


                    public function add_quizze_option(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'quizze_option' => 'required',
                        'quizze_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $quizze_option = new Quizze_option ();
      $quizze_option->quizze_option = $request->quizze_option;
  $quizze_option->quizze_id = $request->quizze_id;



                        $save = $quizze_option->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_option saved successfully" : "quizze_option saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_option);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_quizze_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $quizze_option_id =  $request->quizze_option_id;
                    


         $conditions = [ 'quizze_option_id' => 'required|exists:quizze_options,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $quizze_option = Quizze_option::find($quizze_option_id);

                    // update
      if(isset($request->quizze_option)) {
  $quizze_option->quizze_option = $request->quizze_option;
                                   }  if(isset($request->quizze_id)) {
  $quizze_option->quizze_id = $request->quizze_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('quizze_options');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $quizze_option->$key = $value;
      // }
      //  }
                  $quizze_option->update();
                    $ResponseMessage =  ($lang=='ar') ?  "quizze_option updated successfully" : "quizze_option updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_option);

                    return $check_success;

               }



                    public function delete_quizze_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['quizze_option_id' => 'required|exists:quizze_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $quizze_option_id =  $request->quizze_option_id;

                    $quizze_option = Quizze_option::select('quizze_options.*')->find($quizze_option_id);
                    $delete =  $quizze_option->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_option deleted successfully" : "quizze_option deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}