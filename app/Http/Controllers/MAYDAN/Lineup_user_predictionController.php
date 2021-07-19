<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Lineup_user_prediction;

use Yajra\Datatables\Datatables;

class Lineup_user_predictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.lineup_user_predictions.lineup_user_predictions');

    }





   public function all_data()
    {


   $lineup_user_predictions = Lineup_user_prediction::select('lineup_user_predictions.*'





  )->get();
return Datatables::of($lineup_user_predictions)->addColumn('action', function ($lineup_user_prediction) {
                return '
                <a href="/lineup_user_predictions/'.$lineup_user_prediction->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.lineup_user_predictions.lineup_user_prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'user_id' => 'required',

       'lineup_prediction_id' => 'required',]);
    $lineup_user_prediction = new Lineup_user_prediction ();

         $lineup_user_prediction->user_id = $request->user_id;
  $lineup_user_prediction->lineup_prediction_id = $request->lineup_prediction_id;

      $save = $lineup_user_prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/lineup_user_predictions/'.$lineup_user_prediction->id.'">lineup_user_prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:lineup_user_predictions,id',]);

    $lineup_user_prediction = Lineup_user_prediction::find($id);
    $next = Lineup_user_prediction::where('id','>',$id)->min('id');
    $previous = Lineup_user_prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.lineup_user_predictions.lineup_user_prediction_view')
        ->with('lineup_user_prediction',$lineup_user_prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $lineup_user_prediction = Lineup_user_prediction::find($id); 

      $lineup_user_prediction->user_id = $request->user_id;
  $lineup_user_prediction->lineup_prediction_id = $request->lineup_prediction_id;
    
       $update =  $lineup_user_prediction->update();

       if($update) {
        \Session::flash('message', ' lineup_user_prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $lineup_user_prediction = Lineup_user_prediction::find($id);
      $delete =  $lineup_user_prediction->delete();

                   if($delete) {
        \Session::flash('message', ' lineup_user_prediction was deleted sucssesfily ');
          return back();
       }

    }
}
