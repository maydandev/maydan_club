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
use App\MAYDAN\City;
class CityAPIController extends APIController
{
    

             //////////////////////////////////cities/////////////////////////////////


                    public function cities(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $cities = City::select('cities.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "cities retrieved successfully" : "cities retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$cities);
                    return $check_success;



                                    }


                    public function show_city(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['city_id' => 'required|exists:cities,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $city_id =  $request->city_id;
                    // check_failure
                    $city = City::select('cities.*')->find($city_id);

                    $ResponseMessage =  ($lang=='ar') ?  "city retrieved successfully" : "city retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$city);
                    return $check_success;



                                    }


                    public function add_city(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'country_id' => 'required|exists:countries,id',
            'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $city = new City ();
      $city->country_id = $request->country_id;
  $city->en_name = $request->en_name;
  $city->name = $request->name;



                        $save = $city->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "city saved successfully" : "city saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$city);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_city(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $city_id =  $request->city_id;
                    


         $conditions = [ 'city_id' => 'required|exists:cities,id'];
                  if(isset($request->country_id)) {
                $conditions['country_id'] = 'required|exists:countries,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $city = City::find($city_id);

                    // update
      if(isset($request->country_id)) {
  $city->country_id = $request->country_id;
                                   }  if(isset($request->en_name)) {
  $city->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $city->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('cities');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $city->$key = $value;
      // }
      //  }
                  $city->update();
                    $ResponseMessage =  ($lang=='ar') ?  "city updated successfully" : "city updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$city);

                    return $check_success;

               }



                    public function delete_city(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['city_id' => 'required|exists:cities,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $city_id =  $request->city_id;

                    $city = City::select('cities.*')->find($city_id);
                    $delete =  $city->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "city deleted successfully" : "city deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}