<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Notification_type;

use Yajra\Datatables\Datatables;

class Notification_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.notification_types.notification_types');

    }





   public function all_data()
    {


   $notification_types = Notification_type::select('notification_types.*'





  )->get();
return Datatables::of($notification_types)->addColumn('action', function ($notification_type) {
                return '
                <a href="/notification_types/'.$notification_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.notification_types.notification_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'name' => 'required',]);
    $notification_type = new Notification_type ();

         $notification_type->name = $request->name;

      $save = $notification_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/notification_types/'.$notification_type->id.'">notification_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:notification_types,id',]);

    $notification_type = Notification_type::find($id);
    $next = Notification_type::where('id','>',$id)->min('id');
    $previous = Notification_type::where('id','<',$id)->max('id');
       return view('MAYDAN.notification_types.notification_type_view')
        ->with('notification_type',$notification_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $notification_type = Notification_type::find($id); 

      $notification_type->name = $request->name;
    
       $update =  $notification_type->update();

       if($update) {
        \Session::flash('message', ' notification_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $notification_type = Notification_type::find($id);
      $delete =  $notification_type->delete();

                   if($delete) {
        \Session::flash('message', ' notification_type was deleted sucssesfily ');
          return back();
       }

    }
}
