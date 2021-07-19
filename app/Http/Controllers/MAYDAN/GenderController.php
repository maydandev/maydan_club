<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Gender;

use Yajra\Datatables\Datatables;

class GenderController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $genders = Gender::paginate(10);
        return view('MAYDAN.genders.genders' , compact('genders'));

    }







   public function all_data()
    {


   $genders = Gender::select('genders.*'





  )->get();
return Datatables::of($genders)->addColumn('action', function ($gender) {
                return '
                <a href="/genders/'.$gender->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.genders.gender_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'name' => 'required',

       'en_name' => 'required',

       'is_active_id' => 'required',]);
    $gender = new Gender ();

         $gender->name = $request->name;
  $gender->en_name = $request->en_name;
  $gender->is_active_id = $request->is_active_id;

      $save = $gender->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/genders/'.$gender->id.'">gender</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:genders,id',]);

    $gender = Gender::find($id);
    $next = Gender::where('id','>',$id)->min('id');
    $previous = Gender::where('id','<',$id)->max('id');
       return view('MAYDAN.genders.gender_view')
        ->with('gender',$gender)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $gender = Gender::find($id); 

      $gender->name = $request->name;
  $gender->en_name = $request->en_name;
  $gender->is_active_id = $request->is_active_id;
    
       $update =  $gender->update();

       if($update) {
        \Session::flash('message', ' gender was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $gender = Gender::find($id);
      $delete =  $gender->delete();

                   if($delete) {
        \Session::flash('message', ' gender was deleted successfully');
          return back();
       }

    }
}
