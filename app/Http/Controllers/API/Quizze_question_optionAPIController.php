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
use App\MAYDAN\Quizze_question_option;
class Quizze_question_optionAPIController extends APIController
{
    

             //////////////////////////////////quizze_question_options/////////////////////////////////


                    public function quizze_question_options(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $quizze_question_options = Quizze_question_option::select('quizze_question_options.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question_options retrieved successfully" : "quizze_question_options retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question_options);
                    return $check_success;



                                    }


                    public function show_quizze_question_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['quizze_question_option_id' => 'required|exists:quizze_question_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $quizze_question_option_id =  $request->quizze_question_option_id;
                    // check_failure
                    $quizze_question_option = Quizze_question_option::select('quizze_question_options.*')->find($quizze_question_option_id);

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question_option retrieved successfully" : "quizze_question_option retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question_option);
                    return $check_success;



                                    }


                    public function add_quizze_question_option(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_best_answer' => 'required',
                        'quizze_option_id' => 'required',
                        'quizze_question_id' => 'required',
                        'quizze_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $quizze_question_option = new Quizze_question_option ();
      $quizze_question_option->is_best_answer = $request->is_best_answer;
  $quizze_question_option->quizze_option_id = $request->quizze_option_id;
  $quizze_question_option->quizze_question_id = $request->quizze_question_id;
  $quizze_question_option->quizze_id = $request->quizze_id;



                        $save = $quizze_question_option->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question_option saved successfully" : "quizze_question_option saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question_option);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_quizze_question_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $quizze_question_option_id =  $request->quizze_question_option_id;
                    


         $conditions = [ 'quizze_question_option_id' => 'required|exists:quizze_question_options,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $quizze_question_option = Quizze_question_option::find($quizze_question_option_id);

                    // update
      if(isset($request->is_best_answer)) {
  $quizze_question_option->is_best_answer = $request->is_best_answer;
                                   }  if(isset($request->quizze_option_id)) {
  $quizze_question_option->quizze_option_id = $request->quizze_option_id;
                                   }  if(isset($request->quizze_question_id)) {
  $quizze_question_option->quizze_question_id = $request->quizze_question_id;
                                   }  if(isset($request->quizze_id)) {
  $quizze_question_option->quizze_id = $request->quizze_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('quizze_question_options');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $quizze_question_option->$key = $value;
      // }
      //  }
                  $quizze_question_option->update();
                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question_option updated successfully" : "quizze_question_option updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question_option);

                    return $check_success;

               }



                    public function delete_quizze_question_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['quizze_question_option_id' => 'required|exists:quizze_question_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $quizze_question_option_id =  $request->quizze_question_option_id;

                    $quizze_question_option = Quizze_question_option::select('quizze_question_options.*')->find($quizze_question_option_id);
                    $delete =  $quizze_question_option->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question_option deleted successfully" : "quizze_question_option deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}