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
use App\MAYDAN\Client;
class ClientAPIController extends APIController
{
    

             //////////////////////////////////clients/////////////////////////////////


                    public function clients(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $clients = Client::select('clients.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "clients retrieved successfully" : "clients retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$clients);
                    return $check_success;



                                    }


                    public function show_client(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['client_id' => 'required|exists:clients,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $client_id =  $request->client_id;
                    // check_failure
                    $client = Client::select('clients.*')->find($client_id);

                    $ResponseMessage =  ($lang=='ar') ?  "client retrieved successfully" : "client retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$client);
                    return $check_success;



                                    }


                    public function add_client(Request $request)
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
                        'country' => 'required',
                        'team_name' => 'required',
                        'icon' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $client = new Client ();
      $client->sort = $request->sort;
  $client->is_active = ($request->is_active) ? $request->is_active : 0;
  $client->country = $request->country;
  $client->team_name = $request->team_name;
  $client->icon = $request->icon;



                        $save = $client->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "client saved successfully" : "client saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$client);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_client(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $client_id =  $request->client_id;
                    


         $conditions = [ 'client_id' => 'required|exists:clients,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $client = Client::find($client_id);

                    // update
      if(isset($request->sort)) {
  $client->sort = $request->sort;
                                   }  $client->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->country)) {
  $client->country = $request->country;
                                   }  if(isset($request->team_name)) {
  $client->team_name = $request->team_name;
                                   }  if(isset($request->icon)) {
  $client->icon = $request->icon;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('clients');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $client->$key = $value;
      // }
      //  }
                  $client->update();
                    $ResponseMessage =  ($lang=='ar') ?  "client updated successfully" : "client updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$client);

                    return $check_success;

               }



                    public function delete_client(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['client_id' => 'required|exists:clients,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $client_id =  $request->client_id;

                    $client = Client::select('clients.*')->find($client_id);
                    $delete =  $client->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "client deleted successfully" : "client deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}