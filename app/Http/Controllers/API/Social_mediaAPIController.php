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
use App\MAYDAN\Social_media;
class Social_mediaAPIController extends APIController
{
    

             //////////////////////////////////social_media/////////////////////////////////


                    public function social_media(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $social_media = Social_media::select('social_media.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "social_media retrieved successfully" : "social_media retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media);
                    return $check_success;



                                    }


                    public function show_social_media(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['social_media_id' => 'required|exists:social_media,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $social_media_id =  $request->social_media_id;
                    // check_failure
                    $social_media = Social_media::select('social_media.*')->find($social_media_id);

                    $ResponseMessage =  ($lang=='ar') ?  "social_media retrieved successfully" : "social_media retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media);
                    return $check_success;



                                    }


                    public function add_social_media(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'image' => 'required',
                        'icon' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $social_media = new Social_media ();
    
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/social_media';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $social_media->image = '/'.$destinationPath."/".$fileName;

      }}
  $social_media->icon = $request->icon;
  $social_media->en_name = $request->en_name;
  $social_media->name = $request->name;



                        $save = $social_media->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "social_media saved successfully" : "social_media saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_social_media(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $social_media_id =  $request->social_media_id;
                    


         $conditions = [ 'social_media_id' => 'required|exists:social_media,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $social_media = Social_media::find($social_media_id);

                    // update
      if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/social_media';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $social_media->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->icon)) {
  $social_media->icon = $request->icon;
                                   }  if(isset($request->en_name)) {
  $social_media->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $social_media->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('social_media');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $social_media->$key = $value;
      // }
      //  }
                  $social_media->update();
                    $ResponseMessage =  ($lang=='ar') ?  "social_media updated successfully" : "social_media updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$social_media);

                    return $check_success;

               }



                    public function delete_social_media(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['social_media_id' => 'required|exists:social_media,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $social_media_id =  $request->social_media_id;

                    $social_media = Social_media::select('social_media.*')->find($social_media_id);
                    $delete =  $social_media->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "social_media deleted successfully" : "social_media deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}