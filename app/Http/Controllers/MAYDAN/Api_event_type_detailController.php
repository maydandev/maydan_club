<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Api_event_type_detail;

use Yajra\Datatables\Datatables;

class Api_event_type_detailController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.api_event_type_details.api_event_type_details');

    }





   public function all_data()
    {


   $api_event_type_details = Api_event_type_detail::select('api_event_type_details.*'





  )->get();
return Datatables::of($api_event_type_details)->addColumn('action', function ($api_event_type_detail) {
                return '
                <a href="/api_event_type_details/'.$api_event_type_detail->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.api_event_type_details.api_event_type_detail_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'event_type_id' => 'required',

       'event_type_detail' => 'required',]);
    $api_event_type_detail = new Api_event_type_detail ();

         $api_event_type_detail->event_type_id = $request->event_type_id;
  $api_event_type_detail->event_type_detail = $request->event_type_detail;

      $save = $api_event_type_detail->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/api_event_type_details/'.$api_event_type_detail->id.'">api_event_type_detail</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:api_event_type_details,id',]);

    $api_event_type_detail = Api_event_type_detail::find($id);
    $next = Api_event_type_detail::where('id','>',$id)->min('id');
    $previous = Api_event_type_detail::where('id','<',$id)->max('id');
       return view('MAYDAN.api_event_type_details.api_event_type_detail_view')
        ->with('api_event_type_detail',$api_event_type_detail)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $api_event_type_detail = Api_event_type_detail::find($id); 

      $api_event_type_detail->event_type_id = $request->event_type_id;
  $api_event_type_detail->event_type_detail = $request->event_type_detail;
    
       $update =  $api_event_type_detail->update();

       if($update) {
        \Session::flash('message', ' api_event_type_detail was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $api_event_type_detail = Api_event_type_detail::find($id);
      $delete =  $api_event_type_detail->delete();

                   if($delete) {
        \Session::flash('message', ' api_event_type_detail was deleted sucssesfily ');
          return back();
       }

    }
}
