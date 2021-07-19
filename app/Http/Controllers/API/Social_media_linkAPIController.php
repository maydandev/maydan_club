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
use App\MAYDAN\Social_media_link;
class Social_media_linkAPIController extends APIController
{
    

             //////////////////////////////////social_media_links/////////////////////////////////


                    public function social_media_links(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $social_media_links = Social_media_link::select('social_media_links.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "social_media_links retrieved successfully" : "social_media_links retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media_links);
                    return $check_success;



                                    }


                    public function show_social_media_link(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['social_media_link_id' => 'required|exists:social_media_links,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $social_media_link_id =  $request->social_media_link_id;
                    // check_failure
                    $social_media_link = Social_media_link::select('social_media_links.*')->find($social_media_link_id);

                    $ResponseMessage =  ($lang=='ar') ?  "social_media_link retrieved successfully" : "social_media_link retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media_link);
                    return $check_success;



                                    }


                    public function add_social_media_link(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'link' => 'required',
                        'social_media_id' => 'required|exists:social_media,id',
            'application_id' => 'required',
                        'club_id' => 'required|exists:clubs,id',
        ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $social_media_link = new Social_media_link ();
      $social_media_link->is_active = ($request->is_active) ? $request->is_active : 0;
  $social_media_link->link = $request->link;
  $social_media_link->social_media_id = $request->social_media_id;
  $social_media_link->application_id = $request->application_id;
  $social_media_link->club_id = $request->club_id;



                        $save = $social_media_link->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "social_media_link saved successfully" : "social_media_link saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media_link);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_social_media_link(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $social_media_link_id =  $request->social_media_link_id;
                    


         $conditions = [ 'social_media_link_id' => 'required|exists:social_media_links,id'];
                  if(isset($request->social_media_id)) {
                $conditions['social_media_id'] = 'required|exists:social_media,id';
                  }                  if(isset($request->club_id)) {
                $conditions['club_id'] = 'required|exists:clubs,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $social_media_link = Social_media_link::find($social_media_link_id);

                    // update
      $social_media_link->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->link)) {
  $social_media_link->link = $request->link;
                                   }  if(isset($request->social_media_id)) {
  $social_media_link->social_media_id = $request->social_media_id;
                                   }  if(isset($request->application_id)) {
  $social_media_link->application_id = $request->application_id;
                                   }  if(isset($request->club_id)) {
  $social_media_link->club_id = $request->club_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('social_media_links');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $social_media_link->$key = $value;
      // }
      //  }
                  $social_media_link->update();
                    $ResponseMessage =  ($lang=='ar') ?  "social_media_link updated successfully" : "social_media_link updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media_link);

                    return $check_success;

               }



                    public function delete_social_media_link(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['social_media_link_id' => 'required|exists:social_media_links,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $social_media_link_id =  $request->social_media_link_id;

                    $social_media_link = Social_media_link::select('social_media_links.*')->find($social_media_link_id);
                    $delete =  $social_media_link->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "social_media_link deleted successfully" : "social_media_link deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}