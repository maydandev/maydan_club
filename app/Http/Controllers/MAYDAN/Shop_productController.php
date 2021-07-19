<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_product;

use Yajra\Datatables\Datatables;

class Shop_productController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $shop_products = Shop_product::paginate(10);
        return view('MAYDAN.shop_products.shop_products' , compact('shop_products'));

    }







   public function all_data()
    {


   $shop_products = Shop_product::select('shop_products.*'





  )->get();
return Datatables::of($shop_products)->addColumn('action', function ($shop_product) {
                return '
                <a href="/shop_products/'.$shop_product->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_products.shop_product_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'application_id' => 'required',

       'shop_category_id' => 'required',

       'product_quantity' => 'required',

       'product_model' => 'required',

       'product_image' => 'required',

       'product_video_link' => 'required',

       'product_price' => 'required',

       'product_last_modified' => 'required',

       'product_date_available' => 'required',

       'product_weight' => 'required',

       'product_weight_unit' => 'required',

       'product_status' => 'required',

       'product_min_order' => 'required',

       'product_desc' => 'required',]);
    $shop_product = new Shop_product ();

         $shop_product->application_id = $request->application_id;
  $shop_product->shop_category_id = $request->shop_category_id;
  $shop_product->product_quantity = $request->product_quantity;
  $shop_product->product_model = $request->product_model;

  if ($request->hasFile('product_image')) {
  if ($request->file('product_image')->isValid()) {
  $file = $request->file('product_image');
  $destinationPath = 'images/shop_products';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product->product_image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_product->product_video_link = $request->product_video_link;
  $shop_product->product_price = $request->product_price;
  $shop_product->product_last_modified = $request->product_last_modified;
  $shop_product->product_date_available = $request->product_date_available;
  $shop_product->product_weight = $request->product_weight;
  $shop_product->product_weight_unit = $request->product_weight_unit;
  $shop_product->product_status = $request->product_status;
  $shop_product->product_min_order = $request->product_min_order;
  $shop_product->product_desc = $request->product_desc;

      $save = $shop_product->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_products/'.$shop_product->id.'">shop_product</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_products,id',]);

    $shop_product = Shop_product::find($id);
    $next = Shop_product::where('id','>',$id)->min('id');
    $previous = Shop_product::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_products.shop_product_view')
        ->with('shop_product',$shop_product)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_product = Shop_product::find($id); 

      $shop_product->application_id = $request->application_id;
  $shop_product->shop_category_id = $request->shop_category_id;
  $shop_product->product_quantity = $request->product_quantity;
  $shop_product->product_model = $request->product_model;

  if ($request->hasFile('product_image')) {
  if ($request->file('product_image')->isValid()) {
  $file = $request->file('product_image');
  $destinationPath = 'images/shop_products';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product->product_image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_product->product_video_link = $request->product_video_link;
  $shop_product->product_price = $request->product_price;
  $shop_product->product_last_modified = $request->product_last_modified;
  $shop_product->product_date_available = $request->product_date_available;
  $shop_product->product_weight = $request->product_weight;
  $shop_product->product_weight_unit = $request->product_weight_unit;
  $shop_product->product_status = $request->product_status;
  $shop_product->product_min_order = $request->product_min_order;
  $shop_product->product_desc = $request->product_desc;
    
       $update =  $shop_product->update();

       if($update) {
        \Session::flash('message', ' shop_product was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_product = Shop_product::find($id);
      $delete =  $shop_product->delete();

                   if($delete) {
        \Session::flash('message', ' shop_product was deleted successfully');
          return back();
       }

    }
}
