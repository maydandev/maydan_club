<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Country;

use Yajra\Datatables\Datatables;

class CountryController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.countries.countries');

    }





   public function all_data()
    {


   $countries = Country::select('countries.*'





  )->get();
return Datatables::of($countries)->addColumn('action', function ($country) {
                return '
                <a href="/countries/'.$country->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.countries.country_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'flag' => 'required',

       'code' => 'required',

       'country' => 'required',]);
    $country = new Country ();

         $country->flag = $request->flag;
  $country->code = $request->code;
  $country->country = $request->country;

      $save = $country->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/countries/'.$country->id.'">country</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:countries,id',]);

    $country = Country::find($id);
    $next = Country::where('id','>',$id)->min('id');
    $previous = Country::where('id','<',$id)->max('id');
       return view('MAYDAN.countries.country_view')
        ->with('country',$country)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $country = Country::find($id); 

      $country->flag = $request->flag;
  $country->code = $request->code;
  $country->country = $request->country;
    
       $update =  $country->update();

       if($update) {
        \Session::flash('message', ' country was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $country = Country::find($id);
      $delete =  $country->delete();

                   if($delete) {
        \Session::flash('message', ' country was deleted sucssesfily ');
          return back();
       }

    }
}
