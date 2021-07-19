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
use App\MAYDAN\League_type;
class League_typeAPIController extends APIController
{
    

             //////////////////////////////////league_types/////////////////////////////////


                    public function league_types(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $league_types = League_type::select('league_types.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "league_types retrieved successfully" : "league_types retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_types);
                    return $check_success;



                                    }


                    public function show_league_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['league_type_id' => 'required|exists:league_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $league_type_id =  $request->league_type_id;
                    // check_failure
                    $league_type = League_type::select('league_types.*')->find($league_type_id);

                    $ResponseMessage =  ($lang=='ar') ?  "league_type retrieved successfully" : "league_type retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_type);
                    return $check_success;



                                    }


                    public function add_league_type(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'league_type' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $league_type = new League_type ();
      $league_type->league_type = $request->league_type;



                        $save = $league_type->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "league_type saved successfully" : "league_type saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_type);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_league_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $league_type_id =  $request->league_type_id;
                    


         $conditions = [ 'league_type_id' => 'required|exists:league_types,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $league_type = League_type::find($league_type_id);

                    // update
      if(isset($request->league_type)) {
  $league_type->league_type = $request->league_type;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('league_types');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $league_type->$key = $value;
      // }
      //  }
                  $league_type->update();
                    $ResponseMessage =  ($lang=='ar') ?  "league_type updated successfully" : "league_type updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$league_type);

                    return $check_success;

               }



                    public function delete_league_type(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['league_type_id' => 'required|exists:league_types,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $league_type_id =  $request->league_type_id;

                    $league_type = League_type::select('league_types.*')->find($league_type_id);
                    $delete =  $league_type->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "league_type deleted successfully" : "league_type deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}