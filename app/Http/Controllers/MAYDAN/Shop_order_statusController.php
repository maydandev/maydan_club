<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_order_status;

use Yajra\Datatables\Datatables;

class Shop_order_statusController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.shop_order_statuses.shop_order_statuses');

    }





   public function all_data()
    {


   $shop_order_statuses = Shop_order_status::select('shop_order_statuses.*'





  )->get();
return Datatables::of($shop_order_statuses)->addColumn('action', function ($shop_order_status) {
                return '
                <a href="/shop_order_statuses/'.$shop_order_status->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_order_statuses.shop_order_status_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'color' => 'required',

       'en_name' => 'required',

       'name' => 'required',]);
    $shop_order_status = new Shop_order_status ();

         $shop_order_status->color = $request->color;
  $shop_order_status->en_name = $request->en_name;
  $shop_order_status->name = $request->name;

      $save = $shop_order_status->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_order_statuses/'.$shop_order_status->id.'">shop_order_status</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_order_statuses,id',]);

    $shop_order_status = Shop_order_status::find($id);
    $next = Shop_order_status::where('id','>',$id)->min('id');
    $previous = Shop_order_status::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_order_statuses.shop_order_status_view')
        ->with('shop_order_status',$shop_order_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_order_status = Shop_order_status::find($id); 

      $shop_order_status->color = $request->color;
  $shop_order_status->en_name = $request->en_name;
  $shop_order_status->name = $request->name;
    
       $update =  $shop_order_status->update();

       if($update) {
        \Session::flash('message', ' shop_order_status was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_order_status = Shop_order_status::find($id);
      $delete =  $shop_order_status->delete();

                   if($delete) {
        \Session::flash('message', ' shop_order_status was deleted sucssesfily ');
          return back();
       }

    }
}
