<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Module;

use Yajra\Datatables\Datatables;

class ModuleController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.modules.modules');

    }





   public function all_data()
    {


   $modules = Module::select('modules.*'





  )->get();
return Datatables::of($modules)->addColumn('action', function ($module) {
                return '
                <a href="/modules/'.$module->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.modules.module_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'sorting' => 'required',

       'app_type' => 'required',

       'user_type_ids' => 'required',

       'parent_id' => 'required',

       'icon' => 'required',

       'image' => 'required',

       'route' => 'required',

       'en_name' => 'required',

       'name' => 'required',]);
    $module = new Module ();

         $module->is_active = ($request->is_active) ? $request->is_active : 0;
  $module->sorting = $request->sorting;
  $module->app_type = $request->app_type;
  $module->user_type_ids = $request->user_type_ids;
  $module->parent_id = $request->parent_id;
  $module->icon = $request->icon;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/modules';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $module->image = '/'.$destinationPath."/".$fileName;

      }}
  $module->route = $request->route;
  $module->en_name = $request->en_name;
  $module->name = $request->name;

      $save = $module->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/modules/'.$module->id.'">module</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:modules,id',]);

    $module = Module::find($id);
    $next = Module::where('id','>',$id)->min('id');
    $previous = Module::where('id','<',$id)->max('id');
       return view('MAYDAN.modules.module_view')
        ->with('module',$module)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $module = Module::find($id); 

      $module->is_active = ($request->is_active) ? $request->is_active : 0;
  $module->sorting = $request->sorting;
  $module->app_type = $request->app_type;
  $module->user_type_ids = $request->user_type_ids;
  $module->parent_id = $request->parent_id;
  $module->icon = $request->icon;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/modules';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $module->image = '/'.$destinationPath."/".$fileName;

      }}
  $module->route = $request->route;
  $module->en_name = $request->en_name;
  $module->name = $request->name;
    
       $update =  $module->update();

       if($update) {
        \Session::flash('message', ' module was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $module = Module::find($id);
      $delete =  $module->delete();

                   if($delete) {
        \Session::flash('message', ' module was deleted sucssesfily ');
          return back();
       }

    }
}
