<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\First_goal_prediction;

use Yajra\Datatables\Datatables;

class First_goal_predictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.first_goal_predictions.first_goal_predictions');

    }





   public function all_data()
    {


   $first_goal_predictions = First_goal_prediction::select('first_goal_predictions.*'





  )->get();
return Datatables::of($first_goal_predictions)->addColumn('action', function ($first_goal_prediction) {
                return '
                <a href="/first_goal_predictions/'.$first_goal_prediction->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.first_goal_predictions.first_goal_prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'data' => 'required',

       'result_first_goal_player_name' => 'required',

       'result_first_goal_player_id' => 'required',

       'prediction_id' => 'required',

       'fixture_id' => 'required',]);
    $first_goal_prediction = new First_goal_prediction ();

         $first_goal_prediction->data = $request->data;
  $first_goal_prediction->result_first_goal_player_name = $request->result_first_goal_player_name;
  $first_goal_prediction->result_first_goal_player_id = $request->result_first_goal_player_id;
  $first_goal_prediction->prediction_id = $request->prediction_id;
  $first_goal_prediction->fixture_id = $request->fixture_id;

      $save = $first_goal_prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/first_goal_predictions/'.$first_goal_prediction->id.'">first_goal_prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:first_goal_predictions,id',]);

    $first_goal_prediction = First_goal_prediction::find($id);
    $next = First_goal_prediction::where('id','>',$id)->min('id');
    $previous = First_goal_prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.first_goal_predictions.first_goal_prediction_view')
        ->with('first_goal_prediction',$first_goal_prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $first_goal_prediction = First_goal_prediction::find($id); 

      $first_goal_prediction->data = $request->data;
  $first_goal_prediction->result_first_goal_player_name = $request->result_first_goal_player_name;
  $first_goal_prediction->result_first_goal_player_id = $request->result_first_goal_player_id;
  $first_goal_prediction->prediction_id = $request->prediction_id;
  $first_goal_prediction->fixture_id = $request->fixture_id;
    
       $update =  $first_goal_prediction->update();

       if($update) {
        \Session::flash('message', ' first_goal_prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $first_goal_prediction = First_goal_prediction::find($id);
      $delete =  $first_goal_prediction->delete();

                   if($delete) {
        \Session::flash('message', ' first_goal_prediction was deleted sucssesfily ');
          return back();
       }

    }
}
