<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Vote_question;

use Yajra\Datatables\Datatables;

class Vote_questionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.vote_questions.vote_questions');

    }





   public function all_data()
    {


   $vote_questions = Vote_question::select('vote_questions.*'





  )->get();
return Datatables::of($vote_questions)->addColumn('action', function ($vote_question) {
                return '
                <a href="/vote_questions/'.$vote_question->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.vote_questions.vote_question_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'vote_question' => 'required',

       'vote_id' => 'required',]);
    $vote_question = new Vote_question ();

         $vote_question->vote_question = $request->vote_question;
  $vote_question->vote_id = $request->vote_id;

      $save = $vote_question->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/vote_questions/'.$vote_question->id.'">vote_question</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vote_questions,id',]);

    $vote_question = Vote_question::find($id);
    $next = Vote_question::where('id','>',$id)->min('id');
    $previous = Vote_question::where('id','<',$id)->max('id');
       return view('MAYDAN.vote_questions.vote_question_view')
        ->with('vote_question',$vote_question)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vote_question = Vote_question::find($id); 

      $vote_question->vote_question = $request->vote_question;
  $vote_question->vote_id = $request->vote_id;
    
       $update =  $vote_question->update();

       if($update) {
        \Session::flash('message', ' vote_question was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $vote_question = Vote_question::find($id);
      $delete =  $vote_question->delete();

                   if($delete) {
        \Session::flash('message', ' vote_question was deleted sucssesfily ');
          return back();
       }

    }
}
