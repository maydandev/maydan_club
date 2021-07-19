<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Final_result_prediction;

use Yajra\Datatables\Datatables;

class Final_result_predictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.final_result_predictions.final_result_predictions');

    }





   public function all_data()
    {


   $final_result_predictions = Final_result_prediction::select('final_result_predictions.*'





  )->get();
return Datatables::of($final_result_predictions)->addColumn('action', function ($final_result_prediction) {
                return '
                <a href="/final_result_predictions/'.$final_result_prediction->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.final_result_predictions.final_result_prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'data' => 'required',

       'prediction_id' => 'required',

       'result_away_team' => 'required',

       'result_home_team' => 'required',

       'status' => 'required',

       'away_team_id' => 'required',

       'home_team_id' => 'required',

       'fixture_id' => 'required',]);
    $final_result_prediction = new Final_result_prediction ();

         $final_result_prediction->data = $request->data;
  $final_result_prediction->prediction_id = $request->prediction_id;
  $final_result_prediction->is_active = ($request->is_active) ? $request->is_active : 0;
  $final_result_prediction->result_away_team = $request->result_away_team;
  $final_result_prediction->result_home_team = $request->result_home_team;
  $final_result_prediction->status = $request->status;
  $final_result_prediction->away_team_id = $request->away_team_id;
  $final_result_prediction->home_team_id = $request->home_team_id;
  $final_result_prediction->fixture_id = $request->fixture_id;

      $save = $final_result_prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/final_result_predictions/'.$final_result_prediction->id.'">final_result_prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:final_result_predictions,id',]);

    $final_result_prediction = Final_result_prediction::find($id);
    $next = Final_result_prediction::where('id','>',$id)->min('id');
    $previous = Final_result_prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.final_result_predictions.final_result_prediction_view')
        ->with('final_result_prediction',$final_result_prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $final_result_prediction = Final_result_prediction::find($id); 

      $final_result_prediction->data = $request->data;
  $final_result_prediction->prediction_id = $request->prediction_id;
  $final_result_prediction->is_active = ($request->is_active) ? $request->is_active : 0;
  $final_result_prediction->result_away_team = $request->result_away_team;
  $final_result_prediction->result_home_team = $request->result_home_team;
  $final_result_prediction->status = $request->status;
  $final_result_prediction->away_team_id = $request->away_team_id;
  $final_result_prediction->home_team_id = $request->home_team_id;
  $final_result_prediction->fixture_id = $request->fixture_id;
    
       $update =  $final_result_prediction->update();

       if($update) {
        \Session::flash('message', ' final_result_prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $final_result_prediction = Final_result_prediction::find($id);
      $delete =  $final_result_prediction->delete();

                   if($delete) {
        \Session::flash('message', ' final_result_prediction was deleted sucssesfily ');
          return back();
       }

    }
}
