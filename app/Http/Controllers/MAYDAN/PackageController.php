<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Package;

use Yajra\Datatables\Datatables;

class PackageController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.packages.packages');

    }





   public function all_data()
    {


   $packages = Package::select('packages.*'





  )->get();
return Datatables::of($packages)->addColumn('action', function ($package) {
                return '
                <a href="/packages/'.$package->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.packages.package_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'sort' => 'required',

       'is_recommend' => 'required',

       'cost' => 'required',

       'alias' => 'required',

       'title' => 'required',]);
    $package = new Package ();

         $package->sort = $request->sort;
  $package->is_active = ($request->is_active) ? $request->is_active : 0;
  $package->is_recommend = $request->is_recommend;
  $package->cost = $request->cost;
  $package->alias = $request->alias;
  $package->title = $request->title;

      $save = $package->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/packages/'.$package->id.'">package</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:packages,id',]);

    $package = Package::find($id);
    $next = Package::where('id','>',$id)->min('id');
    $previous = Package::where('id','<',$id)->max('id');
       return view('MAYDAN.packages.package_view')
        ->with('package',$package)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $package = Package::find($id); 

      $package->sort = $request->sort;
  $package->is_active = ($request->is_active) ? $request->is_active : 0;
  $package->is_recommend = $request->is_recommend;
  $package->cost = $request->cost;
  $package->alias = $request->alias;
  $package->title = $request->title;
    
       $update =  $package->update();

       if($update) {
        \Session::flash('message', ' package was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $package = Package::find($id);
      $delete =  $package->delete();

                   if($delete) {
        \Session::flash('message', ' package was deleted sucssesfily ');
          return back();
       }

    }
}
