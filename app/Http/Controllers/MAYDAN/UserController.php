<?php

namespace App\Http\Controllers\MAYDAN;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Auth;
use App\Models\MAYDAN\User;
use App\Models\MAYDAN\Gender;
use App\Models\MAYDAN\User_type;

use Yajra\Datatables\Datatables;

class UserController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // pure
         $users = User::paginate(10);
        return view('MAYDAN.users.users' , compact('users'));

    }







   public function all_data()
    {


   $users = User::select('users.*'






                        ,'genders.name as gender_id'

                        ,'user_types.name as user_type_id'
  )->
leftjoin('genders','genders.id','=','users.gender_id')->

leftjoin('user_types','user_types.id','=','users.user_type_id')->
get();
return Datatables::of($users)->addColumn('action', function ($user) {
                return '
                <a href="/users/'.$user->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> show</a>

                ';
            })->make(true);

}




        public function create()
    {

   $genders = Gender::all();
$user_types = User_type::all();
       return view('MAYDAN.users.user_add')->with('genders' , $genders)
->with('user_types' , $user_types)

       ;
 }


 public function store(Request $request)
    {

      $this->validate($request, [

       'first_name' => 'required',

       'last_name' => 'required',

       'phone_number' => 'required',

       'email' => 'required',

       'image' => 'required',

       'flag' => 'required',

       'password' => 'required',

       'birthday' => 'required',

       'gender_id' => 'required',

       'user_type_id' => 'required',

       'code' => 'required',

       'code_expires_at' => 'required',

       'lang' => 'required',

       'city' => 'required',

       'address' => 'required',

       'package_id' => 'required',

       'subscription_date' => 'required',

       'subdomain_id' => 'required',]);
    $user = new User ();

         $user->first_name = $request->first_name;
  $user->last_name = $request->last_name;
  $user->phone_number = $request->phone_number;
  $user->email = $request->email;
  $user->email_verified_at = $request->email_verified_at;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->image = '/'.$destinationPath."/".$fileName;

      }}

  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->flag = '/'.$destinationPath."/".$fileName;

      }}
  $user->two_factor_secret = $request->two_factor_secret;
  $user->two_factor_recovery_codes = $request->two_factor_recovery_codes;
  $user->firebase_id = $request->firebase_id;
  $user->birthday = $request->birthday;
  $user->gender_id = $request->gender_id;
  $user->user_type_id = $request->user_type_id;
  $user->code = $request->code;
  $user->code_expires_at = $request->code_expires_at;
  $user->lang = $request->lang;
  $user->city = $request->city;
  $user->address = $request->address;
  $user->is_active = ($request->is_active) ? $request->is_active : 0;
  $user->is_verified = ($request->is_verified) ? $request->is_verified : 0;
  $user->package_id = $request->package_id;
  $user->subscription_date = $request->subscription_date;
  $user->subdomain_id = $request->subdomain_id;

      $save = $user->save();
       if($save) {

        \Session::flash('message', 'new  <a href="/users/'.$user->id.'">user</a> was stored successfully');
       }
       return back();
    }
      public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:users,id',]);

    $user = User::find($id);
    $next = User::where('id','>',$id)->min('id');
    $previous = User::where('id','<',$id)->max('id');
$genders = Gender::all();
$user_types = User_type::all();
       return view('MAYDAN.users.user_view')
        ->with('user',$user)
        ->with('next',$next)
        ->with('previous',$previous)->with('genders' , $genders)
->with('user_types' , $user_types)
            ;

     }

    public function my_profile()
    {
     // $user = User::find($id);
       $user = Auth::user();

$genders = Gender::all();
$user_types = User_type::all();
       return view('MAYDAN.users.my_profile')
        ->with('user',$user)->with('genders' , $genders)
->with('user_types' , $user_types)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user = User::find($id); 

      $user->first_name = $request->first_name;
  $user->last_name = $request->last_name;
  $user->phone_number = $request->phone_number;
  $user->email = $request->email;
  $user->email_verified_at = $request->email_verified_at;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->image = '/'.$destinationPath."/".$fileName;

      }}

  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->flag = '/'.$destinationPath."/".$fileName;

      }}
  $user->two_factor_secret = $request->two_factor_secret;
  $user->two_factor_recovery_codes = $request->two_factor_recovery_codes;
  $user->firebase_id = $request->firebase_id;
  $user->birthday = $request->birthday;
  $user->gender_id = $request->gender_id;
  $user->user_type_id = $request->user_type_id;
  $user->code = $request->code;
  $user->code_expires_at = $request->code_expires_at;
  $user->lang = $request->lang;
  $user->city = $request->city;
  $user->address = $request->address;
  $user->is_active = ($request->is_active) ? $request->is_active : 0;
  $user->is_verified = ($request->is_verified) ? $request->is_verified : 0;
  $user->package_id = $request->package_id;
  $user->subscription_date = $request->subscription_date;
  $user->subdomain_id = $request->subdomain_id;
    
       $update =  $user->update();

       if($update) {
        \Session::flash('message', ' user was updated successfully');
         return back();
       }

 }
    public function destroy($id)
    {
       $user = User::find($id);
      $delete =  $user->delete();

                   if($delete) {
        \Session::flash('message', ' user was deleted successfully');
          return back();
       }

    }
}
