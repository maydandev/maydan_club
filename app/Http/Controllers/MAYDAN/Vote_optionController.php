<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Vote_option;

use Yajra\Datatables\Datatables;

class Vote_optionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.vote_options.vote_options');

    }





   public function all_data()
    {


   $vote_options = Vote_option::select('vote_options.*'





  )->get();
return Datatables::of($vote_options)->addColumn('action', function ($vote_option) {
                return '
                <a href="/vote_options/'.$vote_option->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.vote_options.vote_option_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'vote_option' => 'required',

       'vote_id' => 'required',]);
    $vote_option = new Vote_option ();

         $vote_option->vote_option = $request->vote_option;
  $vote_option->vote_id = $request->vote_id;

      $save = $vote_option->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/vote_options/'.$vote_option->id.'">vote_option</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vote_options,id',]);

    $vote_option = Vote_option::find($id);
    $next = Vote_option::where('id','>',$id)->min('id');
    $previous = Vote_option::where('id','<',$id)->max('id');
       return view('MAYDAN.vote_options.vote_option_view')
        ->with('vote_option',$vote_option)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vote_option = Vote_option::find($id); 

      $vote_option->vote_option = $request->vote_option;
  $vote_option->vote_id = $request->vote_id;
    
       $update =  $vote_option->update();

       if($update) {
        \Session::flash('message', ' vote_option was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $vote_option = Vote_option::find($id);
      $delete =  $vote_option->delete();

                   if($delete) {
        \Session::flash('message', ' vote_option was deleted sucssesfily ');
          return back();
       }

    }
}
