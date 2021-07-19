<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_category;

use Yajra\Datatables\Datatables;

class Shop_categoryController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $shop_categories = Shop_category::paginate(10);
        return view('MAYDAN.shop_categories.shop_categories' , compact('shop_categories'));

    }







   public function all_data()
    {


   $shop_categories = Shop_category::select('shop_categories.*'





  )->get();
return Datatables::of($shop_categories)->addColumn('action', function ($shop_category) {
                return '
                <a href="/shop_categories/'.$shop_category->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_categories.shop_category_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'category_name' => 'required',

       'application_id' => 'required',

       'category_image' => 'required',

       'category_icon' => 'required',

       'parent_id' => 'required',

       'sort_order' => 'required',

       'last_modified' => 'required',

       'category_slug' => 'required',

       'category_status' => 'required',]);
    $shop_category = new Shop_category ();

         $shop_category->category_name = $request->category_name;
  $shop_category->application_id = $request->application_id;

  if ($request->hasFile('category_image')) {
  if ($request->file('category_image')->isValid()) {
  $file = $request->file('category_image');
  $destinationPath = 'images/shop_categories';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_category->category_image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_category->category_icon = $request->category_icon;
  $shop_category->parent_id = $request->parent_id;
  $shop_category->sort_order = $request->sort_order;
  $shop_category->last_modified = $request->last_modified;
  $shop_category->category_slug = $request->category_slug;
  $shop_category->category_status = $request->category_status;

      $save = $shop_category->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_categories/'.$shop_category->id.'">shop_category</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_categories,id',]);

    $shop_category = Shop_category::find($id);
    $next = Shop_category::where('id','>',$id)->min('id');
    $previous = Shop_category::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_categories.shop_category_view')
        ->with('shop_category',$shop_category)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_category = Shop_category::find($id); 

      $shop_category->category_name = $request->category_name;
  $shop_category->application_id = $request->application_id;

  if ($request->hasFile('category_image')) {
  if ($request->file('category_image')->isValid()) {
  $file = $request->file('category_image');
  $destinationPath = 'images/shop_categories';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $shop_category->category_image = '/'.$destinationPath."/".$fileName;

      }}
  $shop_category->category_icon = $request->category_icon;
  $shop_category->parent_id = $request->parent_id;
  $shop_category->sort_order = $request->sort_order;
  $shop_category->last_modified = $request->last_modified;
  $shop_category->category_slug = $request->category_slug;
  $shop_category->category_status = $request->category_status;
    
       $update =  $shop_category->update();

       if($update) {
        \Session::flash('message', ' shop_category was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_category = Shop_category::find($id);
      $delete =  $shop_category->delete();

                   if($delete) {
        \Session::flash('message', ' shop_category was deleted successfully');
          return back();
       }

    }
}
