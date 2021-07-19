<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Quizze_answer;

use Yajra\Datatables\Datatables;

class Quizze_answerController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.quizze_answers.quizze_answers');

    }





   public function all_data()
    {


   $quizze_answers = Quizze_answer::select('quizze_answers.*'





  )->get();
return Datatables::of($quizze_answers)->addColumn('action', function ($quizze_answer) {
                return '
                <a href="/quizze_answers/'.$quizze_answer->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.quizze_answers.quizze_answer_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'result_points' => 'required',

       'quizze_question_option_id' => 'required',

       'quizze_question_id' => 'required',

       'quizze_id' => 'required',

       'user_id' => 'required',]);
    $quizze_answer = new Quizze_answer ();

         $quizze_answer->result_points = $request->result_points;
  $quizze_answer->quizze_question_option_id = $request->quizze_question_option_id;
  $quizze_answer->quizze_question_id = $request->quizze_question_id;
  $quizze_answer->quizze_id = $request->quizze_id;
  $quizze_answer->user_id = $request->user_id;

      $save = $quizze_answer->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/quizze_answers/'.$quizze_answer->id.'">quizze_answer</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:quizze_answers,id',]);

    $quizze_answer = Quizze_answer::find($id);
    $next = Quizze_answer::where('id','>',$id)->min('id');
    $previous = Quizze_answer::where('id','<',$id)->max('id');
       return view('MAYDAN.quizze_answers.quizze_answer_view')
        ->with('quizze_answer',$quizze_answer)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $quizze_answer = Quizze_answer::find($id); 

      $quizze_answer->result_points = $request->result_points;
  $quizze_answer->quizze_question_option_id = $request->quizze_question_option_id;
  $quizze_answer->quizze_question_id = $request->quizze_question_id;
  $quizze_answer->quizze_id = $request->quizze_id;
  $quizze_answer->user_id = $request->user_id;
    
       $update =  $quizze_answer->update();

       if($update) {
        \Session::flash('message', ' quizze_answer was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $quizze_answer = Quizze_answer::find($id);
      $delete =  $quizze_answer->delete();

                   if($delete) {
        \Session::flash('message', ' quizze_answer was deleted sucssesfily ');
          return back();
       }

    }
}
