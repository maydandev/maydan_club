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
class Vote_questionAPIController extends APIController
{
    

             //////////////////////////////////vote_questions/////////////////////////////////


                    public function vote_questions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $vote_questions = Vote_question::select('vote_questions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_questions retrieved successfully" : "vote_questions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_questions);
                    return $check_success;



                                    }


                    public function show_vote_question(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['vote_question_id' => 'required|exists:vote_questions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $vote_question_id =  $request->vote_question_id;
                    // check_failure
                    $vote_question = Vote_question::select('vote_questions.*')->find($vote_question_id);

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question retrieved successfully" : "vote_question retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question);
                    return $check_success;



                                    }


                    public function add_vote_question(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'vote_question' => 'required',
                        'vote_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $vote_question = new Vote_question ();
      $vote_question->vote_question = $request->vote_question;
  $vote_question->vote_id = $request->vote_id;



                        $save = $vote_question->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question saved successfully" : "vote_question saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_vote_question(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $vote_question_id =  $request->vote_question_id;
                    


         $conditions = [ 'vote_question_id' => 'required|exists:vote_questions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $vote_question = Vote_question::find($vote_question_id);

                    // update
      if(isset($request->vote_question)) {
  $vote_question->vote_question = $request->vote_question;
                                   }  if(isset($request->vote_id)) {
  $vote_question->vote_id = $request->vote_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('vote_questions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $vote_question->$key = $value;
      // }
      //  }
                  $vote_question->update();
                    $ResponseMessage =  ($lang=='ar') ?  "vote_question updated successfully" : "vote_question updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question);

                    return $check_success;

               }



                    public function delete_vote_question(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['vote_question_id' => 'required|exists:vote_questions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $vote_question_id =  $request->vote_question_id;

                    $vote_question = Vote_question::select('vote_questions.*')->find($vote_question_id);
                    $delete =  $vote_question->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question deleted successfully" : "vote_question deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}