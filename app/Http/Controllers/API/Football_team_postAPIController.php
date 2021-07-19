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
use App\MAYDAN\Football_team_post;
class Football_team_postAPIController extends APIController
{
    

             //////////////////////////////////football_team_posts/////////////////////////////////


                    public function football_team_posts(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $football_team_posts = Football_team_post::select('football_team_posts.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "football_team_posts retrieved successfully" : "football_team_posts retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team_posts);
                    return $check_success;



                                    }


                    public function show_football_team_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['football_team_post_id' => 'required|exists:football_team_posts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $football_team_post_id =  $request->football_team_post_id;
                    // check_failure
                    $football_team_post = Football_team_post::select('football_team_posts.*')->find($football_team_post_id);

                    $ResponseMessage =  ($lang=='ar') ?  "football_team_post retrieved successfully" : "football_team_post retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team_post);
                    return $check_success;



                                    }


                    public function add_football_team_post(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'football_team_id' => 'required',
                        'post_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $football_team_post = new Football_team_post ();
      $football_team_post->football_team_id = $request->football_team_id;
  $football_team_post->post_id = $request->post_id;



                        $save = $football_team_post->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "football_team_post saved successfully" : "football_team_post saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team_post);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_football_team_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $football_team_post_id =  $request->football_team_post_id;
                    


         $conditions = [ 'football_team_post_id' => 'required|exists:football_team_posts,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $football_team_post = Football_team_post::find($football_team_post_id);

                    // update
      if(isset($request->football_team_id)) {
  $football_team_post->football_team_id = $request->football_team_id;
                                   }  if(isset($request->post_id)) {
  $football_team_post->post_id = $request->post_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('football_team_posts');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $football_team_post->$key = $value;
      // }
      //  }
                  $football_team_post->update();
                    $ResponseMessage =  ($lang=='ar') ?  "football_team_post updated successfully" : "football_team_post updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$football_team_post);

                    return $check_success;

               }



                    public function delete_football_team_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['football_team_post_id' => 'required|exists:football_team_posts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $football_team_post_id =  $request->football_team_post_id;

                    $football_team_post = Football_team_post::select('football_team_posts.*')->find($football_team_post_id);
                    $delete =  $football_team_post->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "football_team_post deleted successfully" : "football_team_post deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}