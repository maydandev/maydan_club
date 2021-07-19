<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Social_media;

use Yajra\Datatables\Datatables;

class Social_mediaController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.social_media.social_media');

    }





   public function all_data()
    {


   $social_media = Social_media::select('social_media.*'





  )->get();
return Datatables::of($social_media)->addColumn('action', function ($social_media) {
                return '
                <a href="/social_media/'.$social_media->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.social_media.social_media_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'image' => 'required',

       'icon' => 'required',

       'en_name' => 'required',

       'name' => 'required',]);
    $social_media = new Social_media ();

       
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/social_media';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $social_media->image = '/'.$destinationPath."/".$fileName;

      }}
  $social_media->icon = $request->icon;
  $social_media->en_name = $request->en_name;
  $social_media->name = $request->name;

      $save = $social_media->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/social_media/'.$social_media->id.'">social_media</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:social_media,id',]);

    $social_media = Social_media::find($id);
    $next = Social_media::where('id','>',$id)->min('id');
    $previous = Social_media::where('id','<',$id)->max('id');
       return view('MAYDAN.social_media.social_media_view')
        ->with('social_media',$social_media)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $social_media = Social_media::find($id); 

    
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/social_media';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $social_media->image = '/'.$destinationPath."/".$fileName;

      }}
  $social_media->icon = $request->icon;
  $social_media->en_name = $request->en_name;
  $social_media->name = $request->name;
    
       $update =  $social_media->update();

       if($update) {
        \Session::flash('message', ' social_media was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $social_media = Social_media::find($id);
      $delete =  $social_media->delete();

                   if($delete) {
        \Session::flash('message', ' social_media was deleted sucssesfily ');
          return back();
       }

    }
}
