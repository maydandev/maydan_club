<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Quizze_question_option;

use Yajra\Datatables\Datatables;

class Quizze_question_optionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.quizze_question_options.quizze_question_options');

    }





   public function all_data()
    {


   $quizze_question_options = Quizze_question_option::select('quizze_question_options.*'





  )->get();
return Datatables::of($quizze_question_options)->addColumn('action', function ($quizze_question_option) {
                return '
                <a href="/quizze_question_options/'.$quizze_question_option->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.quizze_question_options.quizze_question_option_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'is_best_answer' => 'required',

       'quizze_option_id' => 'required',

       'quizze_question_id' => 'required',

       'quizze_id' => 'required',]);
    $quizze_question_option = new Quizze_question_option ();

         $quizze_question_option->is_best_answer = $request->is_best_answer;
  $quizze_question_option->quizze_option_id = $request->quizze_option_id;
  $quizze_question_option->quizze_question_id = $request->quizze_question_id;
  $quizze_question_option->quizze_id = $request->quizze_id;

      $save = $quizze_question_option->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/quizze_question_options/'.$quizze_question_option->id.'">quizze_question_option</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:quizze_question_options,id',]);

    $quizze_question_option = Quizze_question_option::find($id);
    $next = Quizze_question_option::where('id','>',$id)->min('id');
    $previous = Quizze_question_option::where('id','<',$id)->max('id');
       return view('MAYDAN.quizze_question_options.quizze_question_option_view')
        ->with('quizze_question_option',$quizze_question_option)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $quizze_question_option = Quizze_question_option::find($id); 

      $quizze_question_option->is_best_answer = $request->is_best_answer;
  $quizze_question_option->quizze_option_id = $request->quizze_option_id;
  $quizze_question_option->quizze_question_id = $request->quizze_question_id;
  $quizze_question_option->quizze_id = $request->quizze_id;
    
       $update =  $quizze_question_option->update();

       if($update) {
        \Session::flash('message', ' quizze_question_option was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $quizze_question_option = Quizze_question_option::find($id);
      $delete =  $quizze_question_option->delete();

                   if($delete) {
        \Session::flash('message', ' quizze_question_option was deleted sucssesfily ');
          return back();
       }

    }
}
