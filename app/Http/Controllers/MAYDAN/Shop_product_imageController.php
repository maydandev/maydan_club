<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_product_image;

use Yajra\Datatables\Datatables;

class Shop_product_imageController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.shop_product_images.shop_product_images');

    }





   public function all_data()
    {


   $shop_product_images = Shop_product_image::select('shop_product_images.*'





  )->get();
return Datatables::of($shop_product_images)->addColumn('action', function ($shop_product_image) {
                return '
                <a href="/shop_product_images/'.$shop_product_image->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_product_images.shop_product_image_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'image' => 'required',

       'shop_product_id' => 'required',]);
    $shop_product_image = new Shop_product_image ();

         $shop_product_image->is_active = ($request->is_active) ? $request->is_active : 0;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/shop_product_images';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product_image->image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_product_image->shop_product_id = $request->shop_product_id;

      $save = $shop_product_image->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_product_images/'.$shop_product_image->id.'">shop_product_image</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_product_images,id',]);

    $shop_product_image = Shop_product_image::find($id);
    $next = Shop_product_image::where('id','>',$id)->min('id');
    $previous = Shop_product_image::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_product_images.shop_product_image_view')
        ->with('shop_product_image',$shop_product_image)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_product_image = Shop_product_image::find($id); 

      $shop_product_image->is_active = ($request->is_active) ? $request->is_active : 0;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/shop_product_images';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_product_image->image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_product_image->shop_product_id = $request->shop_product_id;
    
       $update =  $shop_product_image->update();

       if($update) {
        \Session::flash('message', ' shop_product_image was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_product_image = Shop_product_image::find($id);
      $delete =  $shop_product_image->delete();

                   if($delete) {
        \Session::flash('message', ' shop_product_image was deleted sucssesfily ');
          return back();
       }

    }
}
