<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Contact;
use App\Models\MAYDAN\Club;

use Yajra\Datatables\Datatables;

class ContactController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.contacts.contacts');

    }





   public function all_data()
    {


   $contacts = Contact::select('contacts.*'






                        ,'clubs.code as club_id'
  )->
leftjoin('clubs','clubs.id','=','contacts.club_id')->
get();
return Datatables::of($contacts)->addColumn('action', function ($contact) {
                return '
                <a href="/contacts/'.$contact->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $clubs = Club::all();
       return view('MAYDAN.contacts.contact_add')->with('clubs' , $clubs)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'working_hours_to' => 'required',

       'working_hours_from' => 'required',

       'working_days' => 'required',

       'email' => 'required',

       'phone_number' => 'required',

       'purpose' => 'required',

       'club_id' => 'required',

       'application_id' => 'required',]);
    $contact = new Contact ();

         $contact->is_active = ($request->is_active) ? $request->is_active : 0;
  $contact->working_hours_to = $request->working_hours_to;
  $contact->working_hours_from = $request->working_hours_from;
  $contact->working_days = $request->working_days;
  $contact->email = $request->email;
  $contact->phone_number = $request->phone_number;
  $contact->purpose = $request->purpose;
  $contact->club_id = $request->club_id;
  $contact->application_id = $request->application_id;

      $save = $contact->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/contacts/'.$contact->id.'">contact</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:contacts,id',]);

    $contact = Contact::find($id);
    $next = Contact::where('id','>',$id)->min('id');
    $previous = Contact::where('id','<',$id)->max('id');
$clubs = Club::all();
       return view('MAYDAN.contacts.contact_view')
        ->with('contact',$contact)
        ->with('next',$next)
        ->with('previous',$previous)->with('clubs' , $clubs)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $contact = Contact::find($id); 

      $contact->is_active = ($request->is_active) ? $request->is_active : 0;
  $contact->working_hours_to = $request->working_hours_to;
  $contact->working_hours_from = $request->working_hours_from;
  $contact->working_days = $request->working_days;
  $contact->email = $request->email;
  $contact->phone_number = $request->phone_number;
  $contact->purpose = $request->purpose;
  $contact->club_id = $request->club_id;
  $contact->application_id = $request->application_id;
    
       $update =  $contact->update();

       if($update) {
        \Session::flash('message', ' contact was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $contact = Contact::find($id);
      $delete =  $contact->delete();

                   if($delete) {
        \Session::flash('message', ' contact was deleted sucssesfily ');
          return back();
       }

    }
}
