<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Table;

use Yajra\Datatables\Datatables;

class TableController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $tables = Table::paginate(10);
        return view('MAYDAN.tables.tables' , compact('tables'));

    }







   public function all_data()
    {


   $tables = Table::select('tables.*'





  )->get();
return Datatables::of($tables)->addColumn('action', function ($table) {
                return '
                <a href="/tables/'.$table->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.tables.table_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, []);
    $table = new Table ();

       
      $save = $table->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/tables/'.$table->id.'">table</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:tables,id',]);

    $table = Table::find($id);
    $next = Table::where('id','>',$id)->min('id');
    $previous = Table::where('id','<',$id)->max('id');
       return view('MAYDAN.tables.table_view')
        ->with('table',$table)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $table = Table::find($id); 

        
       $update =  $table->update();

       if($update) {
        \Session::flash('message', ' table was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $table = Table::find($id);
      $delete =  $table->delete();

                   if($delete) {
        \Session::flash('message', ' table was deleted successfully');
          return back();
       }

    }
}
