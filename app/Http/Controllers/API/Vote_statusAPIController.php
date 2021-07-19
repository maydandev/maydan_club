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
class Vote_statusAPIController extends APIController
{
    

             //////////////////////////////////vote_statuses/////////////////////////////////


                    public function vote_statuses(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $vote_statuses = Vote_status::select('vote_statuses.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_statuses retrieved successfully" : "vote_statuses retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_statuses);
                    return $check_success;



                                    }


                    public function show_vote_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['vote_status_id' => 'required|exists:vote_statuses,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $vote_status_id =  $request->vote_status_id;
                    // check_failure
                    $vote_status = Vote_status::select('vote_statuses.*')->find($vote_status_id);

                    $ResponseMessage =  ($lang=='ar') ?  "vote_status retrieved successfully" : "vote_status retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_status);
                    return $check_success;



                                    }


                    public function add_vote_status(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'color' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $vote_status = new Vote_status ();
      $vote_status->color = $request->color;
  $vote_status->en_name = $request->en_name;
  $vote_status->name = $request->name;



                        $save = $vote_status->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "vote_status saved successfully" : "vote_status saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_status);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_vote_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $vote_status_id =  $request->vote_status_id;
                    


         $conditions = [ 'vote_status_id' => 'required|exists:vote_statuses,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $vote_status = Vote_status::find($vote_status_id);

                    // update
      if(isset($request->color)) {
  $vote_status->color = $request->color;
                                   }  if(isset($request->en_name)) {
  $vote_status->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $vote_status->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('vote_statuses');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $vote_status->$key = $value;
      // }
      //  }
                  $vote_status->update();
                    $ResponseMessage =  ($lang=='ar') ?  "vote_status updated successfully" : "vote_status updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$vote_status);

                    return $check_success;

               }



                    public function delete_vote_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['vote_status_id' => 'required|exists:vote_statuses,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $vote_status_id =  $request->vote_status_id;

                    $vote_status = Vote_status::select('vote_statuses.*')->find($vote_status_id);
                    $delete =  $vote_status->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "vote_status deleted successfully" : "vote_status deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}