<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Post_type;

use Yajra\Datatables\Datatables;

class Post_typeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.post_types.post_types');

    }





   public function all_data()
    {


   $post_types = Post_type::select('post_types.*'





  )->get();
return Datatables::of($post_types)->addColumn('action', function ($post_type) {
                return '
                <a href="/post_types/'.$post_type->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.post_types.post_type_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'en_name' => 'required',

       'name' => 'required',]);
    $post_type = new Post_type ();

         $post_type->en_name = $request->en_name;
  $post_type->name = $request->name;

      $save = $post_type->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/post_types/'.$post_type->id.'">post_type</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:post_types,id',]);

    $post_type = Post_type::find($id);
    $next = Post_type::where('id','>',$id)->min('id');
    $previous = Post_type::where('id','<',$id)->max('id');
       return view('MAYDAN.post_types.post_type_view')
        ->with('post_type',$post_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $post_type = Post_type::find($id); 

      $post_type->en_name = $request->en_name;
  $post_type->name = $request->name;
    
       $update =  $post_type->update();

       if($update) {
        \Session::flash('message', ' post_type was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $post_type = Post_type::find($id);
      $delete =  $post_type->delete();

                   if($delete) {
        \Session::flash('message', ' post_type was deleted sucssesfily ');
          return back();
       }

    }
}
