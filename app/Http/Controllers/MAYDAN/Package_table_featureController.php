<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Package_table_feature;

use Yajra\Datatables\Datatables;

class Package_table_featureController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.package_table_features.package_table_features');

    }





   public function all_data()
    {


   $package_table_features = Package_table_feature::select('package_table_features.*'





  )->get();
return Datatables::of($package_table_features)->addColumn('action', function ($package_table_feature) {
                return '
                <a href="/package_table_features/'.$package_table_feature->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.package_table_features.package_table_feature_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'is_available' => 'required',

       'package_table_category_id' => 'required',

       'package_id' => 'required',

       'name' => 'required',]);
    $package_table_feature = new Package_table_feature ();

         $package_table_feature->is_available = $request->is_available;
  $package_table_feature->package_table_category_id = $request->package_table_category_id;
  $package_table_feature->package_id = $request->package_id;
  $package_table_feature->name = $request->name;

      $save = $package_table_feature->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/package_table_features/'.$package_table_feature->id.'">package_table_feature</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:package_table_features,id',]);

    $package_table_feature = Package_table_feature::find($id);
    $next = Package_table_feature::where('id','>',$id)->min('id');
    $previous = Package_table_feature::where('id','<',$id)->max('id');
       return view('MAYDAN.package_table_features.package_table_feature_view')
        ->with('package_table_feature',$package_table_feature)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $package_table_feature = Package_table_feature::find($id); 

      $package_table_feature->is_available = $request->is_available;
  $package_table_feature->package_table_category_id = $request->package_table_category_id;
  $package_table_feature->package_id = $request->package_id;
  $package_table_feature->name = $request->name;
    
       $update =  $package_table_feature->update();

       if($update) {
        \Session::flash('message', ' package_table_feature was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $package_table_feature = Package_table_feature::find($id);
      $delete =  $package_table_feature->delete();

                   if($delete) {
        \Session::flash('message', ' package_table_feature was deleted sucssesfily ');
          return back();
       }

    }
}
