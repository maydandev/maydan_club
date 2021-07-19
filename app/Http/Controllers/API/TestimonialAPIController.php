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
use App\MAYDAN\Testimonial;
class TestimonialAPIController extends APIController
{
    

             //////////////////////////////////testimonials/////////////////////////////////


                    public function testimonials(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $testimonials = Testimonial::select('testimonials.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "testimonials retrieved successfully" : "testimonials retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$testimonials);
                    return $check_success;



                                    }


                    public function show_testimonial(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['testimonial_id' => 'required|exists:testimonials,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $testimonial_id =  $request->testimonial_id;
                    // check_failure
                    $testimonial = Testimonial::select('testimonials.*')->find($testimonial_id);

                    $ResponseMessage =  ($lang=='ar') ?  "testimonial retrieved successfully" : "testimonial retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$testimonial);
                    return $check_success;



                                    }


                    public function add_testimonial(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'sort' => 'required',
                        'is_active' => 'required',
                        'image' => 'required',
                        'text' => 'required',
                        'title' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $testimonial = new Testimonial ();
      $testimonial->sort = $request->sort;
  $testimonial->is_active = ($request->is_active) ? $request->is_active : 0;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/testimonials';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $testimonial->image = '/'.$destinationPath."/".$fileName;

      }}
  $testimonial->text = $request->text;
  $testimonial->title = $request->title;



                        $save = $testimonial->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "testimonial saved successfully" : "testimonial saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$testimonial);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_testimonial(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $testimonial_id =  $request->testimonial_id;
                    


         $conditions = [ 'testimonial_id' => 'required|exists:testimonials,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $testimonial = Testimonial::find($testimonial_id);

                    // update
      if(isset($request->sort)) {
  $testimonial->sort = $request->sort;
                                   }  $testimonial->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/testimonials';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $testimonial->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->text)) {
  $testimonial->text = $request->text;
                                   }  if(isset($request->title)) {
  $testimonial->title = $request->title;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('testimonials');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $testimonial->$key = $value;
      // }
      //  }
                  $testimonial->update();
                    $ResponseMessage =  ($lang=='ar') ?  "testimonial updated successfully" : "testimonial updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$testimonial);

                    return $check_success;

               }



                    public function delete_testimonial(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['testimonial_id' => 'required|exists:testimonials,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $testimonial_id =  $request->testimonial_id;

                    $testimonial = Testimonial::select('testimonials.*')->find($testimonial_id);
                    $delete =  $testimonial->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "testimonial deleted successfully" : "testimonial deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}