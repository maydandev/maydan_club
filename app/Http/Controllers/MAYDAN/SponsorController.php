<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Sponsor;
use App\Models\MAYDAN\Club;
use App\Models\MAYDAN\Sponsor_type;

use Yajra\Datatables\Datatables;

class SponsorController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.sponsors.sponsors');

    }





   public function all_data()
    {


   $sponsors = Sponsor::select('sponsors.*'






                        ,'clubs.code as club_id'

                        ,'sponsor_types.name as sponsor_type_id'
  )->
leftjoin('clubs','clubs.id','=','sponsors.club_id')->

leftjoin('sponsor_types','sponsor_types.id','=','sponsors.sponsor_type_id')->
get();
return Datatables::of($sponsors)->addColumn('action', function ($sponsor) {
                return '
                <a href="/sponsors/'.$sponsor->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $clubs = Club::all();
$sponsor_types = Sponsor_type::all();
       return view('MAYDAN.sponsors.sponsor_add')->with('clubs' , $clubs)
->with('sponsor_types' , $sponsor_types)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'icon' => 'required',

       'sponsor_type_id' => 'required',

       'application_id' => 'required',

       'name' => 'required',

       'club_id' => 'required',]);
    $sponsor = new Sponsor ();

         $sponsor->is_active = ($request->is_active) ? $request->is_active : 0;
  $sponsor->icon = $request->icon;
  $sponsor->sponsor_type_id = $request->sponsor_type_id;
  $sponsor->application_id = $request->application_id;
  $sponsor->name = $request->name;
  $sponsor->club_id = $request->club_id;

      $save = $sponsor->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/sponsors/'.$sponsor->id.'">sponsor</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:sponsors,id',]);

    $sponsor = Sponsor::find($id);
    $next = Sponsor::where('id','>',$id)->min('id');
    $previous = Sponsor::where('id','<',$id)->max('id');
$clubs = Club::all();
$sponsor_types = Sponsor_type::all();
       return view('MAYDAN.sponsors.sponsor_view')
        ->with('sponsor',$sponsor)
        ->with('next',$next)
        ->with('previous',$previous)->with('clubs' , $clubs)
->with('sponsor_types' , $sponsor_types)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $sponsor = Sponsor::find($id); 

      $sponsor->is_active = ($request->is_active) ? $request->is_active : 0;
  $sponsor->icon = $request->icon;
  $sponsor->sponsor_type_id = $request->sponsor_type_id;
  $sponsor->application_id = $request->application_id;
  $sponsor->name = $request->name;
  $sponsor->club_id = $request->club_id;
    
       $update =  $sponsor->update();

       if($update) {
        \Session::flash('message', ' sponsor was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $sponsor = Sponsor::find($id);
      $delete =  $sponsor->delete();

                   if($delete) {
        \Session::flash('message', ' sponsor was deleted sucssesfily ');
          return back();
       }

    }
}
