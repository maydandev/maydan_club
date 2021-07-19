<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Feature;

use Yajra\Datatables\Datatables;

class FeatureController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.features.features');

    }





   public function all_data()
    {


   $features = Feature::select('features.*'





  )->get();
return Datatables::of($features)->addColumn('action', function ($feature) {
                return '
                <a href="/features/'.$feature->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.features.feature_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'sort' => 'required',

       'text_align' => 'required',

       'image' => 'required',

       'icon' => 'required',

       'text' => 'required',

       'title' => 'required',]);
    $feature = new Feature ();

         $feature->is_active = ($request->is_active) ? $request->is_active : 0;
  $feature->sort = $request->sort;
  $feature->text_align = $request->text_align;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/features';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $feature->image = '/'.$destinationPath."/".$fileName;

      }}
  $feature->icon = $request->icon;
  $feature->text = $request->text;
  $feature->title = $request->title;

      $save = $feature->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/features/'.$feature->id.'">feature</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:features,id',]);

    $feature = Feature::find($id);
    $next = Feature::where('id','>',$id)->min('id');
    $previous = Feature::where('id','<',$id)->max('id');
       return view('MAYDAN.features.feature_view')
        ->with('feature',$feature)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $feature = Feature::find($id); 

      $feature->is_active = ($request->is_active) ? $request->is_active : 0;
  $feature->sort = $request->sort;
  $feature->text_align = $request->text_align;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/features';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $feature->image = '/'.$destinationPath."/".$fileName;

      }}
  $feature->icon = $request->icon;
  $feature->text = $request->text;
  $feature->title = $request->title;
    
       $update =  $feature->update();

       if($update) {
        \Session::flash('message', ' feature was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $feature = Feature::find($id);
      $delete =  $feature->delete();

                   if($delete) {
        \Session::flash('message', ' feature was deleted sucssesfily ');
          return back();
       }

    }
}
