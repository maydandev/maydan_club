<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Ticket;

use Yajra\Datatables\Datatables;

class TicketController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $tickets = Ticket::paginate(10);
        return view('MAYDAN.tickets.tickets' , compact('tickets'));

    }







   public function all_data()
    {


   $tickets = Ticket::select('tickets.*'





  )->get();
return Datatables::of($tickets)->addColumn('action', function ($ticket) {
                return '
                <a href="/tickets/'.$ticket->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.tickets.ticket_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'fixture_id' => 'required',

       'url' => 'required',

       'message' => 'required',]);
    $ticket = new Ticket ();

         $ticket->fixture_id = $request->fixture_id;
  $ticket->url = $request->url;
  $ticket->message = $request->message;

      $save = $ticket->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/tickets/'.$ticket->id.'">ticket</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:tickets,id',]);

    $ticket = Ticket::find($id);
    $next = Ticket::where('id','>',$id)->min('id');
    $previous = Ticket::where('id','<',$id)->max('id');
       return view('MAYDAN.tickets.ticket_view')
        ->with('ticket',$ticket)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $ticket = Ticket::find($id); 

      $ticket->fixture_id = $request->fixture_id;
  $ticket->url = $request->url;
  $ticket->message = $request->message;
    
       $update =  $ticket->update();

       if($update) {
        \Session::flash('message', ' ticket was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $ticket = Ticket::find($id);
      $delete =  $ticket->delete();

                   if($delete) {
        \Session::flash('message', ' ticket was deleted successfully');
          return back();
       }

    }
}
