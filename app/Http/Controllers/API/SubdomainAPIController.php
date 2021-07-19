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
use App\MAYDAN\Subdomain;
class SubdomainAPIController extends APIController
{
    

             //////////////////////////////////subdomains/////////////////////////////////


                    public function subdomains(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $subdomains = Subdomain::select('subdomains.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "subdomains retrieved successfully" : "subdomains retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$subdomains);
                    return $check_success;



                                    }


                    public function show_subdomain(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['subdomain_id' => 'required|exists:subdomains,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $subdomain_id =  $request->subdomain_id;
                    // check_failure
                    $subdomain = Subdomain::select('subdomains.*')->find($subdomain_id);

                    $ResponseMessage =  ($lang=='ar') ?  "subdomain retrieved successfully" : "subdomain retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$subdomain);
                    return $check_success;



                                    }


                    public function add_subdomain(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'application_id' => 'required',
                        'club_id' => 'required',
                        'user_id' => 'required',
                        'is_accepted' => 'required',
                        'is_verified' => 'required',
                        'is_active' => 'required',
                        'subdomain' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $subdomain = new Subdomain ();
      $subdomain->application_id = $request->application_id;
  $subdomain->club_id = $request->club_id;
  $subdomain->user_id = $request->user_id;
  $subdomain->is_accepted = $request->is_accepted;
  $subdomain->is_verified = ($request->is_verified) ? $request->is_verified : 0;
  $subdomain->is_active = ($request->is_active) ? $request->is_active : 0;
  $subdomain->subdomain = $request->subdomain;



                        $save = $subdomain->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "subdomain saved successfully" : "subdomain saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$subdomain);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_subdomain(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $subdomain_id =  $request->subdomain_id;
                    


         $conditions = [ 'subdomain_id' => 'required|exists:subdomains,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $subdomain = Subdomain::find($subdomain_id);

                    // update
      if(isset($request->application_id)) {
  $subdomain->application_id = $request->application_id;
                                   }  if(isset($request->club_id)) {
  $subdomain->club_id = $request->club_id;
                                   }  if(isset($request->user_id)) {
  $subdomain->user_id = $request->user_id;
                                   }  if(isset($request->is_accepted)) {
  $subdomain->is_accepted = $request->is_accepted;
                                   }  $subdomain->is_verified = ($request->is_verified) ? $request->is_verified : 0;
  $subdomain->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->subdomain)) {
  $subdomain->subdomain = $request->subdomain;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('subdomains');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $subdomain->$key = $value;
      // }
      //  }
                  $subdomain->update();
                    $ResponseMessage =  ($lang=='ar') ?  "subdomain updated successfully" : "subdomain updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$subdomain);

                    return $check_success;

               }



                    public function delete_subdomain(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['subdomain_id' => 'required|exists:subdomains,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $subdomain_id =  $request->subdomain_id;

                    $subdomain = Subdomain::select('subdomains.*')->find($subdomain_id);
                    $delete =  $subdomain->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "subdomain deleted successfully" : "subdomain deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}