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
                                   

								     <li class="breadcrumb-item active">{{ __('Add new users_User') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_first_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="first_name" placeholder="@lang('users_first_name')" value="{{ old('first_name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_last_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="last_name" placeholder="@lang('users_last_name')" value="{{ old('last_name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_phone_number')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('users_phone_number')" value="{{ old('phone_number') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_email')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('users_email')" value="{{ old('email') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_image') </label>
                            <div class="col-md-6  ">
                                <input type="file" class="form-control" name="image" placeholder="@lang('users_image')" value="{{ old('image') }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_flag') </label>
                            <div class="col-md-6  ">
                                <input type="file" class="form-control" name="flag" placeholder="@lang('users_flag')" value="{{ old('flag') }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_birthday')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="birthday" placeholder="@lang('users_birthday')" value="{{ old('birthday') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     
                             <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label  ">  @lang('users_gender_id')  </label>
                            <div class="col-md-6  ">
                            <select class="form-control" name="gender_id" >

                            @foreach($genders as $gender)
                             <option    value="{{ $gender->id }}" >{{ $gender->name }}</option>
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
                                 <label class="col-md-4 control-label  ">  @lang('users_user_type_id')  </label>
                            <div class="col-md-6  ">
                            <select class="form-control" name="user_type_id" >

                            @foreach($user_types as $user_type)
                             <option    value="{{ $user_type->id }}" >{{ $user_type->name }}</option>
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
         <label class="col-md-4 control-label  ">@lang('users_code')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="code" placeholder="@lang('users_code')" value="{{ old('code') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('code_expires_at') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_code_expires_at')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="code_expires_at" placeholder="@lang('users_code_expires_at')" value="{{ old('code_expires_at') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('code_expires_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_expires_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_lang')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="lang" placeholder="@lang('users_lang')" value="{{ old('lang') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('lang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lang') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_city')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="city" placeholder="@lang('users_city')" value="{{ old('city') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_address')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="address" placeholder="@lang('users_address')" value="{{ old('address') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

           <div class="form-group">
            <label class="col-md-4 control-label  ">@lang('users_is_active')  </label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  checked="checked"   class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



           <div class="form-group">
            <label class="col-md-4 control-label  ">@lang('users_is_verified')  </label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_verified" value="1"  checked="checked"   class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



 


             <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


 

  		 


@endsection
