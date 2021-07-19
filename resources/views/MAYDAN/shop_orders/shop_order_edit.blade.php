@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_orders_shop_orders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_orders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_orders">     @lang('messages.shop_orders_shop_orders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_orders/create" title = "@lang('messages.shop_orders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_orders_add_new') 
</a>
															</li>



														</ul>

														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>

                                                        		<a href="#" data-action="fullscreen" class="orange2">
														<i class="ace-icon fa fa-expand"></i>
													</a>

														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_orders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('shop_orders_user_id')" value="{{ $shop_order->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('shop_orders_application_id')" value="{{ $shop_order->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shop_order_status_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_shop_order_status_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_order_status_id" placeholder="@lang('shop_orders_shop_order_status_id')" value="{{ $shop_order->shop_order_status_id }}">
                                @if ($errors->has('shop_order_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_order_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('last_modified') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_last_modified')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="last_modified" placeholder="@lang('shop_orders_last_modified')" value="{{ $shop_order->last_modified }}">
                                @if ($errors->has('last_modified'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_modified') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('date_purchased') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_date_purchased')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="date_purchased" placeholder="@lang('shop_orders_date_purchased')" value="{{ $shop_order->date_purchased }}">
                                @if ($errors->has('date_purchased'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_purchased') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('order_date_finished') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_order_date_finished')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="order_date_finished" placeholder="@lang('shop_orders_order_date_finished')" value="{{ $shop_order->order_date_finished }}">
                                @if ($errors->has('order_date_finished'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_date_finished') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_currency')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="currency" placeholder="@lang('shop_orders_currency')" value="{{ $shop_order->currency }}">
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('currency_value') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_currency_value')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="currency_value" placeholder="@lang('shop_orders_currency_value')" value="{{ $shop_order->currency_value }}">
                                @if ($errors->has('currency_value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency_value') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('order_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_order_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="order_price" placeholder="@lang('shop_orders_order_price')" value="{{ $shop_order->order_price }}">
                                @if ($errors->has('order_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('total_tax') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_total_tax')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="total_tax" placeholder="@lang('shop_orders_total_tax')" value="{{ $shop_order->total_tax }}">
                                @if ($errors->has('total_tax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_tax') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('payment_method') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_payment_method')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="payment_method" placeholder="@lang('shop_orders_payment_method')" value="{{ $shop_order->payment_method }}">
                                @if ($errors->has('payment_method'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment_method') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shipping_cost') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_shipping_cost')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shipping_cost" placeholder="@lang('shop_orders_shipping_cost')" value="{{ $shop_order->shipping_cost }}">
                                @if ($errors->has('shipping_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_cost') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shipping_method') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_shipping_method')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="shipping_method" placeholder="@lang('shop_orders_shipping_method')" value="{{ $shop_order->shipping_method }}">
                                @if ($errors->has('shipping_method'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_method') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('free_shipping') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_free_shipping')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="free_shipping" placeholder="@lang('shop_orders_free_shipping')" value="{{ $shop_order->free_shipping }}">
                                @if ($errors->has('free_shipping'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('free_shipping') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shipping_duration') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_shipping_duration')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shipping_duration" placeholder="@lang('shop_orders_shipping_duration')" value="{{ $shop_order->shipping_duration }}">
                                @if ($errors->has('shipping_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_duration') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('order_information') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_order_information')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="order_information" placeholder="@lang('shop_orders_order_information')"  >{{ $shop_order->order_information }}</textarea>
                                @if ($errors->has('order_information'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_information') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_seen') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_is_seen')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_seen" placeholder="@lang('shop_orders_is_seen')" value="{{ $shop_order->is_seen }}">
                                @if ($errors->has('is_seen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_seen') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coupon_code') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_orders_coupon_code')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="coupon_code" placeholder="@lang('shop_orders_coupon_code')"  >{{ $shop_order->coupon_code }}</textarea>
                                @if ($errors->has('coupon_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coupon_amount') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_coupon_amount')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coupon_amount" placeholder="@lang('shop_orders_coupon_amount')" value="{{ $shop_order->coupon_amount }}">
                                @if ($errors->has('coupon_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_amount') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_orders_update') 
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
               </div>
                </div>
                </div>







@endsection
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_orders_shop_orders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_orders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_orders">     @lang('messages.shop_orders_shop_orders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_orders/create" title = "@lang('messages.shop_orders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_orders_add_new') 
</a>
															</li>



														</ul>

														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>

                                                        		<a href="#" data-action="fullscreen" class="orange2">
														<i class="ace-icon fa fa-expand"></i>
													</a>

														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_orders') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_orders_shop_orders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_orders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_orders">     @lang('messages.shop_orders_shop_orders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_orders/create" title = "@lang('messages.shop_orders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_orders_add_new') 
</a>
															</li>



														</ul>

														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>

                                                        		<a href="#" data-action="fullscreen" class="orange2">
														<i class="ace-icon fa fa-expand"></i>
													</a>

														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_orders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('shop_orders_user_id')" value="{{ $shop_order->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shop_order_status_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_shop_order_status_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_order_status_id" placeholder="@lang('shop_orders_shop_order_status_id')" value="{{ $shop_order->shop_order_status_id }}">
                                @if ($errors->has('shop_order_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_order_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_currency')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="currency" placeholder="@lang('shop_orders_currency')" value="{{ $shop_order->currency }}">
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('order_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_order_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="order_price" placeholder="@lang('shop_orders_order_price')" value="{{ $shop_order->order_price }}">
                                @if ($errors->has('order_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('payment_method') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_payment_method')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="payment_method" placeholder="@lang('shop_orders_payment_method')" value="{{ $shop_order->payment_method }}">
                                @if ($errors->has('payment_method'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment_method') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shipping_cost') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_orders_shipping_cost')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shipping_cost" placeholder="@lang('shop_orders_shipping_cost')" value="{{ $shop_order->shipping_cost }}">
                                @if ($errors->has('shipping_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_cost') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_orders_update') 
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
               </div>
                </div>
                </div>







@endsection
