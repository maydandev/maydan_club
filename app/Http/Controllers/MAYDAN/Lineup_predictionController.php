<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Lineup_prediction;

use Yajra\Datatables\Datatables;

class Lineup_predictionController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.lineup_predictions.lineup_predictions');

    }





   public function all_data()
    {


   $lineup_predictions = Lineup_prediction::select('lineup_predictions.*'





  )->get();
return Datatables::of($lineup_predictions)->addColumn('action', function ($lineup_prediction) {
                return '
                <a href="/lineup_predictions/'.$lineup_prediction->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.lineup_predictions.lineup_prediction_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'data' => 'required',

       'prediction_id' => 'required',

       'fixture_id' => 'required',]);
    $lineup_prediction = new Lineup_prediction ();

         $lineup_prediction->data = $request->data;
  $lineup_prediction->prediction_id = $request->prediction_id;
  $lineup_prediction->fixture_id = $request->fixture_id;

      $save = $lineup_prediction->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/lineup_predictions/'.$lineup_prediction->id.'">lineup_prediction</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:lineup_predictions,id',]);

    $lineup_prediction = Lineup_prediction::find($id);
    $next = Lineup_prediction::where('id','>',$id)->min('id');
    $previous = Lineup_prediction::where('id','<',$id)->max('id');
       return view('MAYDAN.lineup_predictions.lineup_prediction_view')
        ->with('lineup_prediction',$lineup_prediction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $lineup_prediction = Lineup_prediction::find($id); 

      $lineup_prediction->data = $request->data;
  $lineup_prediction->prediction_id = $request->prediction_id;
  $lineup_prediction->fixture_id = $request->fixture_id;
    
       $update =  $lineup_prediction->update();

       if($update) {
        \Session::flash('message', ' lineup_prediction was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $lineup_prediction = Lineup_prediction::find($id);
      $delete =  $lineup_prediction->delete();

                   if($delete) {
        \Session::flash('message', ' lineup_prediction was deleted sucssesfily ');
          return back();
       }

    }
}
