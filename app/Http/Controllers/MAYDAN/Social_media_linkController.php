<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Social_media_link;
use App\Models\MAYDAN\Club;
use App\Models\MAYDAN\Social_media;

use Yajra\Datatables\Datatables;

class Social_media_linkController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.social_media_links.social_media_links');

    }





   public function all_data()
    {


   $social_media_links = Social_media_link::select('social_media_links.*'






                        ,'clubs.code as club_id'

                        ,'social_media.name as social_media_id'
  )->
leftjoin('clubs','clubs.id','=','social_media_links.club_id')->

leftjoin('social_media','social_media.id','=','social_media_links.social_media_id')->
get();
return Datatables::of($social_media_links)->addColumn('action', function ($social_media_link) {
                return '
                <a href="/social_media_links/'.$social_media_link->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $clubs = Club::all();
$social_media = Social_media::all();
       return view('MAYDAN.social_media_links.social_media_link_add')->with('clubs' , $clubs)
->with('social_media' , $social_media)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'link' => 'required',

       'social_media_id' => 'required',

       'application_id' => 'required',

       'club_id' => 'required',]);
    $social_media_link = new Social_media_link ();

         $social_media_link->is_active = ($request->is_active) ? $request->is_active : 0;
  $social_media_link->link = $request->link;
  $social_media_link->social_media_id = $request->social_media_id;
  $social_media_link->application_id = $request->application_id;
  $social_media_link->club_id = $request->club_id;

      $save = $social_media_link->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/social_media_links/'.$social_media_link->id.'">social_media_link</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:social_media_links,id',]);

    $social_media_link = Social_media_link::find($id);
    $next = Social_media_link::where('id','>',$id)->min('id');
    $previous = Social_media_link::where('id','<',$id)->max('id');
$clubs = Club::all();
$social_media = Social_media::all();
       return view('MAYDAN.social_media_links.social_media_link_view')
        ->with('social_media_link',$social_media_link)
        ->with('next',$next)
        ->with('previous',$previous)->with('clubs' , $clubs)
->with('social_media' , $social_media)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $social_media_link = Social_media_link::find($id); 

      $social_media_link->is_active = ($request->is_active) ? $request->is_active : 0;
  $social_media_link->link = $request->link;
  $social_media_link->social_media_id = $request->social_media_id;
  $social_media_link->application_id = $request->application_id;
  $social_media_link->club_id = $request->club_id;
    
       $update =  $social_media_link->update();

       if($update) {
        \Session::flash('message', ' social_media_link was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $social_media_link = Social_media_link::find($id);
      $delete =  $social_media_link->delete();

                   if($delete) {
        \Session::flash('message', ' social_media_link was deleted sucssesfily ');
          return back();
       }

    }
}
