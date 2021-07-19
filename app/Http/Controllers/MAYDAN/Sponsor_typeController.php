<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Sponsor_type;

use Yajra\Datatables\Datatables;

class Sponsor_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.sponsor_types.sponsor_types');

    }





   public function all_data()
    {


   $sponsor_types = Sponsor_type::select('sponsor_types.*'





  )->get();
return Datatables::of($sponsor_types)->addColumn('action', function ($sponsor_type) {
                return '
                <a href="/sponsor_types/'.$sponsor_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.sponsor_types.sponsor_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'en_name' => 'required',

       'name' => 'required',]);
    $sponsor_type = new Sponsor_type ();

         $sponsor_type->en_name = $request->en_name;
  $sponsor_type->name = $request->name;

      $save = $sponsor_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/sponsor_types/'.$sponsor_type->id.'">sponsor_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:sponsor_types,id',]);

    $sponsor_type = Sponsor_type::find($id);
    $next = Sponsor_type::where('id','>',$id)->min('id');
    $previous = Sponsor_type::where('id','<',$id)->max('id');
       return view('MAYDAN.sponsor_types.sponsor_type_view')
        ->with('sponsor_type',$sponsor_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $sponsor_type = Sponsor_type::find($id); 

      $sponsor_type->en_name = $request->en_name;
  $sponsor_type->name = $request->name;
    
       $update =  $sponsor_type->update();

       if($update) {
        \Session::flash('message', ' sponsor_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $sponsor_type = Sponsor_type::find($id);
      $delete =  $sponsor_type->delete();

                   if($delete) {
        \Session::flash('message', ' sponsor_type was deleted sucssesfily ');
          return back();
       }

    }
}
