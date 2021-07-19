@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('shop_orders_shop_orders') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('shop_orders.index') }}">{{ __('shop_orders_shop_orders') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new shop_orders_shop_order') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_orders') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_user_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('shop_orders_user_id')" value="{{ old('user_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_application_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('shop_orders_application_id')" value="{{ old('application_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('shop_order_status_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_shop_order_status_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="shop_order_status_id" placeholder="@lang('shop_orders_shop_order_status_id')" value="{{ old('shop_order_status_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('shop_order_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_order_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('last_modified') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_last_modified')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="last_modified" placeholder="@lang('shop_orders_last_modified')" value="{{ old('last_modified') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('last_modified'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_modified') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('date_purchased') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_date_purchased')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="date_purchased" placeholder="@lang('shop_orders_date_purchased')" value="{{ old('date_purchased') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('date_purchased'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_purchased') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('order_date_finished') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_order_date_finished')</label>
                            <div class="col-md-6 controls ">
                                <input type="date" class="form-control" name="order_date_finished" placeholder="@lang('shop_orders_order_date_finished')" value="{{ old('order_date_finished') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('order_date_finished'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_date_finished') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_currency')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="currency" placeholder="@lang('shop_orders_currency')" value="{{ old('currency') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('currency_value') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_currency_value')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="currency_value" placeholder="@lang('shop_orders_currency_value')" value="{{ old('currency_value') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('currency_value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency_value') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('order_price') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_order_price')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="order_price" placeholder="@lang('shop_orders_order_price')" value="{{ old('order_price') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('order_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('total_tax') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_total_tax')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="total_tax" placeholder="@lang('shop_orders_total_tax')" value="{{ old('total_tax') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('total_tax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_tax') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('payment_method') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_payment_method')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="payment_method" placeholder="@lang('shop_orders_payment_method')" value="{{ old('payment_method') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('payment_method'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment_method') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('shipping_cost') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_shipping_cost')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="shipping_cost" placeholder="@lang('shop_orders_shipping_cost')" value="{{ old('shipping_cost') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('shipping_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_cost') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('shipping_method') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_shipping_method')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="shipping_method" placeholder="@lang('shop_orders_shipping_method')" value="{{ old('shipping_method') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('shipping_method'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_method') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('free_shipping') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_free_shipping')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="free_shipping" placeholder="@lang('shop_orders_free_shipping')" value="{{ old('free_shipping') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('free_shipping'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('free_shipping') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('shipping_duration') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_shipping_duration')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="shipping_duration" placeholder="@lang('shop_orders_shipping_duration')" value="{{ old('shipping_duration') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('shipping_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_duration') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('order_information') ? ' has-error' : '' }}">
                             <label class="col-md-4 control-label  "> @lang('messages.shop_orders_order_information')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="order_information" placeholder="@lang('messages.shop_orders_order_information')"  >{{ old('order_information') }}</textarea>
                                @if ($errors->has('order_information'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_information') }}</strong>
                                    </span>
                                @endif
                            </div>


    </div>


       <div class="form-group{{ $errors->has('is_seen') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_is_seen')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="is_seen" placeholder="@lang('shop_orders_is_seen')" value="{{ old('is_seen') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('is_seen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_seen') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('coupon_code') ? ' has-error' : '' }}">
                             <label class="col-md-4 control-label  "> @lang('messages.shop_orders_coupon_code')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="coupon_code" placeholder="@lang('messages.shop_orders_coupon_code')"  >{{ old('coupon_code') }}</textarea>
                                @if ($errors->has('coupon_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_code') }}</strong>
                                    </span>
                                @endif
                            </div>


    </div>


       <div class="form-group{{ $errors->has('coupon_amount') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_coupon_amount')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="coupon_amount" placeholder="@lang('shop_orders_coupon_amount')" value="{{ old('coupon_amount') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('coupon_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_amount') }}</strong>
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
