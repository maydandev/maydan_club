<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_order;

use Yajra\Datatables\Datatables;

class Shop_orderController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $shop_orders = Shop_order::paginate(10);
        return view('MAYDAN.shop_orders.shop_orders' , compact('shop_orders'));

    }







   public function all_data()
    {


   $shop_orders = Shop_order::select('shop_orders.*'





  )->get();
return Datatables::of($shop_orders)->addColumn('action', function ($shop_order) {
                return '
                <a href="/shop_orders/'.$shop_order->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_orders.shop_order_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'user_id' => 'required',

       'application_id' => 'required',

       'shop_order_status_id' => 'required',

       'last_modified' => 'required',

       'date_purchased' => 'required',

       'order_date_finished' => 'required',

       'currency' => 'required',

       'currency_value' => 'required',

       'order_price' => 'required',

       'total_tax' => 'required',

       'payment_method' => 'required',

       'shipping_cost' => 'required',

       'shipping_method' => 'required',

       'free_shipping' => 'required',

       'shipping_duration' => 'required',

       'order_information' => 'required',

       'is_seen' => 'required',

       'coupon_code' => 'required',

       'coupon_amount' => 'required',]);
    $shop_order = new Shop_order ();

         $shop_order->user_id = $request->user_id;
  $shop_order->application_id = $request->application_id;
  $shop_order->shop_order_status_id = $request->shop_order_status_id;
  $shop_order->last_modified = $request->last_modified;
  $shop_order->date_purchased = $request->date_purchased;
  $shop_order->order_date_finished = $request->order_date_finished;
  $shop_order->currency = $request->currency;
  $shop_order->currency_value = $request->currency_value;
  $shop_order->order_price = $request->order_price;
  $shop_order->total_tax = $request->total_tax;
  $shop_order->payment_method = $request->payment_method;
  $shop_order->shipping_cost = $request->shipping_cost;
  $shop_order->shipping_method = $request->shipping_method;
  $shop_order->free_shipping = $request->free_shipping;
  $shop_order->shipping_duration = $request->shipping_duration;
  $shop_order->order_information = $request->order_information;
  $shop_order->is_seen = $request->is_seen;
  $shop_order->coupon_code = $request->coupon_code;
  $shop_order->coupon_amount = $request->coupon_amount;

      $save = $shop_order->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_orders/'.$shop_order->id.'">shop_order</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_orders,id',]);

    $shop_order = Shop_order::find($id);
    $next = Shop_order::where('id','>',$id)->min('id');
    $previous = Shop_order::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_orders.shop_order_view')
        ->with('shop_order',$shop_order)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_order = Shop_order::find($id); 

      $shop_order->user_id = $request->user_id;
  $shop_order->application_id = $request->application_id;
  $shop_order->shop_order_status_id = $request->shop_order_status_id;
  $shop_order->last_modified = $request->last_modified;
  $shop_order->date_purchased = $request->date_purchased;
  $shop_order->order_date_finished = $request->order_date_finished;
  $shop_order->currency = $request->currency;
  $shop_order->currency_value = $request->currency_value;
  $shop_order->order_price = $request->order_price;
  $shop_order->total_tax = $request->total_tax;
  $shop_order->payment_method = $request->payment_method;
  $shop_order->shipping_cost = $request->shipping_cost;
  $shop_order->shipping_method = $request->shipping_method;
  $shop_order->free_shipping = $request->free_shipping;
  $shop_order->shipping_duration = $request->shipping_duration;
  $shop_order->order_information = $request->order_information;
  $shop_order->is_seen = $request->is_seen;
  $shop_order->coupon_code = $request->coupon_code;
  $shop_order->coupon_amount = $request->coupon_amount;
    
       $update =  $shop_order->update();

       if($update) {
        \Session::flash('message', ' shop_order was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_order = Shop_order::find($id);
      $delete =  $shop_order->delete();

                   if($delete) {
        \Session::flash('message', ' shop_order was deleted successfully');
          return back();
       }

    }
}
