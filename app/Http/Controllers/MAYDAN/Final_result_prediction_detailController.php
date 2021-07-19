<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Final_result_prediction_detail;

use Yajra\Datatables\Datatables;

class Final_result_prediction_detailController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.final_result_prediction_details.final_result_prediction_details');

    }





   public function all_data()
    {


   $final_result_prediction_details = Final_result_prediction_detail::select('final_result_prediction_details.*'





  )->get();
return Datatables::of($final_result_prediction_details)->addColumn('action', function ($final_result_prediction_detail) {
                return '
                <a href="/final_result_prediction_details/'.$final_result_prediction_detail->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.final_result_prediction_details.final_result_prediction_detail_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'away_team_result' => 'required',

       'home_team_result' => 'required',

       'user_id' => 'required',

       'final_result_prediction_id' => 'required',]);
    $final_result_prediction_detail = new Final_result_prediction_detail ();

         $final_result_prediction_detail->away_team_result = $request->away_team_result;
  $final_result_prediction_detail->home_team_result = $request->home_team_result;
  $final_result_prediction_detail->user_id = $request->user_id;
  $final_result_prediction_detail->final_result_prediction_id = $request->final_result_prediction_id;

      $save = $final_result_prediction_detail->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/final_result_prediction_details/'.$final_result_prediction_detail->id.'">final_result_prediction_detail</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:final_result_prediction_details,id',]);

    $final_result_prediction_detail = Final_result_prediction_detail::find($id);
    $next = Final_result_prediction_detail::where('id','>',$id)->min('id');
    $previous = Final_result_prediction_detail::where('id','<',$id)->max('id');
       return view('MAYDAN.final_result_prediction_details.final_result_prediction_detail_view')
        ->with('final_result_prediction_detail',$final_result_prediction_detail)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $final_result_prediction_detail = Final_result_prediction_detail::find($id); 

      $final_result_prediction_detail->away_team_result = $request->away_team_result;
  $final_result_prediction_detail->home_team_result = $request->home_team_result;
  $final_result_prediction_detail->user_id = $request->user_id;
  $final_result_prediction_detail->final_result_prediction_id = $request->final_result_prediction_id;
    
       $update =  $final_result_prediction_detail->update();

       if($update) {
        \Session::flash('message', ' final_result_prediction_detail was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $final_result_prediction_detail = Final_result_prediction_detail::find($id);
      $delete =  $final_result_prediction_detail->delete();

                   if($delete) {
        \Session::flash('message', ' final_result_prediction_detail was deleted sucssesfily ');
          return back();
       }

    }
}
