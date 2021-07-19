<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Final_result_user_prediction;

use Yajra\Datatables\Datatables;

class Final_result_user_predictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.final_result_user_predictions.final_result_user_predictions');

    }





   public function all_data()
    {


   $final_result_user_predictions = Final_result_user_prediction::select('final_result_user_predictions.*'





  )->get();
return Datatables::of($final_result_user_predictions)->addColumn('action', function ($final_result_user_prediction) {
                return '
                <a href="/final_result_user_predictions/'.$final_result_user_prediction->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.final_result_user_predictions.final_result_user_prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'away_score' => 'required',

       'home_score' => 'required',

       'final_result_prediction_id' => 'required',

       'user_id' => 'required',]);
    $final_result_user_prediction = new Final_result_user_prediction ();

         $final_result_user_prediction->away_score = $request->away_score;
  $final_result_user_prediction->home_score = $request->home_score;
  $final_result_user_prediction->final_result_prediction_id = $request->final_result_prediction_id;
  $final_result_user_prediction->user_id = $request->user_id;

      $save = $final_result_user_prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/final_result_user_predictions/'.$final_result_user_prediction->id.'">final_result_user_prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:final_result_user_predictions,id',]);

    $final_result_user_prediction = Final_result_user_prediction::find($id);
    $next = Final_result_user_prediction::where('id','>',$id)->min('id');
    $previous = Final_result_user_prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.final_result_user_predictions.final_result_user_prediction_view')
        ->with('final_result_user_prediction',$final_result_user_prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $final_result_user_prediction = Final_result_user_prediction::find($id); 

      $final_result_user_prediction->away_score = $request->away_score;
  $final_result_user_prediction->home_score = $request->home_score;
  $final_result_user_prediction->final_result_prediction_id = $request->final_result_prediction_id;
  $final_result_user_prediction->user_id = $request->user_id;
    
       $update =  $final_result_user_prediction->update();

       if($update) {
        \Session::flash('message', ' final_result_user_prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $final_result_user_prediction = Final_result_user_prediction::find($id);
      $delete =  $final_result_user_prediction->delete();

                   if($delete) {
        \Session::flash('message', ' final_result_user_prediction was deleted sucssesfily ');
          return back();
       }

    }
}
