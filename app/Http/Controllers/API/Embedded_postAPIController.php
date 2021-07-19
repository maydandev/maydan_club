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
use App\MAYDAN\Embedded_post;
class Embedded_postAPIController extends APIController
{
    

             //////////////////////////////////embedded_posts/////////////////////////////////


                    public function embedded_posts(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $embedded_posts = Embedded_post::select('embedded_posts.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "embedded_posts retrieved successfully" : "embedded_posts retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$embedded_posts);
                    return $check_success;



                                    }


                    public function show_embedded_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['embedded_post_id' => 'required|exists:embedded_posts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $embedded_post_id =  $request->embedded_post_id;
                    // check_failure
                    $embedded_post = Embedded_post::select('embedded_posts.*')->find($embedded_post_id);

                    $ResponseMessage =  ($lang=='ar') ?  "embedded_post retrieved successfully" : "embedded_post retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$embedded_post);
                    return $check_success;



                                    }


                    public function add_embedded_post(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'post_platform' => 'required',
                        'post_url' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $embedded_post = new Embedded_post ();
      $embedded_post->post_platform = $request->post_platform;
  $embedded_post->post_url = $request->post_url;



                        $save = $embedded_post->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "embedded_post saved successfully" : "embedded_post saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$embedded_post);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_embedded_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $embedded_post_id =  $request->embedded_post_id;
                    


         $conditions = [ 'embedded_post_id' => 'required|exists:embedded_posts,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $embedded_post = Embedded_post::find($embedded_post_id);

                    // update
      if(isset($request->post_platform)) {
  $embedded_post->post_platform = $request->post_platform;
                                   }  if(isset($request->post_url)) {
  $embedded_post->post_url = $request->post_url;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('embedded_posts');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $embedded_post->$key = $value;
      // }
      //  }
                  $embedded_post->update();
                    $ResponseMessage =  ($lang=='ar') ?  "embedded_post updated successfully" : "embedded_post updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$embedded_post);

                    return $check_success;

               }



                    public function delete_embedded_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['embedded_post_id' => 'required|exists:embedded_posts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $embedded_post_id =  $request->embedded_post_id;

                    $embedded_post = Embedded_post::select('embedded_posts.*')->find($embedded_post_id);
                    $delete =  $embedded_post->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "embedded_post deleted successfully" : "embedded_post deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}