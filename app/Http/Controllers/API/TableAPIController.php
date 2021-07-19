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
use App\MAYDAN\Table;
class TableAPIController extends APIController
{
    

             //////////////////////////////////tables/////////////////////////////////


                    public function tables(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $tables = Table::select('tables.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "tables retrieved successfully" : "tables retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$tables);
                    return $check_success;



                                    }


                    public function show_table(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['table_id' => 'required|exists:tables,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $table_id =  $request->table_id;
                    // check_failure
                    $table = Table::select('tables.*')->find($table_id);

                    $ResponseMessage =  ($lang=='ar') ?  "table retrieved successfully" : "table retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$table);
                    return $check_success;



                                    }


                    public function add_table(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                 ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $table = new Table ();
    


                        $save = $table->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "table saved successfully" : "table saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$table);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_table(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $table_id =  $request->table_id;
                    


         $conditions = [ 'table_id' => 'required|exists:tables,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $table = Table::find($table_id);

                    // update
    

      //  $columns = DB::getSchemaBuilder()->getColumnListing('tables');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $table->$key = $value;
      // }
      //  }
                  $table->update();
                    $ResponseMessage =  ($lang=='ar') ?  "table updated successfully" : "table updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$table);

                    return $check_success;

               }



                    public function delete_table(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['table_id' => 'required|exists:tables,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $table_id =  $request->table_id;

                    $table = Table::select('tables.*')->find($table_id);
                    $delete =  $table->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "table deleted successfully" : "table deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}