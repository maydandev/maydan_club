<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Representative;
use App\Models\MAYDAN\User;

use Yajra\Datatables\Datatables;

class RepresentativeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.representatives.representatives');

    }





   public function all_data()
    {


   $representatives = Representative::select('representatives.*'






                        ,'users.first_name as user_id'
  )->
leftjoin('users','users.id','=','representatives.user_id')->
get();
return Datatables::of($representatives)->addColumn('action', function ($representative) {
                return '
                <a href="/representatives/'.$representative->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $users = User::all();
       return view('MAYDAN.representatives.representative_add')->with('users' , $users)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'email' => 'required',

       'phone_number' => 'required',

       'position' => 'required',

       'name' => 'required',

       'user_id' => 'required',]);
    $representative = new Representative ();

         $representative->is_active = ($request->is_active) ? $request->is_active : 0;
  $representative->email = $request->email;
  $representative->phone_number = $request->phone_number;
  $representative->position = $request->position;
  $representative->name = $request->name;
  $representative->user_id = $request->user_id;

      $save = $representative->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/representatives/'.$representative->id.'">representative</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:representatives,id',]);

    $representative = Representative::find($id);
    $next = Representative::where('id','>',$id)->min('id');
    $previous = Representative::where('id','<',$id)->max('id');
$users = User::all();
       return view('MAYDAN.representatives.representative_view')
        ->with('representative',$representative)
        ->with('next',$next)
        ->with('previous',$previous)->with('users' , $users)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $representative = Representative::find($id); 

      $representative->is_active = ($request->is_active) ? $request->is_active : 0;
  $representative->email = $request->email;
  $representative->phone_number = $request->phone_number;
  $representative->position = $request->position;
  $representative->name = $request->name;
  $representative->user_id = $request->user_id;
    
       $update =  $representative->update();

       if($update) {
        \Session::flash('message', ' representative was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $representative = Representative::find($id);
      $delete =  $representative->delete();

                   if($delete) {
        \Session::flash('message', ' representative was deleted sucssesfily ');
          return back();
       }

    }
}
