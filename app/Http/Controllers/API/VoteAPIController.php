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
class VoteAPIController extends APIController
{
    

             //////////////////////////////////votes/////////////////////////////////


                    public function votes(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $votes = Vote::select('votes.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "votes retrieved successfully" : "votes retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$votes);
                    return $check_success;



                                    }


                    public function show_vote(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['vote_id' => 'required|exists:votes,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $vote_id =  $request->vote_id;
                    // check_failure
                    $vote = Vote::select('votes.*')->find($vote_id);

                    $ResponseMessage =  ($lang=='ar') ?  "vote retrieved successfully" : "vote retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote);
                    return $check_success;



                                    }


                    public function add_vote(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'vote_status_id' => 'required',
                        'result_total_voters' => 'required',
                        'result_percentage' => 'required',
                        'total_voters' => 'required',
                        'deadline' => 'required',
                        'post_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $vote = new Vote ();
      $vote->is_active = ($request->is_active) ? $request->is_active : 0;
  $vote->vote_status_id = $request->vote_status_id;
  $vote->result_total_voters = $request->result_total_voters;
  $vote->result_percentage = $request->result_percentage;
  $vote->total_voters = $request->total_voters;
  $vote->deadline = $request->deadline;
  $vote->post_id = $request->post_id;



                        $save = $vote->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "vote saved successfully" : "vote saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_vote(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $vote_id =  $request->vote_id;
                    


         $conditions = [ 'vote_id' => 'required|exists:votes,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $vote = Vote::find($vote_id);

                    // update
      $vote->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->vote_status_id)) {
  $vote->vote_status_id = $request->vote_status_id;
                                   }  if(isset($request->result_total_voters)) {
  $vote->result_total_voters = $request->result_total_voters;
                                   }  if(isset($request->result_percentage)) {
  $vote->result_percentage = $request->result_percentage;
                                   }  if(isset($request->total_voters)) {
  $vote->total_voters = $request->total_voters;
                                   }  if(isset($request->deadline)) {
  $vote->deadline = $request->deadline;
                                   }  if(isset($request->post_id)) {
  $vote->post_id = $request->post_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('votes');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $vote->$key = $value;
      // }
      //  }
                  $vote->update();
                    $ResponseMessage =  ($lang=='ar') ?  "vote updated successfully" : "vote updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote);

                    return $check_success;

               }



                    public function delete_vote(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['vote_id' => 'required|exists:votes,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $vote_id =  $request->vote_id;

                    $vote = Vote::select('votes.*')->find($vote_id);
                    $delete =  $vote->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "vote deleted successfully" : "vote deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}