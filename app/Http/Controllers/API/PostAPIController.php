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
use App\MAYDAN\Post;
class PostAPIController extends APIController
{
    

             //////////////////////////////////posts/////////////////////////////////


                    public function posts(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $posts = Post::select('posts.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "posts retrieved successfully" : "posts retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$posts);
                    return $check_success;



                                    }


                    public function show_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['post_id' => 'required|exists:posts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $post_id =  $request->post_id;
                    // check_failure
                    $post = Post::select('posts.*')->find($post_id);

                    $ResponseMessage =  ($lang=='ar') ?  "post retrieved successfully" : "post retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post);
                    return $check_success;



                                    }


                    public function add_post(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'application_id' => 'required',
                        'post_platform' => 'required',
                        'post_url' => 'required',
                        'count_views' => 'required',
                        'post_type_id' => 'required',
                        'summary' => 'required',
                        'content' => 'required',
                        'video' => 'required',
                        'image' => 'required',
                        'title' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $post = new Post ();
      $post->is_active = ($request->is_active) ? $request->is_active : 0;
  $post->application_id = $request->application_id;
  $post->post_platform = $request->post_platform;
  $post->post_url = $request->post_url;
  $post->count_views = $request->count_views;
  $post->post_type_id = $request->post_type_id;
  $post->summary = $request->summary;
  $post->content = $request->content;
  $post->video = $request->video;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/posts';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $post->image = '/'.$destinationPath."/".$fileName;

      }}
  $post->title = $request->title;



                        $save = $post->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "post saved successfully" : "post saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $post_id =  $request->post_id;
                    


         $conditions = [ 'post_id' => 'required|exists:posts,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $post = Post::find($post_id);

                    // update
      $post->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->application_id)) {
  $post->application_id = $request->application_id;
                                   }  if(isset($request->post_platform)) {
  $post->post_platform = $request->post_platform;
                                   }  if(isset($request->post_url)) {
  $post->post_url = $request->post_url;
                                   }  if(isset($request->count_views)) {
  $post->count_views = $request->count_views;
                                   }  if(isset($request->post_type_id)) {
  $post->post_type_id = $request->post_type_id;
                                   }  if(isset($request->summary)) {
  $post->summary = $request->summary;
                                   }  if(isset($request->content)) {
  $post->content = $request->content;
                                   }  if(isset($request->video)) {
  $post->video = $request->video;
                                   }  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/posts';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $post->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->title)) {
  $post->title = $request->title;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('posts');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $post->$key = $value;
      // }
      //  }
                  $post->update();
                    $ResponseMessage =  ($lang=='ar') ?  "post updated successfully" : "post updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$post);

                    return $check_success;

               }



                    public function delete_post(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['post_id' => 'required|exists:posts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $post_id =  $request->post_id;

                    $post = Post::select('posts.*')->find($post_id);
                    $delete =  $post->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "post deleted successfully" : "post deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}