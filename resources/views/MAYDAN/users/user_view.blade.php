@extends('layouts.app')
@section('content-header')

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('users_users') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ __('users_users') }}</a>
                                    </li>
								     <li class="breadcrumb-item active">  @lang('users_show_title') {{$user->id}}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div-->
 
@endsection

@section('content')
  <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                      @if (Session::has('message'))

                                     <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                                {!! session('message') !!}
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @endif
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/users/{{$user->id}}"   enctype="multipart/form-data"  novalidate>

  {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                                            <!--div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" placeholder="First Name" required data-validation-required-message="This First Name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required data-validation-required-message="This Email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div-->
                                           




                 



                        

       <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_first_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="first_name" placeholder="@lang('users_first_name')" value="{{ $user->first_name }}">
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_last_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="last_name" placeholder="@lang('users_last_name')" value="{{ $user->last_name }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_phone_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('users_phone_number')" value="{{ $user->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('users_email')" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email_verified_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email_verified_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="email_verified_at" placeholder="@lang('users_email_verified_at')" value="{{ $user->email_verified_at }}">
                                @if ($errors->has('email_verified_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_verified_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $user->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->flag }}" alt="flag" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="flag" placeholder="flag" value="{{ $user->flag }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_birthday')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="birthday" placeholder="@lang('users_birthday')" value="{{ $user->birthday }}">
                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_gender_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="gender_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($user->gender_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('gender_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_user_type_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="user_type_id" >

                            @foreach($user_types as $user_type)
                             <option  <?php echo ($user->user_type_id == $user_type->id) ? 'selected="selected"' : '' ; ?>    value="{{ $user_type->id }}" >{{ $user_type->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('user_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="code" placeholder="@lang('users_code')" value="{{ $user->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('code_expires_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code_expires_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="code_expires_at" placeholder="@lang('users_code_expires_at')" value="{{ $user->code_expires_at }}">
                                @if ($errors->has('code_expires_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_expires_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_lang')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="lang" placeholder="@lang('users_lang')" value="{{ $user->lang }}">
                                @if ($errors->has('lang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lang') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_city')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="city" placeholder="@lang('users_city')" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_address')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="address" placeholder="@lang('users_address')" value="{{ $user->address }}">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($user->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_verified')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_verified" value="1"  <?php echo ($user->is_verified == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



  


     



 


             <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


  <ul class="pager">
                 @if($previous)
											<li class="previous">
												<a href="/users/{{$previous}}"><i class="ace-icon fa fa-angle-double-right"></i> @lang('messages.previous')   </a>
											</li>
                @endif
                @if($next)
											<li class="next">
												<a href="/users/{{$next}}"> @lang('messages.next')   <i class="ace-icon fa fa-angle-double-left"></i> </a>
											</li>
                @endif
	</ul>

<!-- Simple Validation start  
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Form Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                      @if (Session::has('message'))

                                     <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                                {!! session('message') !!}
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @endif
                                        
                                        <p class="mt-1">Add <code>novalidate</code> attribute to form tag and <code>required</code> attribute to input tag.</p>
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" placeholder="First Name" required data-validation-required-message="This First Name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required data-validation-required-message="This Email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               Input Validation end  

               Multiple Rules Validation start  
                <section class="multiple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Validating multiple rules</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" placeholder="Your Email" required data-validation-required-message="The email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" placeholder="Your Password" required data-validation-required-message="The password field is required" minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="con-password" class="form-control" placeholder="Confirm Password" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
 
              Input Validation start  
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inputs Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>This field is required</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" data-validation-required-message="This field is required" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must only consist of numbers</label>
                                                        <div class="controls">
                                                            <input type="text" name="numeric" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters." placeholder="Enter Numbers only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Only alphabetic characters</label>
                                                        <div class="controls">
                                                            <input type="text" name="alpha" class="form-control" required data-validation-containsnumber-regex="^[a-zA-Z]+$" data-validation-containsnumber-message="The alpha field may only contain alphabetic characters." placeholder="Enter Character only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password Input Field</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" data-validation-required-message="This field is required" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Repeat password must match</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" data-validation-match-match="password" class="form-control" data-validation-required-message="Repeat password must match" placeholder="Repeat Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must be a valid email</label>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" data-validation-required-message="Must be a valid email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enter Number between 10 & 20</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-containsnumber-message="Enter Number between 10 & 20" min="10" max="20" required placeholder="Enter Number between 10 & 20">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must match the specified regular expression : ^([0-9]+)$ - numbers only</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" data-validation-containsnumber-regex="^([0-9]+)$" data-validation-containsnumber-message="The regex field format is invalid." placeholder="Enter specified regular expression" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Length should not be less than the specified length : 3</label>
                                                        <div class="controls">
                                                            <input type="text" name="minChar" class="form-control" data-validation-required-message="The min field must be at least 3 characters." minlength="3" placeholder="Enter minimum 3 characters">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>The digits field must be numeric and exactly contain 3 digits</label>
                                                        <div class="controls">
                                                            <input type="text" name="digit" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-required-message="The digits field must be numeric and exactly contain 3 digits" maxlength="3" minlength="3" placeholder="Enter Exactly 3 digits">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Only alphabetic characters, numbers, dashes or underscores</label>
                                                        <div class="controls">
                                                            <input type="text" name="reg-exp" class="form-control" data-validation-regex-regex="^[-a-zA-Z_\d]+$" data-validation-regex-message="Must Enter Character, Number, Dash or Uderscore" placeholder="Enter Character, Numbers, Dash, Uderscore" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must be a valid url</label>
                                                        <div class="controls">
                                                            <input type="text" name="url" class="form-control" data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" data-validation-regex-message="Must be a valid url" placeholder="Enter valid url" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
 

  		 


@endsection

