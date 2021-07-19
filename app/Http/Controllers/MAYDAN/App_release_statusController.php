<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\App_release_status;

use Yajra\Datatables\Datatables;

class App_release_statusController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.app_release_statuses.app_release_statuses');

    }





   public function all_data()
    {


   $app_release_statuses = App_release_status::select('app_release_statuses.*'





  )->get();
return Datatables::of($app_release_statuses)->addColumn('action', function ($app_release_status) {
                return '
                <a href="/app_release_statuses/'.$app_release_status->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.app_release_statuses.app_release_status_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'color' => 'required',

       'en_name' => 'required',

       'name' => 'required',]);
    $app_release_status = new App_release_status ();

         $app_release_status->color = $request->color;
  $app_release_status->en_name = $request->en_name;
  $app_release_status->name = $request->name;

      $save = $app_release_status->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/app_release_statuses/'.$app_release_status->id.'">app_release_status</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:app_release_statuses,id',]);

    $app_release_status = App_release_status::find($id);
    $next = App_release_status::where('id','>',$id)->min('id');
    $previous = App_release_status::where('id','<',$id)->max('id');
       return view('MAYDAN.app_release_statuses.app_release_status_view')
        ->with('app_release_status',$app_release_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $app_release_status = App_release_status::find($id); 

      $app_release_status->color = $request->color;
  $app_release_status->en_name = $request->en_name;
  $app_release_status->name = $request->name;
    
       $update =  $app_release_status->update();

       if($update) {
        \Session::flash('message', ' app_release_status was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $app_release_status = App_release_status::find($id);
      $delete =  $app_release_status->delete();

                   if($delete) {
        \Session::flash('message', ' app_release_status was deleted sucssesfily ');
          return back();
       }

    }
}
