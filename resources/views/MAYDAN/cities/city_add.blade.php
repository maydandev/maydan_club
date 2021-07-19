@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('cities_cities') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('cities.index') }}">{{ __('cities_cities') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new cities_City') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/cities') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('cities_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('cities_name')" value="{{ old('name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('cities_en_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('cities_en_name')" value="{{ old('en_name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     
                             <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label  ">  @lang('cities_country_id')  </label>
                            <div class="col-md-6  ">
                            <select class="form-control" name="country_id" >

                            @foreach($countries as $country)
                             <option    value="{{ $country->id }}" >{{ $country->country }}</option>
                             @endforeach
                            </select>
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label  ">  @lang('cities_is_active_id')  </label>
                            <div class="col-md-6  ">
                            <select class="form-control" name="is_active_id" >

                            @foreach($votes as $vote)
                             <option    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>
                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
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
