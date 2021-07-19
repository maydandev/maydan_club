@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_products_shop_products')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_products_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_products">     @lang('messages.shop_products_shop_products')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_products/create" title = "@lang('messages.shop_products_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_products_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_products') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('shop_products_application_id')" value="{{ $shop_product->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shop_category_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_shop_category_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_category_id" placeholder="@lang('shop_products_shop_category_id')" value="{{ $shop_product->shop_category_id }}">
                                @if ($errors->has('shop_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_quantity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_quantity')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_quantity" placeholder="@lang('shop_products_product_quantity')" value="{{ $shop_product->product_quantity }}">
                                @if ($errors->has('product_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_model')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_model" placeholder="@lang('shop_products_product_model')" value="{{ $shop_product->product_model }}">
                                @if ($errors->has('product_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_image')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="product_image" placeholder="@lang('shop_products_product_image')"  >{{ $shop_product->product_image }}</textarea>
                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_video_link') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_video_link')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="product_video_link" placeholder="@lang('shop_products_product_video_link')"  >{{ $shop_product->product_video_link }}</textarea>
                                @if ($errors->has('product_video_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_video_link') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_price" placeholder="@lang('shop_products_product_price')" value="{{ $shop_product->product_price }}">
                                @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_last_modified') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_last_modified')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="product_last_modified" placeholder="@lang('shop_products_product_last_modified')" value="{{ $shop_product->product_last_modified }}">
                                @if ($errors->has('product_last_modified'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_last_modified') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_date_available') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_date_available')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="product_date_available" placeholder="@lang('shop_products_product_date_available')" value="{{ $shop_product->product_date_available }}">
                                @if ($errors->has('product_date_available'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_date_available') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_weight') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_weight')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_weight" placeholder="@lang('shop_products_product_weight')" value="{{ $shop_product->product_weight }}">
                                @if ($errors->has('product_weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_weight') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_weight_unit') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_weight_unit')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_weight_unit" placeholder="@lang('shop_products_product_weight_unit')" value="{{ $shop_product->product_weight_unit }}">
                                @if ($errors->has('product_weight_unit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_weight_unit') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_status')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_status" placeholder="@lang('shop_products_product_status')" value="{{ $shop_product->product_status }}">
                                @if ($errors->has('product_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_status') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_min_order') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_min_order')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_min_order" placeholder="@lang('shop_products_product_min_order')" value="{{ $shop_product->product_min_order }}">
                                @if ($errors->has('product_min_order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_min_order') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_desc') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_desc')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="product_desc" placeholder="@lang('shop_products_product_desc')"  >{{ $shop_product->product_desc }}</textarea>
                                @if ($errors->has('product_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_desc') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_products_update') 
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
							       @lang('messages.shop_products_shop_products')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_products_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_products">     @lang('messages.shop_products_shop_products')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_products/create" title = "@lang('messages.shop_products_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_products_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_products') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_products_shop_products')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_products_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_products">     @lang('messages.shop_products_shop_products')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_products/create" title = "@lang('messages.shop_products_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_products_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_products') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('shop_category_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_shop_category_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_category_id" placeholder="@lang('shop_products_shop_category_id')" value="{{ $shop_product->shop_category_id }}">
                                @if ($errors->has('shop_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_quantity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_quantity')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_quantity" placeholder="@lang('shop_products_product_quantity')" value="{{ $shop_product->product_quantity }}">
                                @if ($errors->has('product_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_model')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_model" placeholder="@lang('shop_products_product_model')" value="{{ $shop_product->product_model }}">
                                @if ($errors->has('product_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_product->product_image }}" alt="product_image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="product_image" placeholder="product_image" value="{{ $shop_product->product_image }}">
                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_price" placeholder="@lang('shop_products_product_price')" value="{{ $shop_product->product_price }}">
                                @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_status')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_status" placeholder="@lang('shop_products_product_status')" value="{{ $shop_product->product_status }}">
                                @if ($errors->has('product_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_status') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_products_update') 
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
							       @lang('messages.shop_products_shop_products')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_products_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_products">     @lang('messages.shop_products_shop_products')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_products/create" title = "@lang('messages.shop_products_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_products_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_products') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('shop_category_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_shop_category_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_category_id" placeholder="@lang('shop_products_shop_category_id')" value="{{ $shop_product->shop_category_id }}">
                                @if ($errors->has('shop_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_quantity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_quantity')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_quantity" placeholder="@lang('shop_products_product_quantity')" value="{{ $shop_product->product_quantity }}">
                                @if ($errors->has('product_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_model')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_model" placeholder="@lang('shop_products_product_model')" value="{{ $shop_product->product_model }}">
                                @if ($errors->has('product_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_product->product_image }}" alt="product_image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="product_image" placeholder="product_image" value="{{ $shop_product->product_image }}">
                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_price" placeholder="@lang('shop_products_product_price')" value="{{ $shop_product->product_price }}">
                                @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_products_update') 
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
