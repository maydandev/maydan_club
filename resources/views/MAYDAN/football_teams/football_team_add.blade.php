@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('football_teams_football_teams') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('football_teams.index') }}">{{ __('football_teams_football_teams') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new football_teams_football_team') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/football_teams') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_team_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="team_id" placeholder="@lang('football_teams_team_id')" value="{{ old('team_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('football_teams_name')" value="{{ old('name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_code')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="code" placeholder="@lang('football_teams_code')" value="{{ old('code') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_logo') </label>
                            <div class="col-md-6  ">
                                <input type="file" class="form-control" name="logo" placeholder="@lang('football_teams_logo')" value="{{ old('logo') }}">
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_national') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_is_national')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="is_national" placeholder="@lang('football_teams_is_national')" value="{{ old('is_national') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('is_national'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_national') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_country_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('football_teams_country_id')" value="{{ old('country_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('founded') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_founded')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="founded" placeholder="@lang('football_teams_founded')" value="{{ old('founded') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('founded'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('founded') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('venue_name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_venue_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="venue_name" placeholder="@lang('football_teams_venue_name')" value="{{ old('venue_name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('venue_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('venue_surface') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_venue_surface')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="venue_surface" placeholder="@lang('football_teams_venue_surface')" value="{{ old('venue_surface') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('venue_surface'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_surface') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('venue_address') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_venue_address')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="venue_address" placeholder="@lang('football_teams_venue_address')" value="{{ old('venue_address') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('venue_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('venue_city') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_venue_city')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="venue_city" placeholder="@lang('football_teams_venue_city')" value="{{ old('venue_city') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('venue_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('venue_capacity') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('football_teams_venue_capacity')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="venue_capacity" placeholder="@lang('football_teams_venue_capacity')" value="{{ old('venue_capacity') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('venue_capacity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_capacity') }}</strong>
                                    </span>
                                @endif
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
