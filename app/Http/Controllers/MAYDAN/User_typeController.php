<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\User_type;

use Yajra\Datatables\Datatables;

class User_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.user_types.user_types');

    }





   public function all_data()
    {


   $user_types = User_type::select('user_types.*'





  )->get();
return Datatables::of($user_types)->addColumn('action', function ($user_type) {
                return '
                <a href="/user_types/'.$user_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.user_types.user_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'en_name' => 'required',

       'name' => 'required',]);
    $user_type = new User_type ();

         $user_type->en_name = $request->en_name;
  $user_type->name = $request->name;

      $save = $user_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/user_types/'.$user_type->id.'">user_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_types,id',]);

    $user_type = User_type::find($id);
    $next = User_type::where('id','>',$id)->min('id');
    $previous = User_type::where('id','<',$id)->max('id');
       return view('MAYDAN.user_types.user_type_view')
        ->with('user_type',$user_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_type = User_type::find($id); 

      $user_type->en_name = $request->en_name;
  $user_type->name = $request->name;
    
       $update =  $user_type->update();

       if($update) {
        \Session::flash('message', ' user_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $user_type = User_type::find($id);
      $delete =  $user_type->delete();

                   if($delete) {
        \Session::flash('message', ' user_type was deleted sucssesfily ');
          return back();
       }

    }
}
