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
use App\MAYDAN\Post_type;
class Post_typeAPIController extends APIController
{
    

             //////////////////////////////////post_types/////////////////////////////////


                    public function post_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $post_types = Post_type::select('post_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "post_types retrieved successfully" : "post_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post_types);
                    return $check_success;



                                    }


                    public function show_post_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['post_type_id' => 'required|exists:post_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $post_type_id =  $request->post_type_id;
                    // check_failure
                    $post_type = Post_type::select('post_types.*')->find($post_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "post_type retrieved successfully" : "post_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post_type);
                    return $check_success;



                                    }


                    public function add_post_type(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $post_type = new Post_type ();
      $post_type->en_name = $request->en_name;
  $post_type->name = $request->name;



                        $save = $post_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "post_type saved successfully" : "post_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_post_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $post_type_id =  $request->post_type_id;
                    


         $conditions = [ 'post_type_id' => 'required|exists:post_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $post_type = Post_type::find($post_type_id);

                    // update
      if(isset($request->en_name)) {
  $post_type->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $post_type->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('post_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $post_type->$key = $value;
      // }
      //  }
                  $post_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "post_type updated successfully" : "post_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post_type);

                    return $check_success;

               }



                    public function delete_post_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['post_type_id' => 'required|exists:post_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $post_type_id =  $request->post_type_id;

                    $post_type = Post_type::select('post_types.*')->find($post_type_id);
                    $delete =  $post_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "post_type deleted successfully" : "post_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}