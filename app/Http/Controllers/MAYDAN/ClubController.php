<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Club;
use App\Models\MAYDAN\City;
use App\Models\MAYDAN\Country;
use App\Models\MAYDAN\Representative;

use Yajra\Datatables\Datatables;

class ClubController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.clubs.clubs');

    }





   public function all_data()
    {


   $clubs = Club::select('clubs.*'






                        ,'cities.name as city_id'

                        ,'countries.country as country_id'

                        ,'representatives.user_id as representative_id'
  )->
leftjoin('cities','cities.id','=','clubs.city_id')->

leftjoin('countries','countries.id','=','clubs.country_id')->

leftjoin('representatives','representatives.id','=','clubs.representative_id')->
get();
return Datatables::of($clubs)->addColumn('action', function ($club) {
                return '
                <a href="/clubs/'.$club->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $cities = City::all();
$countries = Country::all();
$representatives = Representative::all();
       return view('MAYDAN.clubs.club_add')->with('cities' , $cities)
->with('countries' , $countries)
->with('representatives' , $representatives)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'join_date' => 'required',

       'usage_data' => 'required',

       'profiles' => 'required',

       'representative_id' => 'required',

       'city_id' => 'required',

       'country_id' => 'required',

       'logo' => 'required',

       'name' => 'required',

       'code' => 'required',]);
    $club = new Club ();

         $club->is_active = ($request->is_active) ? $request->is_active : 0;
  $club->join_date = $request->join_date;
  $club->usage_data = $request->usage_data;
  $club->profiles = $request->profiles;
  $club->representative_id = $request->representative_id;
  $club->city_id = $request->city_id;
  $club->country_id = $request->country_id;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/clubs';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $club->logo = '/'.$destinationPath."/".$fileName;

      }}
  $club->name = $request->name;
  $club->code = $request->code;

      $save = $club->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/clubs/'.$club->id.'">club</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:clubs,id',]);

    $club = Club::find($id);
    $next = Club::where('id','>',$id)->min('id');
    $previous = Club::where('id','<',$id)->max('id');
$cities = City::all();
$countries = Country::all();
$representatives = Representative::all();
       return view('MAYDAN.clubs.club_view')
        ->with('club',$club)
        ->with('next',$next)
        ->with('previous',$previous)->with('cities' , $cities)
->with('countries' , $countries)
->with('representatives' , $representatives)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $club = Club::find($id); 

      $club->is_active = ($request->is_active) ? $request->is_active : 0;
  $club->join_date = $request->join_date;
  $club->usage_data = $request->usage_data;
  $club->profiles = $request->profiles;
  $club->representative_id = $request->representative_id;
  $club->city_id = $request->city_id;
  $club->country_id = $request->country_id;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/clubs';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $club->logo = '/'.$destinationPath."/".$fileName;

      }}
  $club->name = $request->name;
  $club->code = $request->code;
    
       $update =  $club->update();

       if($update) {
        \Session::flash('message', ' club was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $club = Club::find($id);
      $delete =  $club->delete();

                   if($delete) {
        \Session::flash('message', ' club was deleted sucssesfily ');
          return back();
       }

    }
}
