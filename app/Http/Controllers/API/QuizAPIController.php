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
use App\MAYDAN\Quiz;
class QuizAPIController extends APIController
{
    

             //////////////////////////////////quizzes/////////////////////////////////


                    public function quizzes(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $quizzes = Quiz::select('quizzes.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "quizzes retrieved successfully" : "quizzes retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizzes);
                    return $check_success;



                                    }


                    public function show_quiz(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['quiz_id' => 'required|exists:quizzes,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $quiz_id =  $request->quiz_id;
                    // check_failure
                    $quiz = Quiz::select('quizzes.*')->find($quiz_id);

                    $ResponseMessage =  ($lang=='ar') ?  "quiz retrieved successfully" : "quiz retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quiz);
                    return $check_success;



                                    }


                    public function add_quiz(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'timer' => 'required',
                        'top_result' => 'required',
                        'average_score' => 'required',
                        'total_participants' => 'required',
                        'deadline' => 'required',
                        'post_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $quiz = new Quiz ();
      $quiz->timer = $request->timer;
  $quiz->top_result = $request->top_result;
  $quiz->average_score = $request->average_score;
  $quiz->total_participants = $request->total_participants;
  $quiz->deadline = $request->deadline;
  $quiz->post_id = $request->post_id;



                        $save = $quiz->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "quiz saved successfully" : "quiz saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quiz);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_quiz(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $quiz_id =  $request->quiz_id;
                    


         $conditions = [ 'quiz_id' => 'required|exists:quizzes,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $quiz = Quiz::find($quiz_id);

                    // update
      if(isset($request->timer)) {
  $quiz->timer = $request->timer;
                                   }  if(isset($request->top_result)) {
  $quiz->top_result = $request->top_result;
                                   }  if(isset($request->average_score)) {
  $quiz->average_score = $request->average_score;
                                   }  if(isset($request->total_participants)) {
  $quiz->total_participants = $request->total_participants;
                                   }  if(isset($request->deadline)) {
  $quiz->deadline = $request->deadline;
                                   }  if(isset($request->post_id)) {
  $quiz->post_id = $request->post_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('quizzes');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $quiz->$key = $value;
      // }
      //  }
                  $quiz->update();
                    $ResponseMessage =  ($lang=='ar') ?  "quiz updated successfully" : "quiz updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quiz);

                    return $check_success;

               }



                    public function delete_quiz(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['quiz_id' => 'required|exists:quizzes,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $quiz_id =  $request->quiz_id;

                    $quiz = Quiz::select('quizzes.*')->find($quiz_id);
                    $delete =  $quiz->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "quiz deleted successfully" : "quiz deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}