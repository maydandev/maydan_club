<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Quizze_question;

use Yajra\Datatables\Datatables;

class Quizze_questionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.quizze_questions.quizze_questions');

    }





   public function all_data()
    {


   $quizze_questions = Quizze_question::select('quizze_questions.*'





  )->get();
return Datatables::of($quizze_questions)->addColumn('action', function ($quizze_question) {
                return '
                <a href="/quizze_questions/'.$quizze_question->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.quizze_questions.quizze_question_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'quizze_question_option_id' => 'required',

       'points' => 'required',

       'image' => 'required',

       'quizze_question' => 'required',

       'quizze_id' => 'required',]);
    $quizze_question = new Quizze_question ();

         $quizze_question->quizze_question_option_id = $request->quizze_question_option_id;
  $quizze_question->points = $request->points;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/quizze_questions';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $quizze_question->image = '/'.$destinationPath."/".$fileName;

      }}
  $quizze_question->quizze_question = $request->quizze_question;
  $quizze_question->quizze_id = $request->quizze_id;

      $save = $quizze_question->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/quizze_questions/'.$quizze_question->id.'">quizze_question</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:quizze_questions,id',]);

    $quizze_question = Quizze_question::find($id);
    $next = Quizze_question::where('id','>',$id)->min('id');
    $previous = Quizze_question::where('id','<',$id)->max('id');
       return view('MAYDAN.quizze_questions.quizze_question_view')
        ->with('quizze_question',$quizze_question)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $quizze_question = Quizze_question::find($id); 

      $quizze_question->quizze_question_option_id = $request->quizze_question_option_id;
  $quizze_question->points = $request->points;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/quizze_questions';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $quizze_question->image = '/'.$destinationPath."/".$fileName;

      }}
  $quizze_question->quizze_question = $request->quizze_question;
  $quizze_question->quizze_id = $request->quizze_id;
    
       $update =  $quizze_question->update();

       if($update) {
        \Session::flash('message', ' quizze_question was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $quizze_question = Quizze_question::find($id);
      $delete =  $quizze_question->delete();

                   if($delete) {
        \Session::flash('message', ' quizze_question was deleted sucssesfily ');
          return back();
       }

    }
}
