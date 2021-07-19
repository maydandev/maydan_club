@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_order_details_shop_order_details')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_order_details_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_order_details">     @lang('messages.shop_order_details_shop_order_details')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_order_details/create" title = "@lang('messages.shop_order_details_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_order_details_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_order_details') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('shop_order_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_shop_order_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_order_id" placeholder="@lang('messages.shop_order_details_shop_order_id')" value="{{ $shop_order_detail->shop_order_id }}">
                                @if ($errors->has('shop_order_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_order_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shop_product_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_shop_product_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_product_id" placeholder="@lang('messages.shop_order_details_shop_product_id')" value="{{ $shop_order_detail->shop_product_id }}">
                                @if ($errors->has('shop_product_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_product_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('products_model') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_products_model')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="products_model" placeholder="@lang('messages.shop_order_details_products_model')" value="{{ $shop_order_detail->products_model }}">
                                @if ($errors->has('products_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('products_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('products_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_products_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="products_name" placeholder="@lang('messages.shop_order_details_products_name')" value="{{ $shop_order_detail->products_name }}">
                                @if ($errors->has('products_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('products_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('products_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_products_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="products_price" placeholder="@lang('messages.shop_order_details_products_price')" value="{{ $shop_order_detail->products_price }}">
                                @if ($errors->has('products_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('products_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('final_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_final_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="final_price" placeholder="@lang('messages.shop_order_details_final_price')" value="{{ $shop_order_detail->final_price }}">
                                @if ($errors->has('final_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('products_tax') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_products_tax')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="products_tax" placeholder="@lang('messages.shop_order_details_products_tax')" value="{{ $shop_order_detail->products_tax }}">
                                @if ($errors->has('products_tax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('products_tax') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('products_quantity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_order_details_products_quantity')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="products_quantity" placeholder="@lang('messages.shop_order_details_products_quantity')" value="{{ $shop_order_detail->products_quantity }}">
                                @if ($errors->has('products_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('products_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_order_details_update') 
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
