@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('fixtures_fixtures') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('fixtures.index') }}">{{ __('fixtures_fixtures') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new fixtures_fixture') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/fixtures') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('fixture_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_fixture_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="fixture_id" placeholder="@lang('fixtures_fixture_id')" value="{{ old('fixture_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('fixture_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixture_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_league_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="league_id" placeholder="@lang('fixtures_league_id')" value="{{ old('league_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('league_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('league_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('event_date') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_event_date')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="event_date" placeholder="@lang('fixtures_event_date')" value="{{ old('event_date') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('event_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_date') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('event_timestamp') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_event_timestamp')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="event_timestamp" placeholder="@lang('fixtures_event_timestamp')" value="{{ old('event_timestamp') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('event_timestamp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_timestamp') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('firstHalfStart') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_firstHalfStart')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="firstHalfStart" placeholder="@lang('fixtures_firstHalfStart')" value="{{ old('firstHalfStart') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('firstHalfStart'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstHalfStart') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('secondHalfStart') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_secondHalfStart')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="secondHalfStart" placeholder="@lang('fixtures_secondHalfStart')" value="{{ old('secondHalfStart') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('secondHalfStart'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondHalfStart') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('round') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_round')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="round" placeholder="@lang('fixtures_round')" value="{{ old('round') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('round'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('round') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_status')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="status" placeholder="@lang('fixtures_status')" value="{{ old('status') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('statusShort') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_statusShort')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="statusShort" placeholder="@lang('fixtures_statusShort')" value="{{ old('statusShort') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('statusShort'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('statusShort') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('elapsed') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_elapsed')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="elapsed" placeholder="@lang('fixtures_elapsed')" value="{{ old('elapsed') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('elapsed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('elapsed') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_venue')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="venue" placeholder="@lang('fixtures_venue')" value="{{ old('venue') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('venue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('referee') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_referee')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="referee" placeholder="@lang('fixtures_referee')" value="{{ old('referee') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('referee'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('referee') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('home_team_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_home_team_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="home_team_id" placeholder="@lang('fixtures_home_team_id')" value="{{ old('home_team_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('home_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('away_team_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_away_team_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="away_team_id" placeholder="@lang('fixtures_away_team_id')" value="{{ old('away_team_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('away_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('away_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('goalsHomeTeam') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_goalsHomeTeam')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="goalsHomeTeam" placeholder="@lang('fixtures_goalsHomeTeam')" value="{{ old('goalsHomeTeam') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('goalsHomeTeam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goalsHomeTeam') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('goalsAwayTeam') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_goalsAwayTeam')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="goalsAwayTeam" placeholder="@lang('fixtures_goalsAwayTeam')" value="{{ old('goalsAwayTeam') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('goalsAwayTeam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goalsAwayTeam') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('score_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('fixtures_score_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="score_id" placeholder="@lang('fixtures_score_id')" value="{{ old('score_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('score_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('score_id') }}</strong>
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
