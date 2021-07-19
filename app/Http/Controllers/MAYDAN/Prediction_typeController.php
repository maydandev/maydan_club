<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Prediction_type;

use Yajra\Datatables\Datatables;

class Prediction_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.prediction_types.prediction_types');

    }





   public function all_data()
    {


   $prediction_types = Prediction_type::select('prediction_types.*'





  )->get();
return Datatables::of($prediction_types)->addColumn('action', function ($prediction_type) {
                return '
                <a href="/prediction_types/'.$prediction_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.prediction_types.prediction_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'color' => 'required',

       'en_name' => 'required',

       'name' => 'required',]);
    $prediction_type = new Prediction_type ();

         $prediction_type->color = $request->color;
  $prediction_type->en_name = $request->en_name;
  $prediction_type->name = $request->name;

      $save = $prediction_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/prediction_types/'.$prediction_type->id.'">prediction_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:prediction_types,id',]);

    $prediction_type = Prediction_type::find($id);
    $next = Prediction_type::where('id','>',$id)->min('id');
    $previous = Prediction_type::where('id','<',$id)->max('id');
       return view('MAYDAN.prediction_types.prediction_type_view')
        ->with('prediction_type',$prediction_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $prediction_type = Prediction_type::find($id); 

      $prediction_type->color = $request->color;
  $prediction_type->en_name = $request->en_name;
  $prediction_type->name = $request->name;
    
       $update =  $prediction_type->update();

       if($update) {
        \Session::flash('message', ' prediction_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $prediction_type = Prediction_type::find($id);
      $delete =  $prediction_type->delete();

                   if($delete) {
        \Session::flash('message', ' prediction_type was deleted sucssesfily ');
          return back();
       }

    }
}
