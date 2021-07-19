<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Package_table_category;

use Yajra\Datatables\Datatables;

class Package_table_categoryController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.package_table_categories.package_table_categories');

    }





   public function all_data()
    {


   $package_table_categories = Package_table_category::select('package_table_categories.*'





  )->get();
return Datatables::of($package_table_categories)->addColumn('action', function ($package_table_category) {
                return '
                <a href="/package_table_categories/'.$package_table_category->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.package_table_categories.package_table_category_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'sort' => 'required',

       'name' => 'required',]);
    $package_table_category = new Package_table_category ();

         $package_table_category->sort = $request->sort;
  $package_table_category->is_active = ($request->is_active) ? $request->is_active : 0;
  $package_table_category->name = $request->name;

      $save = $package_table_category->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/package_table_categories/'.$package_table_category->id.'">package_table_category</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:package_table_categories,id',]);

    $package_table_category = Package_table_category::find($id);
    $next = Package_table_category::where('id','>',$id)->min('id');
    $previous = Package_table_category::where('id','<',$id)->max('id');
       return view('MAYDAN.package_table_categories.package_table_category_view')
        ->with('package_table_category',$package_table_category)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $package_table_category = Package_table_category::find($id); 

      $package_table_category->sort = $request->sort;
  $package_table_category->is_active = ($request->is_active) ? $request->is_active : 0;
  $package_table_category->name = $request->name;
    
       $update =  $package_table_category->update();

       if($update) {
        \Session::flash('message', ' package_table_category was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $package_table_category = Package_table_category::find($id);
      $delete =  $package_table_category->delete();

                   if($delete) {
        \Session::flash('message', ' package_table_category was deleted sucssesfily ');
          return back();
       }

    }
}
