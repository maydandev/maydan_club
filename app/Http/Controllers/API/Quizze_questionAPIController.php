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
use App\MAYDAN\Quizze_question;
class Quizze_questionAPIController extends APIController
{
    

             //////////////////////////////////quizze_questions/////////////////////////////////


                    public function quizze_questions(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $quizze_questions = Quizze_question::select('quizze_questions.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_questions retrieved successfully" : "quizze_questions retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_questions);
                    return $check_success;



                                    }


                    public function show_quizze_question(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['quizze_question_id' => 'required|exists:quizze_questions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $quizze_question_id =  $request->quizze_question_id;
                    // check_failure
                    $quizze_question = Quizze_question::select('quizze_questions.*')->find($quizze_question_id);

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question retrieved successfully" : "quizze_question retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question);
                    return $check_success;



                                    }


                    public function add_quizze_question(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'quizze_question_option_id' => 'required',
                        'points' => 'required',
                        'image' => 'required',
                        'quizze_question' => 'required',
                        'quizze_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $quizze_question = new Quizze_question ();
      $quizze_question->quizze_question_option_id = $request->quizze_question_option_id;
  $quizze_question->points = $request->points;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/quizze_questions';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $quizze_question->image = '/'.$destinationPath."/".$fileName;

      }}
  $quizze_question->quizze_question = $request->quizze_question;
  $quizze_question->quizze_id = $request->quizze_id;



                        $save = $quizze_question->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question saved successfully" : "quizze_question saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_quizze_question(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $quizze_question_id =  $request->quizze_question_id;
                    


         $conditions = [ 'quizze_question_id' => 'required|exists:quizze_questions,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $quizze_question = Quizze_question::find($quizze_question_id);

                    // update
      if(isset($request->quizze_question_option_id)) {
  $quizze_question->quizze_question_option_id = $request->quizze_question_option_id;
                                   }  if(isset($request->points)) {
  $quizze_question->points = $request->points;
                                   }  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/quizze_questions';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $quizze_question->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->quizze_question)) {
  $quizze_question->quizze_question = $request->quizze_question;
                                   }  if(isset($request->quizze_id)) {
  $quizze_question->quizze_id = $request->quizze_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('quizze_questions');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $quizze_question->$key = $value;
      // }
      //  }
                  $quizze_question->update();
                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question updated successfully" : "quizze_question updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$quizze_question);

                    return $check_success;

               }



                    public function delete_quizze_question(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['quizze_question_id' => 'required|exists:quizze_questions,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $quizze_question_id =  $request->quizze_question_id;

                    $quizze_question = Quizze_question::select('quizze_questions.*')->find($quizze_question_id);
                    $delete =  $quizze_question->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "quizze_question deleted successfully" : "quizze_question deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}