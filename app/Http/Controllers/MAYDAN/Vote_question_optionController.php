<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Vote_question_option;

use Yajra\Datatables\Datatables;

class Vote_question_optionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.vote_question_options.vote_question_options');

    }





   public function all_data()
    {


   $vote_question_options = Vote_question_option::select('vote_question_options.*'





  )->get();
return Datatables::of($vote_question_options)->addColumn('action', function ($vote_question_option) {
                return '
                <a href="/vote_question_options/'.$vote_question_option->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.vote_question_options.vote_question_option_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'percentage' => 'required',

       'vote_option_id' => 'required',

       'vote_question_id' => 'required',

       'vote_id' => 'required',]);
    $vote_question_option = new Vote_question_option ();

         $vote_question_option->percentage = $request->percentage;
  $vote_question_option->vote_option_id = $request->vote_option_id;
  $vote_question_option->vote_question_id = $request->vote_question_id;
  $vote_question_option->vote_id = $request->vote_id;

      $save = $vote_question_option->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/vote_question_options/'.$vote_question_option->id.'">vote_question_option</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vote_question_options,id',]);

    $vote_question_option = Vote_question_option::find($id);
    $next = Vote_question_option::where('id','>',$id)->min('id');
    $previous = Vote_question_option::where('id','<',$id)->max('id');
       return view('MAYDAN.vote_question_options.vote_question_option_view')
        ->with('vote_question_option',$vote_question_option)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vote_question_option = Vote_question_option::find($id); 

      $vote_question_option->percentage = $request->percentage;
  $vote_question_option->vote_option_id = $request->vote_option_id;
  $vote_question_option->vote_question_id = $request->vote_question_id;
  $vote_question_option->vote_id = $request->vote_id;
    
       $update =  $vote_question_option->update();

       if($update) {
        \Session::flash('message', ' vote_question_option was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $vote_question_option = Vote_question_option::find($id);
      $delete =  $vote_question_option->delete();

                   if($delete) {
        \Session::flash('message', ' vote_question_option was deleted sucssesfily ');
          return back();
       }

    }
}
