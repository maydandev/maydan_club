<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\League_type;

use Yajra\Datatables\Datatables;

class League_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.league_types.league_types');

    }





   public function all_data()
    {


   $league_types = League_type::select('league_types.*'





  )->get();
return Datatables::of($league_types)->addColumn('action', function ($league_type) {
                return '
                <a href="/league_types/'.$league_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.league_types.league_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'league_type' => 'required',]);
    $league_type = new League_type ();

         $league_type->league_type = $request->league_type;

      $save = $league_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/league_types/'.$league_type->id.'">league_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:league_types,id',]);

    $league_type = League_type::find($id);
    $next = League_type::where('id','>',$id)->min('id');
    $previous = League_type::where('id','<',$id)->max('id');
       return view('MAYDAN.league_types.league_type_view')
        ->with('league_type',$league_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $league_type = League_type::find($id); 

      $league_type->league_type = $request->league_type;
    
       $update =  $league_type->update();

       if($update) {
        \Session::flash('message', ' league_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $league_type = League_type::find($id);
      $delete =  $league_type->delete();

                   if($delete) {
        \Session::flash('message', ' league_type was deleted sucssesfily ');
          return back();
       }

    }
}
