<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\City;
use App\Models\MAYDAN\Vote;
use App\Models\MAYDAN\Country;

use Yajra\Datatables\Datatables;

class CityController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $cities = City::paginate(10);
        return view('MAYDAN.cities.cities' , compact('cities'));

    }







   public function all_data()
    {


   $cities = City::select('cities.*'





  )->get();
return Datatables::of($cities)->addColumn('action', function ($city) {
                return '
                <a href="/cities/'.$city->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $votes = Vote::all();
$countries = Country::all();
       return view('MAYDAN.cities.city_add')->with('votes' , $votes)
->with('countries' , $countries)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'name' => 'required',

       'en_name' => 'required',

       'country_id' => 'required',

       'is_active_id' => 'required',]);
    $city = new City ();

         $city->name = $request->name;
  $city->en_name = $request->en_name;
  $city->country_id = $request->country_id;
  $city->is_active_id = $request->is_active_id;

      $save = $city->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/cities/'.$city->id.'">city</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:cities,id',]);

    $city = City::find($id);
    $next = City::where('id','>',$id)->min('id');
    $previous = City::where('id','<',$id)->max('id');
$votes = Vote::all();
$countries = Country::all();
       return view('MAYDAN.cities.city_view')
        ->with('city',$city)
        ->with('next',$next)
        ->with('previous',$previous)->with('votes' , $votes)
->with('countries' , $countries)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $city = City::find($id); 

      $city->name = $request->name;
  $city->en_name = $request->en_name;
  $city->country_id = $request->country_id;
  $city->is_active_id = $request->is_active_id;
    
       $update =  $city->update();

       if($update) {
        \Session::flash('message', ' city was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $city = City::find($id);
      $delete =  $city->delete();

                   if($delete) {
        \Session::flash('message', ' city was deleted successfully');
          return back();
       }

    }
}
