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
use App\MAYDAN\Quizze_answer;
class Quizze_answerAPIController extends APIController
{
    

             //////////////////////////////////quizze_answers/////////////////////////////////


                    public function quizze_answers(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $quizze_answers = Quizze_answer::select('quizze_answers.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_answers retrieved successfully" : "quizze_answers retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_answers);
                    return $check_success;



                                    }


                    public function show_quizze_answer(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['quizze_answer_id' => 'required|exists:quizze_answers,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $quizze_answer_id =  $request->quizze_answer_id;
                    // check_failure
                    $quizze_answer = Quizze_answer::select('quizze_answers.*')->find($quizze_answer_id);

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_answer retrieved successfully" : "quizze_answer retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_answer);
                    return $check_success;



                                    }


                    public function add_quizze_answer(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'result_points' => 'required',
                        'quizze_question_option_id' => 'required',
                        'quizze_question_id' => 'required',
                        'quizze_id' => 'required',
                        'user_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $quizze_answer = new Quizze_answer ();
      $quizze_answer->result_points = $request->result_points;
  $quizze_answer->quizze_question_option_id = $request->quizze_question_option_id;
  $quizze_answer->quizze_question_id = $request->quizze_question_id;
  $quizze_answer->quizze_id = $request->quizze_id;
  $quizze_answer->user_id = $request->user_id;



                        $save = $quizze_answer->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_answer saved successfully" : "quizze_answer saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_answer);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_quizze_answer(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $quizze_answer_id =  $request->quizze_answer_id;
                    


         $conditions = [ 'quizze_answer_id' => 'required|exists:quizze_answers,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $quizze_answer = Quizze_answer::find($quizze_answer_id);

                    // update
      if(isset($request->result_points)) {
  $quizze_answer->result_points = $request->result_points;
                                   }  if(isset($request->quizze_question_option_id)) {
  $quizze_answer->quizze_question_option_id = $request->quizze_question_option_id;
                                   }  if(isset($request->quizze_question_id)) {
  $quizze_answer->quizze_question_id = $request->quizze_question_id;
                                   }  if(isset($request->quizze_id)) {
  $quizze_answer->quizze_id = $request->quizze_id;
                                   }  if(isset($request->user_id)) {
  $quizze_answer->user_id = $request->user_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('quizze_answers');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $quizze_answer->$key = $value;
      // }
      //  }
                  $quizze_answer->update();
                    $ResponseMessage =  ($lang=='ar') ?  "quizze_answer updated successfully" : "quizze_answer updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_answer);

                    return $check_success;

               }



                    public function delete_quizze_answer(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['quizze_answer_id' => 'required|exists:quizze_answers,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $quizze_answer_id =  $request->quizze_answer_id;

                    $quizze_answer = Quizze_answer::select('quizze_answers.*')->find($quizze_answer_id);
                    $delete =  $quizze_answer->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_answer deleted successfully" : "quizze_answer deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}