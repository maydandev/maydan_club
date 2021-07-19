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
use App\MAYDAN\Shop_order_status;
class Shop_order_statusAPIController extends APIController
{
    

             //////////////////////////////////shop_order_statuses/////////////////////////////////


                    public function shop_order_statuses(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $shop_order_statuses = Shop_order_status::select('shop_order_statuses.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_statuses retrieved successfully" : "shop_order_statuses retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_statuses);
                    return $check_success;



                                    }


                    public function show_shop_order_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['shop_order_status_id' => 'required|exists:shop_order_statuses,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $shop_order_status_id =  $request->shop_order_status_id;
                    // check_failure
                    $shop_order_status = Shop_order_status::select('shop_order_statuses.*')->find($shop_order_status_id);

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_status retrieved successfully" : "shop_order_status retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_status);
                    return $check_success;



                                    }


                    public function add_shop_order_status(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'color' => 'required',
                        'en_name' => 'required',
                        'name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $shop_order_status = new Shop_order_status ();
      $shop_order_status->color = $request->color;
  $shop_order_status->en_name = $request->en_name;
  $shop_order_status->name = $request->name;



                        $save = $shop_order_status->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_status saved successfully" : "shop_order_status saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_status);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_shop_order_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $shop_order_status_id =  $request->shop_order_status_id;
                    


         $conditions = [ 'shop_order_status_id' => 'required|exists:shop_order_statuses,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $shop_order_status = Shop_order_status::find($shop_order_status_id);

                    // update
      if(isset($request->color)) {
  $shop_order_status->color = $request->color;
                                   }  if(isset($request->en_name)) {
  $shop_order_status->en_name = $request->en_name;
                                   }  if(isset($request->name)) {
  $shop_order_status->name = $request->name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('shop_order_statuses');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $shop_order_status->$key = $value;
      // }
      //  }
                  $shop_order_status->update();
                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_status updated successfully" : "shop_order_status updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$shop_order_status);

                    return $check_success;

               }



                    public function delete_shop_order_status(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['shop_order_status_id' => 'required|exists:shop_order_statuses,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $shop_order_status_id =  $request->shop_order_status_id;

                    $shop_order_status = Shop_order_status::select('shop_order_statuses.*')->find($shop_order_status_id);
                    $delete =  $shop_order_status->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "shop_order_status deleted successfully" : "shop_order_status deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}