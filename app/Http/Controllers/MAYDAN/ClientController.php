<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\Client;

use Yajra\Datatables\Datatables;

class ClientController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('MAYDAN.clients.clients');

    }





   public function all_data()
    {


   $clients = Client::select('clients.*'





  )->get();
return Datatables::of($clients)->addColumn('action', function ($client) {
                return '
                <a href="/clients/'.$client->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

          return view('MAYDAN.clients.client_add')
       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'sort' => 'required',

       'country' => 'required',

       'team_name' => 'required',

       'icon' => 'required',]);
    $client = new Client ();

         $client->sort = $request->sort;
  $client->is_active = ($request->is_active) ? $request->is_active : 0;
  $client->country = $request->country;
  $client->team_name = $request->team_name;
  $client->icon = $request->icon;

      $save = $client->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/clients/'.$client->id.'">client</a> was stored sucssesfily ');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:clients,id',]);

    $client = Client::find($id);
    $next = Client::where('id','>',$id)->min('id');
    $previous = Client::where('id','<',$id)->max('id');
       return view('MAYDAN.clients.client_view')
        ->with('client',$client)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $client = Client::find($id); 

      $client->sort = $request->sort;
  $client->is_active = ($request->is_active) ? $request->is_active : 0;
  $client->country = $request->country;
  $client->team_name = $request->team_name;
  $client->icon = $request->icon;
    
       $update =  $client->update();

       if($update) {
        \Session::flash('message', ' client was updated sucssesfily ');
         return back();
       }

 }
    public function destroy($id)
    {
       $client = Client::find($id);
      $delete =  $client->delete();

                   if($delete) {
        \Session::flash('message', ' client was deleted sucssesfily ');
          return back();
       }

    }
}
