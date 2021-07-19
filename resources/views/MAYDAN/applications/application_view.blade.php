@extends('layouts.app')
@section('content-header')

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('applications_applications') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('applications.index') }}">{{ __('applications_applications') }}</a>
                                    </li>
								     <li class="breadcrumb-item active">  @lang('messages.applications_show_title') {{$application->id}}
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/applications/{{$application->id}}"   enctype="multipart/form-data"  novalidate>

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
                                           


                 



                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.applications_name')" value="{{ $application->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.applications_icon')" value="{{ $application->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_language')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="language" placeholder="@lang('messages.applications_language')" value="{{ $application->language }}">
                                @if ($errors->has('language'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="primary_color" placeholder="@lang('messages.applications_primary_color')" value="{{ $application->primary_color }}">
                                @if ($errors->has('primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="secondary_color" placeholder="@lang('messages.applications_secondary_color')" value="{{ $application->secondary_color }}">
                                @if ($errors->has('secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('alternative_primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_alternative_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="alternative_primary_color" placeholder="@lang('messages.applications_alternative_primary_color')" value="{{ $application->alternative_primary_color }}">
                                @if ($errors->has('alternative_primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alternative_primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('alternative_secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_alternative_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="alternative_secondary_color" placeholder="@lang('messages.applications_alternative_secondary_color')" value="{{ $application->alternative_secondary_color }}">
                                @if ($errors->has('alternative_secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alternative_secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_gradient_primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_is_gradient_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_gradient_primary_color" placeholder="@lang('messages.applications_is_gradient_primary_color')" value="{{ $application->is_gradient_primary_color }}">
                                @if ($errors->has('is_gradient_primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_gradient_primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_gradient_secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_is_gradient_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_gradient_secondary_color" placeholder="@lang('messages.applications_is_gradient_secondary_color')" value="{{ $application->is_gradient_secondary_color }}">
                                @if ($errors->has('is_gradient_secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_gradient_secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_currency')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="currency" placeholder="@lang('messages.applications_currency')" value="{{ $application->currency }}">
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('club_logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_club_logo')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="club_logo" placeholder="@lang('messages.applications_club_logo')" value="{{ $application->club_logo }}">
                                @if ($errors->has('club_logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="team_id" placeholder="@lang('messages.applications_team_id')" value="{{ $application->team_id }}">
                                @if ($errors->has('team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('splash_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_splash_image')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="splash_image" placeholder="@lang('messages.applications_splash_image')" value="{{ $application->splash_image }}">
                                @if ($errors->has('splash_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('splash_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('current_league_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_current_league_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="current_league_id" placeholder="@lang('messages.applications_current_league_id')" value="{{ $application->current_league_id }}">
                                @if ($errors->has('current_league_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_league_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('current_season') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_current_season')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="current_season" placeholder="@lang('messages.applications_current_season')" value="{{ $application->current_season }}">
                                @if ($errors->has('current_season'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_season') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('base_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_base_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="base_url" placeholder="@lang('messages.applications_base_url')" value="{{ $application->base_url }}">
                                @if ($errors->has('base_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('base_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('configuration') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_configuration')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="configuration" placeholder="@lang('messages.applications_configuration')" value="{{ $application->configuration }}">
                                @if ($errors->has('configuration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('configuration') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_club_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="club_id" placeholder="@lang('messages.applications_club_id')" value="{{ $application->club_id }}">
                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
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


  <ul class="pager">
                 @if($previous)
											<li class="previous">
												<a href="/applications/{{$previous}}"><i class="ace-icon fa fa-angle-double-right"></i> @lang('messages.previous')   </a>
											</li>
                @endif
                @if($next)
											<li class="next">
												<a href="/applications/{{$next}}"> @lang('messages.next')   <i class="ace-icon fa fa-angle-double-left"></i> </a>
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

