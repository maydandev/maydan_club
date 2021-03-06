@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('leaderboards_leaderboards') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('leaderboards.index') }}">{{ __('leaderboards_leaderboards') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new leaderboards_leaderboard') }} 
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
                                                <span aria-hidden="true">??</span>
                                            </button>
                                        </div>

                                        @endif
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/leaderboards') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('leaderboards_application_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('leaderboards_application_id')" value="{{ old('application_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('leaderboards_user_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('leaderboards_user_id')" value="{{ old('user_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('total_score') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('leaderboards_total_score')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="total_score" placeholder="@lang('leaderboards_total_score')" value="{{ old('total_score') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('total_score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_score') }}</strong>
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
