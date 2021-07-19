@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('settings_settings') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">{{ __('settings_settings') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new settings_setting') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/settings') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

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
                                           


                 


                             <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label  ">  @lang('messages.settings_club_id')  </label>
                            <div class="col-md-6  ">
                            <select class="form-control" name="club_id" >

                            @foreach($clubs as $club)
                             <option    value="{{ $club->id }}" >{{ $club->code }}</option>
                             @endforeach
                            </select>
                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_application_id')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.settings_application_id')" value="{{ old('application_id') }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_final_match') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_is_final_match')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="is_final_match" placeholder="@lang('messages.settings_is_final_match')" value="{{ old('is_final_match') }}">
                                @if ($errors->has('is_final_match'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_final_match') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('final_match_note') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_final_match_note')</label>
                            <div class="col-md-6  ">
                                <input type="text" class="form-control" name="final_match_note" placeholder="@lang('messages.settings_final_match_note')" value="{{ old('final_match_note') }}">
                                @if ($errors->has('final_match_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_match_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('final_match_points') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_final_match_points')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="final_match_points" placeholder="@lang('messages.settings_final_match_points')" value="{{ old('final_match_points') }}">
                                @if ($errors->has('final_match_points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_match_points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_match_lineup') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_is_match_lineup')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="is_match_lineup" placeholder="@lang('messages.settings_is_match_lineup')" value="{{ old('is_match_lineup') }}">
                                @if ($errors->has('is_match_lineup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_match_lineup') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('match_lineup_note') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_match_lineup_note')</label>
                            <div class="col-md-6  ">
                                <input type="text" class="form-control" name="match_lineup_note" placeholder="@lang('messages.settings_match_lineup_note')" value="{{ old('match_lineup_note') }}">
                                @if ($errors->has('match_lineup_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('match_lineup_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('match_lineup_points') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_match_lineup_points')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="match_lineup_points" placeholder="@lang('messages.settings_match_lineup_points')" value="{{ old('match_lineup_points') }}">
                                @if ($errors->has('match_lineup_points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('match_lineup_points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_first_scorer') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_is_first_scorer')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="is_first_scorer" placeholder="@lang('messages.settings_is_first_scorer')" value="{{ old('is_first_scorer') }}">
                                @if ($errors->has('is_first_scorer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_first_scorer') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('first_scorer_note') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_first_scorer_note')</label>
                            <div class="col-md-6  ">
                                <input type="text" class="form-control" name="first_scorer_note" placeholder="@lang('messages.settings_first_scorer_note')" value="{{ old('first_scorer_note') }}">
                                @if ($errors->has('first_scorer_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_scorer_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('first_scorer_points') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_first_scorer_points')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="first_scorer_points" placeholder="@lang('messages.settings_first_scorer_points')" value="{{ old('first_scorer_points') }}">
                                @if ($errors->has('first_scorer_points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_scorer_points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_shop') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_is_shop')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="is_shop" placeholder="@lang('messages.settings_is_shop')" value="{{ old('is_shop') }}">
                                @if ($errors->has('is_shop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_shop') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shop_note') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_shop_note')</label>
                            <div class="col-md-6  ">
                                <input type="text" class="form-control" name="shop_note" placeholder="@lang('messages.settings_shop_note')" value="{{ old('shop_note') }}">
                                @if ($errors->has('shop_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_collect_and_pickup') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_is_collect_and_pickup')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="is_collect_and_pickup" placeholder="@lang('messages.settings_is_collect_and_pickup')" value="{{ old('is_collect_and_pickup') }}">
                                @if ($errors->has('is_collect_and_pickup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_collect_and_pickup') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('collect_and_pickup_note') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_collect_and_pickup_note')</label>
                            <div class="col-md-6  ">
                                <input type="text" class="form-control" name="collect_and_pickup_note" placeholder="@lang('messages.settings_collect_and_pickup_note')" value="{{ old('collect_and_pickup_note') }}">
                                @if ($errors->has('collect_and_pickup_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('collect_and_pickup_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_delivery_and_shipping') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_is_delivery_and_shipping')</label>
                            <div class="col-md-6  ">
                                <input type="number" class="form-control" name="is_delivery_and_shipping" placeholder="@lang('messages.settings_is_delivery_and_shipping')" value="{{ old('is_delivery_and_shipping') }}">
                                @if ($errors->has('is_delivery_and_shipping'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_delivery_and_shipping') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivery_and_shipping_note') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.settings_delivery_and_shipping_note')</label>
                            <div class="col-md-6  ">
                                <input type="text" class="form-control" name="delivery_and_shipping_note" placeholder="@lang('messages.settings_delivery_and_shipping_note')" value="{{ old('delivery_and_shipping_note') }}">
                                @if ($errors->has('delivery_and_shipping_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivery_and_shipping_note') }}</strong>
                                    </span>
                                @endif
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
