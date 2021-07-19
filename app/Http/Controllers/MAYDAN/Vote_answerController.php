<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Vote_answer;

use Yajra\Datatables\Datatables;

class Vote_answerController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.vote_answers.vote_answers');

    }





   public function all_data()
    {


   $vote_answers = Vote_answer::select('vote_answers.*'





  )->get();
return Datatables::of($vote_answers)->addColumn('action', function ($vote_answer) {
                return '
                <a href="/vote_answers/'.$vote_answer->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.vote_answers.vote_answer_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'vote_question_option_id' => 'required',

       'vote_question_id' => 'required',

       'vote_id' => 'required',

       'user_id' => 'required',]);
    $vote_answer = new Vote_answer ();

         $vote_answer->vote_question_option_id = $request->vote_question_option_id;
  $vote_answer->vote_question_id = $request->vote_question_id;
  $vote_answer->vote_id = $request->vote_id;
  $vote_answer->user_id = $request->user_id;

      $save = $vote_answer->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/vote_answers/'.$vote_answer->id.'">vote_answer</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vote_answers,id',]);

    $vote_answer = Vote_answer::find($id);
    $next = Vote_answer::where('id','>',$id)->min('id');
    $previous = Vote_answer::where('id','<',$id)->max('id');
       return view('MAYDAN.vote_answers.vote_answer_view')
        ->with('vote_answer',$vote_answer)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vote_answer = Vote_answer::find($id); 

      $vote_answer->vote_question_option_id = $request->vote_question_option_id;
  $vote_answer->vote_question_id = $request->vote_question_id;
  $vote_answer->vote_id = $request->vote_id;
  $vote_answer->user_id = $request->user_id;
    
       $update =  $vote_answer->update();

       if($update) {
        \Session::flash('message', ' vote_answer was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $vote_answer = Vote_answer::find($id);
      $delete =  $vote_answer->delete();

                   if($delete) {
        \Session::flash('message', ' vote_answer was deleted sucssesfily ');
          return back();
       }

    }
}
