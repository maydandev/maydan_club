<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Package_feature;

use Yajra\Datatables\Datatables;

class Package_featureController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.package_features.package_features');

    }





   public function all_data()
    {


   $package_features = Package_feature::select('package_features.*'





  )->get();
return Datatables::of($package_features)->addColumn('action', function ($package_feature) {
                return '
                <a href="/package_features/'.$package_feature->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.package_features.package_feature_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'feature' => 'required',

       'package_id' => 'required',]);
    $package_feature = new Package_feature ();

         $package_feature->feature = $request->feature;
  $package_feature->package_id = $request->package_id;

      $save = $package_feature->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/package_features/'.$package_feature->id.'">package_feature</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:package_features,id',]);

    $package_feature = Package_feature::find($id);
    $next = Package_feature::where('id','>',$id)->min('id');
    $previous = Package_feature::where('id','<',$id)->max('id');
       return view('MAYDAN.package_features.package_feature_view')
        ->with('package_feature',$package_feature)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $package_feature = Package_feature::find($id); 

      $package_feature->feature = $request->feature;
  $package_feature->package_id = $request->package_id;
    
       $update =  $package_feature->update();

       if($update) {
        \Session::flash('message', ' package_feature was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $package_feature = Package_feature::find($id);
      $delete =  $package_feature->delete();

                   if($delete) {
        \Session::flash('message', ' package_feature was deleted sucssesfily ');
          return back();
       }

    }
}
