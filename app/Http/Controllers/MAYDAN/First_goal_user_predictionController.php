<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\First_goal_user_prediction;

use Yajra\Datatables\Datatables;

class First_goal_user_predictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.first_goal_user_predictions.first_goal_user_predictions');

    }





   public function all_data()
    {


   $first_goal_user_predictions = First_goal_user_prediction::select('first_goal_user_predictions.*'





  )->get();
return Datatables::of($first_goal_user_predictions)->addColumn('action', function ($first_goal_user_prediction) {
                return '
                <a href="/first_goal_user_predictions/'.$first_goal_user_prediction->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.first_goal_user_predictions.first_goal_user_prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'payler_name' => 'required',

       'payler_id' => 'required',

       'first_goal_prediction_id' => 'required',

       'user_id' => 'required',]);
    $first_goal_user_prediction = new First_goal_user_prediction ();

         $first_goal_user_prediction->payler_name = $request->payler_name;
  $first_goal_user_prediction->payler_id = $request->payler_id;
  $first_goal_user_prediction->first_goal_prediction_id = $request->first_goal_prediction_id;
  $first_goal_user_prediction->user_id = $request->user_id;

      $save = $first_goal_user_prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/first_goal_user_predictions/'.$first_goal_user_prediction->id.'">first_goal_user_prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:first_goal_user_predictions,id',]);

    $first_goal_user_prediction = First_goal_user_prediction::find($id);
    $next = First_goal_user_prediction::where('id','>',$id)->min('id');
    $previous = First_goal_user_prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.first_goal_user_predictions.first_goal_user_prediction_view')
        ->with('first_goal_user_prediction',$first_goal_user_prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $first_goal_user_prediction = First_goal_user_prediction::find($id); 

      $first_goal_user_prediction->payler_name = $request->payler_name;
  $first_goal_user_prediction->payler_id = $request->payler_id;
  $first_goal_user_prediction->first_goal_prediction_id = $request->first_goal_prediction_id;
  $first_goal_user_prediction->user_id = $request->user_id;
    
       $update =  $first_goal_user_prediction->update();

       if($update) {
        \Session::flash('message', ' first_goal_user_prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $first_goal_user_prediction = First_goal_user_prediction::find($id);
      $delete =  $first_goal_user_prediction->delete();

                   if($delete) {
        \Session::flash('message', ' first_goal_user_prediction was deleted sucssesfily ');
          return back();
       }

    }
}
