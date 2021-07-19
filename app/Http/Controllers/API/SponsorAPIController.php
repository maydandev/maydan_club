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
use App\MAYDAN\Sponsor;
class SponsorAPIController extends APIController
{
    

             //////////////////////////////////sponsors/////////////////////////////////


                    public function sponsors(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $sponsors = Sponsor::select('sponsors.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "sponsors retrieved successfully" : "sponsors retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsors);
                    return $check_success;



                                    }


                    public function show_sponsor(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['sponsor_id' => 'required|exists:sponsors,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $sponsor_id =  $request->sponsor_id;
                    // check_failure
                    $sponsor = Sponsor::select('sponsors.*')->find($sponsor_id);

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor retrieved successfully" : "sponsor retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor);
                    return $check_success;



                                    }


                    public function add_sponsor(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'icon' => 'required',
                        'sponsor_type_id' => 'required|exists:sponsor_types,id',
            'application_id' => 'required',
                        'name' => 'required',
                        'club_id' => 'required|exists:clubs,id',
        ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $sponsor = new Sponsor ();
      $sponsor->is_active = ($request->is_active) ? $request->is_active : 0;
  $sponsor->icon = $request->icon;
  $sponsor->sponsor_type_id = $request->sponsor_type_id;
  $sponsor->application_id = $request->application_id;
  $sponsor->name = $request->name;
  $sponsor->club_id = $request->club_id;



                        $save = $sponsor->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor saved successfully" : "sponsor saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_sponsor(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $sponsor_id =  $request->sponsor_id;
                    


         $conditions = [ 'sponsor_id' => 'required|exists:sponsors,id'];
                  if(isset($request->sponsor_type_id)) {
                $conditions['sponsor_type_id'] = 'required|exists:sponsor_types,id';
                  }                  if(isset($request->club_id)) {
                $conditions['club_id'] = 'required|exists:clubs,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $sponsor = Sponsor::find($sponsor_id);

                    // update
      $sponsor->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->icon)) {
  $sponsor->icon = $request->icon;
                                   }  if(isset($request->sponsor_type_id)) {
  $sponsor->sponsor_type_id = $request->sponsor_type_id;
                                   }  if(isset($request->application_id)) {
  $sponsor->application_id = $request->application_id;
                                   }  if(isset($request->name)) {
  $sponsor->name = $request->name;
                                   }  if(isset($request->club_id)) {
  $sponsor->club_id = $request->club_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('sponsors');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $sponsor->$key = $value;
      // }
      //  }
                  $sponsor->update();
                    $ResponseMessage =  ($lang=='ar') ?  "sponsor updated successfully" : "sponsor updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$sponsor);

                    return $check_success;

               }



                    public function delete_sponsor(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['sponsor_id' => 'required|exists:sponsors,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $sponsor_id =  $request->sponsor_id;

                    $sponsor = Sponsor::select('sponsors.*')->find($sponsor_id);
                    $delete =  $sponsor->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "sponsor deleted successfully" : "sponsor deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}