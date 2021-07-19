<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_order_detail;

use Yajra\Datatables\Datatables;

class Shop_order_detailController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.shop_order_details.shop_order_details');

    }





   public function all_data()
    {


   $shop_order_details = Shop_order_detail::select('shop_order_details.*'





  )->get();
return Datatables::of($shop_order_details)->addColumn('action', function ($shop_order_detail) {
                return '
                <a href="/shop_order_details/'.$shop_order_detail->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_order_details.shop_order_detail_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'products_quantity' => 'required',

       'products_tax' => 'required',

       'final_price' => 'required',

       'products_price' => 'required',

       'products_name' => 'required',

       'products_model' => 'required',

       'shop_product_id' => 'required',

       'shop_order_id' => 'required',]);
    $shop_order_detail = new Shop_order_detail ();

         $shop_order_detail->products_quantity = $request->products_quantity;
  $shop_order_detail->products_tax = $request->products_tax;
  $shop_order_detail->final_price = $request->final_price;
  $shop_order_detail->products_price = $request->products_price;
  $shop_order_detail->products_name = $request->products_name;
  $shop_order_detail->products_model = $request->products_model;
  $shop_order_detail->shop_product_id = $request->shop_product_id;
  $shop_order_detail->shop_order_id = $request->shop_order_id;

      $save = $shop_order_detail->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_order_details/'.$shop_order_detail->id.'">shop_order_detail</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_order_details,id',]);

    $shop_order_detail = Shop_order_detail::find($id);
    $next = Shop_order_detail::where('id','>',$id)->min('id');
    $previous = Shop_order_detail::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_order_details.shop_order_detail_view')
        ->with('shop_order_detail',$shop_order_detail)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_order_detail = Shop_order_detail::find($id); 

      $shop_order_detail->products_quantity = $request->products_quantity;
  $shop_order_detail->products_tax = $request->products_tax;
  $shop_order_detail->final_price = $request->final_price;
  $shop_order_detail->products_price = $request->products_price;
  $shop_order_detail->products_name = $request->products_name;
  $shop_order_detail->products_model = $request->products_model;
  $shop_order_detail->shop_product_id = $request->shop_product_id;
  $shop_order_detail->shop_order_id = $request->shop_order_id;
    
       $update =  $shop_order_detail->update();

       if($update) {
        \Session::flash('message', ' shop_order_detail was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_order_detail = Shop_order_detail::find($id);
      $delete =  $shop_order_detail->delete();

                   if($delete) {
        \Session::flash('message', ' shop_order_detail was deleted sucssesfily ');
          return back();
       }

    }
}
