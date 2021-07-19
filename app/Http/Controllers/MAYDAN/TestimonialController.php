<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Testimonial;

use Yajra\Datatables\Datatables;

class TestimonialController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.testimonials.testimonials');

    }





   public function all_data()
    {


   $testimonials = Testimonial::select('testimonials.*'





  )->get();
return Datatables::of($testimonials)->addColumn('action', function ($testimonial) {
                return '
                <a href="/testimonials/'.$testimonial->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.testimonials.testimonial_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'sort' => 'required',

       'image' => 'required',

       'text' => 'required',

       'title' => 'required',]);
    $testimonial = new Testimonial ();

         $testimonial->sort = $request->sort;
  $testimonial->is_active = ($request->is_active) ? $request->is_active : 0;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/testimonials';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $testimonial->image = '/'.$destinationPath."/".$fileName;

      }}
  $testimonial->text = $request->text;
  $testimonial->title = $request->title;

      $save = $testimonial->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/testimonials/'.$testimonial->id.'">testimonial</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:testimonials,id',]);

    $testimonial = Testimonial::find($id);
    $next = Testimonial::where('id','>',$id)->min('id');
    $previous = Testimonial::where('id','<',$id)->max('id');
       return view('MAYDAN.testimonials.testimonial_view')
        ->with('testimonial',$testimonial)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $testimonial = Testimonial::find($id); 

      $testimonial->sort = $request->sort;
  $testimonial->is_active = ($request->is_active) ? $request->is_active : 0;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/testimonials';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $testimonial->image = '/'.$destinationPath."/".$fileName;

      }}
  $testimonial->text = $request->text;
  $testimonial->title = $request->title;
    
       $update =  $testimonial->update();

       if($update) {
        \Session::flash('message', ' testimonial was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $testimonial = Testimonial::find($id);
      $delete =  $testimonial->delete();

                   if($delete) {
        \Session::flash('message', ' testimonial was deleted sucssesfily ');
          return back();
       }

    }
}
