<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Quizze_option;

use Yajra\Datatables\Datatables;

class Quizze_optionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.quizze_options.quizze_options');

    }





   public function all_data()
    {


   $quizze_options = Quizze_option::select('quizze_options.*'





  )->get();
return Datatables::of($quizze_options)->addColumn('action', function ($quizze_option) {
                return '
                <a href="/quizze_options/'.$quizze_option->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.quizze_options.quizze_option_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'quizze_option' => 'required',

       'quizze_id' => 'required',]);
    $quizze_option = new Quizze_option ();

         $quizze_option->quizze_option = $request->quizze_option;
  $quizze_option->quizze_id = $request->quizze_id;

      $save = $quizze_option->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/quizze_options/'.$quizze_option->id.'">quizze_option</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:quizze_options,id',]);

    $quizze_option = Quizze_option::find($id);
    $next = Quizze_option::where('id','>',$id)->min('id');
    $previous = Quizze_option::where('id','<',$id)->max('id');
       return view('MAYDAN.quizze_options.quizze_option_view')
        ->with('quizze_option',$quizze_option)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $quizze_option = Quizze_option::find($id); 

      $quizze_option->quizze_option = $request->quizze_option;
  $quizze_option->quizze_id = $request->quizze_id;
    
       $update =  $quizze_option->update();

       if($update) {
        \Session::flash('message', ' quizze_option was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $quizze_option = Quizze_option::find($id);
      $delete =  $quizze_option->delete();

                   if($delete) {
        \Session::flash('message', ' quizze_option was deleted sucssesfily ');
          return back();
       }

    }
}
