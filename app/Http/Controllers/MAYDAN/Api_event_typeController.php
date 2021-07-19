<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Api_event_type;

use Yajra\Datatables\Datatables;

class Api_event_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.api_event_types.api_event_types');

    }





   public function all_data()
    {


   $api_event_types = Api_event_type::select('api_event_types.*'





  )->get();
return Datatables::of($api_event_types)->addColumn('action', function ($api_event_type) {
                return '
                <a href="/api_event_types/'.$api_event_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.api_event_types.api_event_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'event_type' => 'required',]);
    $api_event_type = new Api_event_type ();

         $api_event_type->event_type = $request->event_type;

      $save = $api_event_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/api_event_types/'.$api_event_type->id.'">api_event_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:api_event_types,id',]);

    $api_event_type = Api_event_type::find($id);
    $next = Api_event_type::where('id','>',$id)->min('id');
    $previous = Api_event_type::where('id','<',$id)->max('id');
       return view('MAYDAN.api_event_types.api_event_type_view')
        ->with('api_event_type',$api_event_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $api_event_type = Api_event_type::find($id); 

      $api_event_type->event_type = $request->event_type;
    
       $update =  $api_event_type->update();

       if($update) {
        \Session::flash('message', ' api_event_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $api_event_type = Api_event_type::find($id);
      $delete =  $api_event_type->delete();

                   if($delete) {
        \Session::flash('message', ' api_event_type was deleted sucssesfily ');
          return back();
       }

    }
}
