<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Delivery_method;

use Yajra\Datatables\Datatables;

class Delivery_methodController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $delivery_methods = Delivery_method::paginate(10);
        return view('MAYDAN.delivery_methods.delivery_methods' , compact('delivery_methods'));

    }







   public function all_data()
    {


   $delivery_methods = Delivery_method::select('delivery_methods.*'





  )->get();
return Datatables::of($delivery_methods)->addColumn('action', function ($delivery_method) {
                return '
                <a href="/delivery_methods/'.$delivery_method->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.delivery_methods.delivery_method_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'application_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'country_id' => 'required',

       'city_id' => 'required',

       'delivers_min' => 'required',

       'delivers_max' => 'required',

       'delivers_unit_id' => 'required',

       'fees' => 'required',

       'min_amount' => 'required',]);
    $delivery_method = new Delivery_method ();

         $delivery_method->application_id = $request->application_id;
  $delivery_method->name = $request->name;
  $delivery_method->en_name = $request->en_name;
  $delivery_method->country_id = $request->country_id;
  $delivery_method->city_id = $request->city_id;
  $delivery_method->delivers_min = $request->delivers_min;
  $delivery_method->delivers_max = $request->delivers_max;
  $delivery_method->delivers_unit_id = $request->delivers_unit_id;
  $delivery_method->fees = $request->fees;
  $delivery_method->min_amount = $request->min_amount;
  $delivery_method->is_cod = ($request->is_cod) ? $request->is_cod : 0;

      $save = $delivery_method->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/delivery_methods/'.$delivery_method->id.'">delivery_method</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:delivery_methods,id',]);

    $delivery_method = Delivery_method::find($id);
    $next = Delivery_method::where('id','>',$id)->min('id');
    $previous = Delivery_method::where('id','<',$id)->max('id');
       return view('MAYDAN.delivery_methods.delivery_method_view')
        ->with('delivery_method',$delivery_method)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $delivery_method = Delivery_method::find($id); 

      $delivery_method->application_id = $request->application_id;
  $delivery_method->name = $request->name;
  $delivery_method->en_name = $request->en_name;
  $delivery_method->country_id = $request->country_id;
  $delivery_method->city_id = $request->city_id;
  $delivery_method->delivers_min = $request->delivers_min;
  $delivery_method->delivers_max = $request->delivers_max;
  $delivery_method->delivers_unit_id = $request->delivers_unit_id;
  $delivery_method->fees = $request->fees;
  $delivery_method->min_amount = $request->min_amount;
  $delivery_method->is_cod = ($request->is_cod) ? $request->is_cod : 0;
    
       $update =  $delivery_method->update();

       if($update) {
        \Session::flash('message', ' delivery_method was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $delivery_method = Delivery_method::find($id);
      $delete =  $delivery_method->delete();

                   if($delete) {
        \Session::flash('message', ' delivery_method was deleted successfully');
          return back();
       }

    }
}
