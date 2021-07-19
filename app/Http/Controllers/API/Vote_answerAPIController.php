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
use App\User;
class Vote_answerAPIController extends APIController
{
    

             //////////////////////////////////vote_answers/////////////////////////////////


                    public function vote_answers(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $vote_answers = Vote_answer::select('vote_answers.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_answers retrieved successfully" : "vote_answers retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_answers);
                    return $check_success;



                                    }


                    public function show_vote_answer(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['vote_answer_id' => 'required|exists:vote_answers,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $vote_answer_id =  $request->vote_answer_id;
                    // check_failure
                    $vote_answer = Vote_answer::select('vote_answers.*')->find($vote_answer_id);

                    $ResponseMessage =  ($lang=='ar') ?  "vote_answer retrieved successfully" : "vote_answer retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_answer);
                    return $check_success;



                                    }


                    public function add_vote_answer(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'vote_question_option_id' => 'required',
                        'vote_question_id' => 'required',
                        'vote_id' => 'required',
                        'user_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $vote_answer = new Vote_answer ();
      $vote_answer->vote_question_option_id = $request->vote_question_option_id;
  $vote_answer->vote_question_id = $request->vote_question_id;
  $vote_answer->vote_id = $request->vote_id;
  $vote_answer->user_id = $request->user_id;



                        $save = $vote_answer->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "vote_answer saved successfully" : "vote_answer saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_answer);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_vote_answer(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $vote_answer_id =  $request->vote_answer_id;
                    


         $conditions = [ 'vote_answer_id' => 'required|exists:vote_answers,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $vote_answer = Vote_answer::find($vote_answer_id);

                    // update
      if(isset($request->vote_question_option_id)) {
  $vote_answer->vote_question_option_id = $request->vote_question_option_id;
                                   }  if(isset($request->vote_question_id)) {
  $vote_answer->vote_question_id = $request->vote_question_id;
                                   }  if(isset($request->vote_id)) {
  $vote_answer->vote_id = $request->vote_id;
                                   }  if(isset($request->user_id)) {
  $vote_answer->user_id = $request->user_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('vote_answers');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $vote_answer->$key = $value;
      // }
      //  }
                  $vote_answer->update();
                    $ResponseMessage =  ($lang=='ar') ?  "vote_answer updated successfully" : "vote_answer updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_answer);

                    return $check_success;

               }



                    public function delete_vote_answer(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['vote_answer_id' => 'required|exists:vote_answers,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $vote_answer_id =  $request->vote_answer_id;

                    $vote_answer = Vote_answer::select('vote_answers.*')->find($vote_answer_id);
                    $delete =  $vote_answer->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_answer deleted successfully" : "vote_answer deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}