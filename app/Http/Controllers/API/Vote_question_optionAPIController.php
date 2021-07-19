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
class Vote_question_optionAPIController extends APIController
{
    

             //////////////////////////////////vote_question_options/////////////////////////////////


                    public function vote_question_options(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $vote_question_options = Vote_question_option::select('vote_question_options.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question_options retrieved successfully" : "vote_question_options retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question_options);
                    return $check_success;



                                    }


                    public function show_vote_question_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['vote_question_option_id' => 'required|exists:vote_question_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $vote_question_option_id =  $request->vote_question_option_id;
                    // check_failure
                    $vote_question_option = Vote_question_option::select('vote_question_options.*')->find($vote_question_option_id);

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question_option retrieved successfully" : "vote_question_option retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question_option);
                    return $check_success;



                                    }


                    public function add_vote_question_option(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'percentage' => 'required',
                        'vote_option_id' => 'required',
                        'vote_question_id' => 'required',
                        'vote_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $vote_question_option = new Vote_question_option ();
      $vote_question_option->percentage = $request->percentage;
  $vote_question_option->vote_option_id = $request->vote_option_id;
  $vote_question_option->vote_question_id = $request->vote_question_id;
  $vote_question_option->vote_id = $request->vote_id;



                        $save = $vote_question_option->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question_option saved successfully" : "vote_question_option saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question_option);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_vote_question_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $vote_question_option_id =  $request->vote_question_option_id;
                    


         $conditions = [ 'vote_question_option_id' => 'required|exists:vote_question_options,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $vote_question_option = Vote_question_option::find($vote_question_option_id);

                    // update
      if(isset($request->percentage)) {
  $vote_question_option->percentage = $request->percentage;
                                   }  if(isset($request->vote_option_id)) {
  $vote_question_option->vote_option_id = $request->vote_option_id;
                                   }  if(isset($request->vote_question_id)) {
  $vote_question_option->vote_question_id = $request->vote_question_id;
                                   }  if(isset($request->vote_id)) {
  $vote_question_option->vote_id = $request->vote_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('vote_question_options');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $vote_question_option->$key = $value;
      // }
      //  }
                  $vote_question_option->update();
                    $ResponseMessage =  ($lang=='ar') ?  "vote_question_option updated successfully" : "vote_question_option updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_question_option);

                    return $check_success;

               }



                    public function delete_vote_question_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['vote_question_option_id' => 'required|exists:vote_question_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $vote_question_option_id =  $request->vote_question_option_id;

                    $vote_question_option = Vote_question_option::select('vote_question_options.*')->find($vote_question_option_id);
                    $delete =  $vote_question_option->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_question_option deleted successfully" : "vote_question_option deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}