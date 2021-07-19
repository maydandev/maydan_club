<?php

namespace App\Http\Controllers\API;
  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use session;
use DateTime;
use DB;
use App;
use Auth;
use Carbon\Carbon;
use App\User;
class UserAPIController extends APIController
{
       public function send_otp(Request $request)
    {

        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'ar';
        }
        App::setLocale($lang);

        $conditions = ['phone_number' => 'required|string|max:20'];

        $all_request = $request->all();
        $check_failure = $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }
        $user = User::wherePhoneNumber($request->phone_number)->first();
        //  $random_number = mt_rand(1000, 9999);
        $random_number = 1234;

        $now = Carbon::now();
        $addMinutes = $now->addMinutes(5);

        if (!$user) {

            $user = new User();
            $user->phone_number = $request->phone_number;
            $user->password = bcrypt($random_number);
            $user->code_expires_at = $addMinutes;
            $user->code = $random_number;
            $user->last_interactive = date("Y-m-d h:i:s");
            $user->save();

        }

        $user = User::wherePhoneNumber($request->phone_number)->first();

        $user->code_expires_at = $addMinutes;
        $user->code = $random_number;
        $user->last_interactive = date("Y-m-d h:i:s");

        $user->update();

        //  $Help = new Help();
        //    $is_send = $Help->send_sms("OTP Code :" .$user->code,$user->phone_number);
        // $getReasonPhrase = $is_send->getReasonPhrase();
        $getReasonPhrase = 'OK';

        if ($getReasonPhrase == 'OK') {

            $ResponseMessage = "Verification code sent";
            $check_success = $this->custom_success($ResponseMessage);

        } else {
            $ResponseMessage = $is_send->getReasonPhrase();
            $check_success = $this->custom_error($ResponseMessage);
        }
        return $check_success;
    }

 

    public function check_otp(Request $request)
    {

        if (isset($request->lang)) {
            $lang = ($request->lang == 'ar') ? 'ar' : 'en';
        } else {
            $lang = 'ar';
        }
        App::setLocale($lang);

        $conditions = ['phone_number' => 'required|string|max:20', 'code' => 'required|string|size:4'];

        $all_request = $request->all();
        $check_failure = $this->check_failure($all_request, $conditions);
        if ($check_failure) {
            return $check_failure;
        }
        $user = User::wherePhoneNumber($request->phone_number)->whereCode($request->code)->first();

        if (!$user) {

            $ResponseMessage = "There is an error in the OTP code you entered";
            $check_success = $this->custom_error($ResponseMessage);
            return $check_success;

        }

        $user->is_verified = 1;
        $user->last_interactive = date("Y-m-d h:i:s");

        $user->update();

        $success['user'] = $user;

        $success['token'] = $user->createToken('ssc')->accessToken;

        $ResponseMessage = "welcome";
        $check_success = $this->check_success($ResponseMessage, $success);
        return $check_success;
    }

             //////////////////////////////////users/////////////////////////////////


                    public function users(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);


                    $users = User::select('users.*')->get();

                    $ResponseMessage =  ($lang=='ar') ?  "users retrieved successfully" : "users retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$users);
                    return $check_success;



                                    }


                    public function show_user(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);




                    // check_failure
                    $conditions = ['user_id' => 'required|exists:users,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }

                    $user_id =  $request->user_id;
                    // check_failure
                    $user = User::select('users.*')->find($user_id);

                    $ResponseMessage =  ($lang=='ar') ?  "user retrieved successfully" : "user retrieved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user);
                    return $check_success;



                                    }


                    public function add_user(Request $request)
                    {
                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);
         $conditions = [
                     'subdomain_id' => 'required',
                        'subscription_date' => 'required',
                        'package_id' => 'required',
                        'is_verified' => 'required',
                        'is_active' => 'required',
                        'address' => 'required',
                        'city' => 'required',
                        'lang' => 'required',
                        'code_expires_at' => 'required',
                        'code' => 'required',
                        'user_type_id' => 'required|exists:user_types,id',
            'gender_id' => 'required|exists:genders,id',
            'birthday' => 'required',
                        'flag' => 'required',
                        'image' => 'required',
                        'email_verified_at' => 'required',
                        'email' => 'required',
                        'phone_number' => 'required',
                        'last_name' => 'required',
                        'first_name' => 'required',
                    ] ;
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

    $user = new User ();
      $user->subdomain_id = $request->subdomain_id;
  $user->subscription_date = $request->subscription_date;
  $user->package_id = $request->package_id;
  $user->is_verified = ($request->is_verified) ? $request->is_verified : 0;
  $user->is_active = ($request->is_active) ? $request->is_active : 0;
  $user->address = $request->address;
  $user->city = $request->city;
  $user->lang = $request->lang;
  $user->code_expires_at = $request->code_expires_at;
  $user->code = $request->code;
  $user->user_type_id = $request->user_type_id;
  $user->gender_id = $request->gender_id;
  $user->birthday = $request->birthday;

  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->flag = '/'.$destinationPath."/".$fileName;

      }}

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->image = '/'.$destinationPath."/".$fileName;

      }}
  $user->email_verified_at = $request->email_verified_at;
  $user->email = $request->email;
  $user->phone_number = $request->phone_number;
  $user->last_name = $request->last_name;
  $user->first_name = $request->first_name;



                        $save = $user->save();

                        if($save) {

                    $ResponseMessage =  ($lang=='ar') ?  "user saved successfully" : "user saved successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user);

                        }else{
                    $ResponseMessage =  ($lang=='ar') ?  "arabic error msg" : "english error msg";
                    $check_success =  $this->custom_error($ResponseMessage);
                        }
                    return $check_success;
                        }




                    public function update_user(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                        
                    $user_id =  $request->user_id;
                    


         $conditions = [ 'user_id' => 'required|exists:users,id'];
                  if(isset($request->user_type_id)) {
                $conditions['user_type_id'] = 'required|exists:user_types,id';
                  }                  if(isset($request->gender_id)) {
                $conditions['gender_id'] = 'required|exists:genders,id';
                  }        
          $all_request = $request->all();
   $check_failure =  $this->check_failure($all_request,$conditions);
   if($check_failure){
       return $check_failure;
   }
   // check_failure

        $user = User::find($user_id);

                    // update
      if(isset($request->subdomain_id)) {
  $user->subdomain_id = $request->subdomain_id;
                                   }  if(isset($request->subscription_date)) {
  $user->subscription_date = $request->subscription_date;
                                   }  if(isset($request->package_id)) {
  $user->package_id = $request->package_id;
                                   }  $user->is_verified = ($request->is_verified) ? $request->is_verified : 0;
  $user->is_active = ($request->is_active) ? $request->is_active : 0;
  if(isset($request->address)) {
  $user->address = $request->address;
                                   }  if(isset($request->city)) {
  $user->city = $request->city;
                                   }  if(isset($request->lang)) {
  $user->lang = $request->lang;
                                   }  if(isset($request->code_expires_at)) {
  $user->code_expires_at = $request->code_expires_at;
                                   }  if(isset($request->code)) {
  $user->code = $request->code;
                                   }  if(isset($request->user_type_id)) {
  $user->user_type_id = $request->user_type_id;
                                   }  if(isset($request->gender_id)) {
  $user->gender_id = $request->gender_id;
                                   }  if(isset($request->birthday)) {
  $user->birthday = $request->birthday;
                                   }  if(isset($request->flag)) {
  if ($request->hasFile('flag')) {
  if ($request->file('flag')->isValid()) {
  $file = $request->file('flag');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->flag = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->image)) {
  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/users';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $user->image = '/'.$destinationPath."/".$fileName;

      }}

      }
  if(isset($request->email_verified_at)) {
  $user->email_verified_at = $request->email_verified_at;
                                   }  if(isset($request->email)) {
  $user->email = $request->email;
                                   }  if(isset($request->phone_number)) {
  $user->phone_number = $request->phone_number;
                                   }  if(isset($request->last_name)) {
  $user->last_name = $request->last_name;
                                   }  if(isset($request->first_name)) {
  $user->first_name = $request->first_name;
                                   }

      //  $columns = DB::getSchemaBuilder()->getColumnListing('users');
       // foreach($request->all() as $key => $value){
      // if(in_array($key,$columns)){
        // $user->$key = $value;
      // }
      //  }
                  $user->update();
                    $ResponseMessage =  ($lang=='ar') ?  "user updated successfully" : "user updated successfully";
                    $check_success =  $this->check_success($ResponseMessage,$user);

                    return $check_success;

               }



                    public function delete_user(Request $request)
                    {

                    if(isset($request->lang)) {
                        $lang = ($request->lang == 'ar') ? 'ar' : 'en';
                    }else{
                        $lang = 'ar';
                    }
                        App::setLocale($lang);

                    // check_failure
                    $conditions = ['user_id' => 'required|exists:users,id'] ;
                    $all_request = $request->all();
                    $check_failure =  $this->check_failure($all_request,$conditions);
                    if($check_failure){
                    return $check_failure;
                    }
                    // check_failure
                    $user_id =  $request->user_id;

                    $user = User::select('users.*')->find($user_id);
                    $delete =  $user->delete();

                    $ResponseMessage =  ($lang=='ar') ?  "user deleted successfully" : "user deleted successfully";
                    $check_success =  $this->custom_success($ResponseMessage);
                    return $check_success;



                                    }
}