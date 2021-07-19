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
use App\MAYDAN\Ticket;
class TicketAPIController extends APIController
{
    

             //////////////////////////////////tickets/////////////////////////////////


                    public function tickets(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $tickets = Ticket::select('tickets.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "tickets retrieved successfully" : "tickets retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$tickets);
                    return $check_success;



                                    }


                    public function show_ticket(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['ticket_id' => 'required|exists:tickets,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $ticket_id =  $request->ticket_id;
                    // check_failure
                    $ticket = Ticket::select('tickets.*')->find($ticket_id);

                    $ResponseMessage =  ($lang=='ar') ?  "ticket retrieved successfully" : "ticket retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$ticket);
                    return $check_success;



                                    }


                    public function add_ticket(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'message' => 'required',
                        'url' => 'required',
                        'fixture_id' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $ticket = new Ticket ();
      $ticket->message = $request->message;
  $ticket->url = $request->url;
  $ticket->fixture_id = $request->fixture_id;



                        $save = $ticket->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "ticket saved successfully" : "ticket saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$ticket);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_ticket(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $ticket_id =  $request->ticket_id;
                    


         $conditions = [ 'ticket_id' => 'required|exists:tickets,id'];
        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $ticket = Ticket::find($ticket_id);

                    // update
      if(isset($request->message)) {
  $ticket->message = $request->message;
                                   }  if(isset($request->url)) {
  $ticket->url = $request->url;
                                   }  if(isset($request->fixture_id)) {
  $ticket->fixture_id = $request->fixture_id;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('tickets');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $ticket->$key = $value;
      // }
      //  }
                  $ticket->update();
                    $ResponseMessage =  ($lang=='ar') ?  "ticket updated successfully" : "ticket updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$ticket);

                    return $check_success;

               }



                    public function delete_ticket(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['ticket_id' => 'required|exists:tickets,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $ticket_id =  $request->ticket_id;

                    $ticket = Ticket::select('tickets.*')->find($ticket_id);
                    $delete =  $ticket->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "ticket deleted successfully" : "ticket deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}