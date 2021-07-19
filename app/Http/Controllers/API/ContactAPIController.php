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
use App\MAYDAN\Contact;
class ContactAPIController extends APIController
{
    

             //////////////////////////////////contacts/////////////////////////////////


                    public function contacts(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $contacts = Contact::select('contacts.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "contacts retrieved successfully" : "contacts retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$contacts);
                    return $check_success;



                                    }


                    public function show_contact(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['contact_id' => 'required|exists:contacts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $contact_id =  $request->contact_id;
                    // check_failure
                    $contact = Contact::select('contacts.*')->find($contact_id);

                    $ResponseMessage =  ($lang=='ar') ?  "contact retrieved successfully" : "contact retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$contact);
                    return $check_success;



                                    }


                    public function add_contact(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'working_hours_to' => 'required',
                        'working_hours_from' => 'required',
                        'working_days' => 'required',
                        'email' => 'required',
                        'phone_number' => 'required',
                        'purpose' => 'required',
                        'club_id' => 'required|exists:clubs,id',
            'application_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $contact = new Contact ();
      $contact->is_active = ($request->is_active) ? $request->is_active : 0;
  $contact->working_hours_to = $request->working_hours_to;
  $contact->working_hours_from = $request->working_hours_from;
  $contact->working_days = $request->working_days;
  $contact->email = $request->email;
  $contact->phone_number = $request->phone_number;
  $contact->purpose = $request->purpose;
  $contact->club_id = $request->club_id;
  $contact->application_id = $request->application_id;



                        $save = $contact->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "contact saved successfully" : "contact saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$contact);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_contact(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $contact_id =  $request->contact_id;
                    


         $conditions = [ 'contact_id' => 'required|exists:contacts,id'];
                  if(isset($request->club_id)) {
                $conditions['club_id'] = 'required|exists:clubs,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $contact = Contact::find($contact_id);

                    // update
      $contact->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->working_hours_to)) {
  $contact->working_hours_to = $request->working_hours_to;
                                   }  if(isset($request->working_hours_from)) {
  $contact->working_hours_from = $request->working_hours_from;
                                   }  if(isset($request->working_days)) {
  $contact->working_days = $request->working_days;
                                   }  if(isset($request->email)) {
  $contact->email = $request->email;
                                   }  if(isset($request->phone_number)) {
  $contact->phone_number = $request->phone_number;
                                   }  if(isset($request->purpose)) {
  $contact->purpose = $request->purpose;
                                   }  if(isset($request->club_id)) {
  $contact->club_id = $request->club_id;
                                   }  if(isset($request->application_id)) {
  $contact->application_id = $request->application_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('contacts');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $contact->$key = $value;
      // }
      //  }
                  $contact->update();
                    $ResponseMessage =  ($lang=='ar') ?  "contact updated successfully" : "contact updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$contact);

                    return $check_success;

               }



                    public function delete_contact(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['contact_id' => 'required|exists:contacts,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $contact_id =  $request->contact_id;

                    $contact = Contact::select('contacts.*')->find($contact_id);
                    $delete =  $contact->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "contact deleted successfully" : "contact deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}