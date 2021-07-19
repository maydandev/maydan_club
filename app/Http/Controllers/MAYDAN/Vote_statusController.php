<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Vote_status;

use Yajra\Datatables\Datatables;

class Vote_statusController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.vote_statuses.vote_statuses');

    }





   public function all_data()
    {


   $vote_statuses = Vote_status::select('vote_statuses.*'





  )->get();
return Datatables::of($vote_statuses)->addColumn('action', function ($vote_status) {
                return '
                <a href="/vote_statuses/'.$vote_status->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.vote_statuses.vote_status_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'color' => 'required',

       'en_name' => 'required',

       'name' => 'required',]);
    $vote_status = new Vote_status ();

         $vote_status->color = $request->color;
  $vote_status->en_name = $request->en_name;
  $vote_status->name = $request->name;

      $save = $vote_status->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/vote_statuses/'.$vote_status->id.'">vote_status</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vote_statuses,id',]);

    $vote_status = Vote_status::find($id);
    $next = Vote_status::where('id','>',$id)->min('id');
    $previous = Vote_status::where('id','<',$id)->max('id');
       return view('MAYDAN.vote_statuses.vote_status_view')
        ->with('vote_status',$vote_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vote_status = Vote_status::find($id); 

      $vote_status->color = $request->color;
  $vote_status->en_name = $request->en_name;
  $vote_status->name = $request->name;
    
       $update =  $vote_status->update();

       if($update) {
        \Session::flash('message', ' vote_status was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $vote_status = Vote_status::find($id);
      $delete =  $vote_status->delete();

                   if($delete) {
        \Session::flash('message', ' vote_status was deleted sucssesfily ');
          return back();
       }

    }
}
