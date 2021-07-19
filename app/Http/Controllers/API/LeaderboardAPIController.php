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
use App\MAYDAN\Leaderboard;
class LeaderboardAPIController extends APIController
{
    

             //////////////////////////////////leaderboards/////////////////////////////////


                    public function leaderboards(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $leaderboards = Leaderboard::select('leaderboards.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "leaderboards retrieved successfully" : "leaderboards retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$leaderboards);
                    return $check_success;



                                    }


                    public function show_leaderboard(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['leaderboard_id' => 'required|exists:leaderboards,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $leaderboard_id =  $request->leaderboard_id;
                    // check_failure
                    $leaderboard = Leaderboard::select('leaderboards.*')->find($leaderboard_id);

                    $ResponseMessage =  ($lang=='ar') ?  "leaderboard retrieved successfully" : "leaderboard retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$leaderboard);
                    return $check_success;



                                    }


                    public function add_leaderboard(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'total_score' => 'required',
                        'user_id' => 'required',
                        'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $leaderboard = new Leaderboard ();
      $leaderboard->total_score = $request->total_score;
  $leaderboard->user_id = $request->user_id;
  $leaderboard->application_id = $request->application_id;



                        $save = $leaderboard->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "leaderboard saved successfully" : "leaderboard saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$leaderboard);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_leaderboard(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $leaderboard_id =  $request->leaderboard_id;
                    


         $conditions = [ 'leaderboard_id' => 'required|exists:leaderboards,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $leaderboard = Leaderboard::find($leaderboard_id);

                    // update
      if(isset($request->total_score)) {
  $leaderboard->total_score = $request->total_score;
                                   }  if(isset($request->user_id)) {
  $leaderboard->user_id = $request->user_id;
                                   }  if(isset($request->application_id)) {
  $leaderboard->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('leaderboards');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $leaderboard->$key = $value;
      // }
      //  }
                  $leaderboard->update();
                    $ResponseMessage =  ($lang=='ar') ?  "leaderboard updated successfully" : "leaderboard updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$leaderboard);

                    return $check_success;

               }



                    public function delete_leaderboard(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['leaderboard_id' => 'required|exists:leaderboards,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $leaderboard_id =  $request->leaderboard_id;

                    $leaderboard = Leaderboard::select('leaderboards.*')->find($leaderboard_id);
                    $delete =  $leaderboard->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "leaderboard deleted successfully" : "leaderboard deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}