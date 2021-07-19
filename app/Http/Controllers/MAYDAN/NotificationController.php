<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Notification;

use Yajra\Datatables\Datatables;

class NotificationController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.notifications.notifications');

    }





   public function all_data()
    {


   $notifications = Notification::select('notifications.*'





  )->get();
return Datatables::of($notifications)->addColumn('action', function ($notification) {
                return '
                <a href="/notifications/'.$notification->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.notifications.notification_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'red_card' => 'required',

       'full_time' => 'required',

       'half_time' => 'required',

       'goals' => 'required',

       'kick_off' => 'required',

       'line_ups' => 'required',

       'application_id' => 'required',]);
    $notification = new Notification ();

         $notification->red_card = $request->red_card;
  $notification->full_time = $request->full_time;
  $notification->half_time = $request->half_time;
  $notification->goals = $request->goals;
  $notification->kick_off = $request->kick_off;
  $notification->line_ups = $request->line_ups;
  $notification->application_id = $request->application_id;

      $save = $notification->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/notifications/'.$notification->id.'">notification</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:notifications,id',]);

    $notification = Notification::find($id);
    $next = Notification::where('id','>',$id)->min('id');
    $previous = Notification::where('id','<',$id)->max('id');
       return view('MAYDAN.notifications.notification_view')
        ->with('notification',$notification)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $notification = Notification::find($id); 

      $notification->red_card = $request->red_card;
  $notification->full_time = $request->full_time;
  $notification->half_time = $request->half_time;
  $notification->goals = $request->goals;
  $notification->kick_off = $request->kick_off;
  $notification->line_ups = $request->line_ups;
  $notification->application_id = $request->application_id;
    
       $update =  $notification->update();

       if($update) {
        \Session::flash('message', ' notification was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $notification = Notification::find($id);
      $delete =  $notification->delete();

                   if($delete) {
        \Session::flash('message', ' notification was deleted sucssesfily ');
          return back();
       }

    }
}
