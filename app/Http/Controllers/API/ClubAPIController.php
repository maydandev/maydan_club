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
use App\MAYDAN\Club;
class ClubAPIController extends APIController
{
    

             //////////////////////////////////clubs/////////////////////////////////


                    public function clubs(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $clubs = Club::select('clubs.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "clubs retrieved successfully" : "clubs retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$clubs);
                    return $check_success;



                                    }


                    public function show_club(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['club_id' => 'required|exists:clubs,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $club_id =  $request->club_id;
                    // check_failure
                    $club = Club::select('clubs.*')->find($club_id);

                    $ResponseMessage =  ($lang=='ar') ?  "club retrieved successfully" : "club retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$club);
                    return $check_success;



                                    }


                    public function add_club(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'is_active' => 'required',
                        'join_date' => 'required',
                        'usage_data' => 'required',
                        'profiles' => 'required',
                        'representative_id' => 'required|exists:representatives,id',
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
            'logo' => 'required',
                        'name' => 'required',
                        'code' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $club = new Club ();
      $club->is_active = ($request->is_active) ? $request->is_active : 0;
  $club->join_date = $request->join_date;
  $club->usage_data = $request->usage_data;
  $club->profiles = $request->profiles;
  $club->representative_id = $request->representative_id;
  $club->city_id = $request->city_id;
  $club->country_id = $request->country_id;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/clubs';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $club->logo = '/'.$destinationPath."/".$fileName;

      }}
  $club->name = $request->name;
  $club->code = $request->code;



                        $save = $club->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "club saved successfully" : "club saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$club);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_club(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $club_id =  $request->club_id;
                    


         $conditions = [ 'club_id' => 'required|exists:clubs,id'];
                  if(isset($request->representative_id)) {
                $conditions['representative_id'] = 'required|exists:representatives,id';
                  }                  if(isset($request->city_id)) {
                $conditions['city_id'] = 'required|exists:cities,id';
                  }                  if(isset($request->country_id)) {
                $conditions['country_id'] = 'required|exists:countries,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $club = Club::find($club_id);

                    // update
      $club->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->join_date)) {
  $club->join_date = $request->join_date;
                                   }  if(isset($request->usage_data)) {
  $club->usage_data = $request->usage_data;
                                   }  if(isset($request->profiles)) {
  $club->profiles = $request->profiles;
                                   }  if(isset($request->representative_id)) {
  $club->representative_id = $request->representative_id;
                                   }  if(isset($request->city_id)) {
  $club->city_id = $request->city_id;
                                   }  if(isset($request->country_id)) {
  $club->country_id = $request->country_id;
                                   }  if(isset($request->logo)) {
  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/clubs';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $club->logo = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->name)) {
  $club->name = $request->name;
                                   }  if(isset($request->code)) {
  $club->code = $request->code;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('clubs');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $club->$key = $value;
      // }
      //  }
                  $club->update();
                    $ResponseMessage =  ($lang=='ar') ?  "club updated successfully" : "club updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$club);

                    return $check_success;

               }



                    public function delete_club(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['club_id' => 'required|exists:clubs,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $club_id =  $request->club_id;

                    $club = Club::select('clubs.*')->find($club_id);
                    $delete =  $club->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "club deleted successfully" : "club deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}