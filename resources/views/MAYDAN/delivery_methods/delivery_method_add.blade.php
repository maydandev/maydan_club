@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('delivery_methods_delivery_methods') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('delivery_methods.index') }}">{{ __('delivery_methods_delivery_methods') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new delivery_methods_Delivery_method') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/delivery_methods') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_name')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('delivery_methods_name')" value="{{ old('name') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_country_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('delivery_methods_country_id')" value="{{ old('country_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_city_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="city_id" placeholder="@lang('delivery_methods_city_id')" value="{{ old('city_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('delivers_min') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_delivers_min')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="delivers_min" placeholder="@lang('delivery_methods_delivers_min')" value="{{ old('delivers_min') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('delivers_min'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_min') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('delivers_max') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_delivers_max')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="delivers_max" placeholder="@lang('delivery_methods_delivers_max')" value="{{ old('delivers_max') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('delivers_max'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_max') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('delivers_unit_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_delivers_unit_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="delivers_unit_id" placeholder="@lang('delivery_methods_delivers_unit_id')" value="{{ old('delivers_unit_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('delivers_unit_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_unit_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('fees') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_fees')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="fees" placeholder="@lang('delivery_methods_fees')" value="{{ old('fees') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('fees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fees') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('min_amount') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('delivery_methods_min_amount')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="min_amount" placeholder="@lang('delivery_methods_min_amount')" value="{{ old('min_amount') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('min_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_amount') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

           <div class="form-group">
            <label class="col-md-4 control-label  ">@lang('delivery_methods_is_cod')  </label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_cod" value="1"  checked="checked"   class="ace ace-switch ace-switch-2" type="checkbox" />
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
