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
class Vote_optionAPIController extends APIController
{
    

             //////////////////////////////////vote_options/////////////////////////////////


                    public function vote_options(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $vote_options = Vote_option::select('vote_options.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_options retrieved successfully" : "vote_options retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_options);
                    return $check_success;



                                    }


                    public function show_vote_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['vote_option_id' => 'required|exists:vote_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $vote_option_id =  $request->vote_option_id;
                    // check_failure
                    $vote_option = Vote_option::select('vote_options.*')->find($vote_option_id);

                    $ResponseMessage =  ($lang=='ar') ?  "vote_option retrieved successfully" : "vote_option retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_option);
                    return $check_success;



                                    }


                    public function add_vote_option(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'vote_option' => 'required',
                        'vote_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $vote_option = new Vote_option ();
      $vote_option->vote_option = $request->vote_option;
  $vote_option->vote_id = $request->vote_id;



                        $save = $vote_option->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "vote_option saved successfully" : "vote_option saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_option);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_vote_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $vote_option_id =  $request->vote_option_id;
                    


         $conditions = [ 'vote_option_id' => 'required|exists:vote_options,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $vote_option = Vote_option::find($vote_option_id);

                    // update
      if(isset($request->vote_option)) {
  $vote_option->vote_option = $request->vote_option;
                                   }  if(isset($request->vote_id)) {
  $vote_option->vote_id = $request->vote_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('vote_options');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $vote_option->$key = $value;
      // }
      //  }
                  $vote_option->update();
                    $ResponseMessage =  ($lang=='ar') ?  "vote_option updated successfully" : "vote_option updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_option);

                    return $check_success;

               }



                    public function delete_vote_option(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['vote_option_id' => 'required|exists:vote_options,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $vote_option_id =  $request->vote_option_id;

                    $vote_option = Vote_option::select('vote_options.*')->find($vote_option_id);
                    $delete =  $vote_option->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_option deleted successfully" : "vote_option deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}