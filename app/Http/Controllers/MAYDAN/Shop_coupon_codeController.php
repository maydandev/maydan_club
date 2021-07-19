<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Shop_coupon_code;

use Yajra\Datatables\Datatables;

class Shop_coupon_codeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.shop_coupon_codes.shop_coupon_codes');

    }





   public function all_data()
    {


   $shop_coupon_codes = Shop_coupon_code::select('shop_coupon_codes.*'





  )->get();
return Datatables::of($shop_coupon_codes)->addColumn('action', function ($shop_coupon_code) {
                return '
                <a href="/shop_coupon_codes/'.$shop_coupon_code->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.shop_coupon_codes.shop_coupon_code_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'coupon_discount_type' => 'required',

       'coupon_amout' => 'required',

       'is_use' => 'required',

       'coupon_code' => 'required',

       'application_id' => 'required',]);
    $shop_coupon_code = new Shop_coupon_code ();

         $shop_coupon_code->coupon_discount_type = $request->coupon_discount_type;
  $shop_coupon_code->coupon_amout = $request->coupon_amout;
  $shop_coupon_code->is_active = ($request->is_active) ? $request->is_active : 0;
  $shop_coupon_code->is_use = $request->is_use;
  $shop_coupon_code->coupon_code = $request->coupon_code;
  $shop_coupon_code->application_id = $request->application_id;

      $save = $shop_coupon_code->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/shop_coupon_codes/'.$shop_coupon_code->id.'">shop_coupon_code</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:shop_coupon_codes,id',]);

    $shop_coupon_code = Shop_coupon_code::find($id);
    $next = Shop_coupon_code::where('id','>',$id)->min('id');
    $previous = Shop_coupon_code::where('id','<',$id)->max('id');
       return view('MAYDAN.shop_coupon_codes.shop_coupon_code_view')
        ->with('shop_coupon_code',$shop_coupon_code)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $shop_coupon_code = Shop_coupon_code::find($id); 

      $shop_coupon_code->coupon_discount_type = $request->coupon_discount_type;
  $shop_coupon_code->coupon_amout = $request->coupon_amout;
  $shop_coupon_code->is_active = ($request->is_active) ? $request->is_active : 0;
  $shop_coupon_code->is_use = $request->is_use;
  $shop_coupon_code->coupon_code = $request->coupon_code;
  $shop_coupon_code->application_id = $request->application_id;
    
       $update =  $shop_coupon_code->update();

       if($update) {
        \Session::flash('message', ' shop_coupon_code was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $shop_coupon_code = Shop_coupon_code::find($id);
      $delete =  $shop_coupon_code->delete();

                   if($delete) {
        \Session::flash('message', ' shop_coupon_code was deleted sucssesfily ');
          return back();
       }

    }
}
