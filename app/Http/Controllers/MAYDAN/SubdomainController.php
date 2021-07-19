<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Subdomain;

use Yajra\Datatables\Datatables;

class SubdomainController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.subdomains.subdomains');

    }





   public function all_data()
    {


   $subdomains = Subdomain::select('subdomains.*'





  )->get();
return Datatables::of($subdomains)->addColumn('action', function ($subdomain) {
                return '
                <a href="/subdomains/'.$subdomain->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.subdomains.subdomain_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'application_id' => 'required',

       'club_id' => 'required',

       'user_id' => 'required',

       'is_accepted' => 'required',

       'is_verified' => 'required',

       'subdomain' => 'required',]);
    $subdomain = new Subdomain ();

         $subdomain->application_id = $request->application_id;
  $subdomain->club_id = $request->club_id;
  $subdomain->user_id = $request->user_id;
  $subdomain->is_accepted = $request->is_accepted;
  $subdomain->is_verified = $request->is_verified;
  $subdomain->is_active = ($request->is_active) ? $request->is_active : 0;
  $subdomain->subdomain = $request->subdomain;

      $save = $subdomain->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/subdomains/'.$subdomain->id.'">subdomain</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:subdomains,id',]);

    $subdomain = Subdomain::find($id);
    $next = Subdomain::where('id','>',$id)->min('id');
    $previous = Subdomain::where('id','<',$id)->max('id');
       return view('MAYDAN.subdomains.subdomain_view')
        ->with('subdomain',$subdomain)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $subdomain = Subdomain::find($id); 

      $subdomain->application_id = $request->application_id;
  $subdomain->club_id = $request->club_id;
  $subdomain->user_id = $request->user_id;
  $subdomain->is_accepted = $request->is_accepted;
  $subdomain->is_verified = $request->is_verified;
  $subdomain->is_active = ($request->is_active) ? $request->is_active : 0;
  $subdomain->subdomain = $request->subdomain;
    
       $update =  $subdomain->update();

       if($update) {
        \Session::flash('message', ' subdomain was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $subdomain = Subdomain::find($id);
      $delete =  $subdomain->delete();

                   if($delete) {
        \Session::flash('message', ' subdomain was deleted sucssesfily ');
          return back();
       }

    }
}
