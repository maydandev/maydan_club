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
use App\MAYDAN\Country;
class CountryAPIController extends APIController
{
    

             //////////////////////////////////countries/////////////////////////////////


                    public function countries(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $countries = Country::select('countries.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "countries retrieved successfully" : "countries retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$countries);
                    return $check_success;



                                    }


                    public function show_country(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['country_id' => 'required|exists:countries,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $country_id =  $request->country_id;
                    // check_failure
                    $country = Country::select('countries.*')->find($country_id);

                    $ResponseMessage =  ($lang=='ar') ?  "country retrieved successfully" : "country retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$country);
                    return $check_success;



                                    }


                    public function add_country(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'flag' => 'required',
                        'code' => 'required',
                        'country' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $country = new Country ();
    
  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/countries';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $country->flag = '/'.$destinationPath."/".$fileName;

      }}
  $country->code = $request->code;
  $country->country = $request->country;



                        $save = $country->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "country saved successfully" : "country saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$country);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_country(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $country_id =  $request->country_id;
                    


         $conditions = [ 'country_id' => 'required|exists:countries,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $country = Country::find($country_id);

                    // update
      if(isset($request->flag)) {
  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/countries';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $country->flag = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->code)) {
  $country->code = $request->code;
                                   }  if(isset($request->country)) {
  $country->country = $request->country;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('countries');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $country->$key = $value;
      // }
      //  }
                  $country->update();
                    $ResponseMessage =  ($lang=='ar') ?  "country updated successfully" : "country updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$country);

                    return $check_success;

               }



                    public function delete_country(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['country_id' => 'required|exists:countries,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $country_id =  $request->country_id;

                    $country = Country::select('countries.*')->find($country_id);
                    $delete =  $country->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "country deleted successfully" : "country deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}