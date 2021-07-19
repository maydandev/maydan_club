@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.delivery_methods_delivery_methods')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.delivery_methods_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/delivery_methods">     @lang('messages.delivery_methods_delivery_methods')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/delivery_methods/create" title = "@lang('messages.delivery_methods_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.delivery_methods_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/delivery_methods') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('delivery_methods_application_id')" value="{{ $delivery_method->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('delivery_methods_name')" value="{{ $delivery_method->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('delivery_methods_en_name')" value="{{ $delivery_method->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_country_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('delivery_methods_country_id')" value="{{ $delivery_method->country_id }}">
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_city_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="city_id" placeholder="@lang('delivery_methods_city_id')" value="{{ $delivery_method->city_id }}">
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_min') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_min')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_min" placeholder="@lang('delivery_methods_delivers_min')" value="{{ $delivery_method->delivers_min }}">
                                @if ($errors->has('delivers_min'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_min') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_max') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_max')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_max" placeholder="@lang('delivery_methods_delivers_max')" value="{{ $delivery_method->delivers_max }}">
                                @if ($errors->has('delivers_max'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_max') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_unit_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_unit_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_unit_id" placeholder="@lang('delivery_methods_delivers_unit_id')" value="{{ $delivery_method->delivers_unit_id }}">
                                @if ($errors->has('delivers_unit_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_unit_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('fees') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_fees')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fees" placeholder="@lang('delivery_methods_fees')" value="{{ $delivery_method->fees }}">
                                @if ($errors->has('fees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fees') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('min_amount') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_min_amount')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="min_amount" placeholder="@lang('delivery_methods_min_amount')" value="{{ $delivery_method->min_amount }}">
                                @if ($errors->has('min_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_amount') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_cod') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_is_cod')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_cod" placeholder="@lang('delivery_methods_is_cod')" value="{{ $delivery_method->is_cod }}">
                                @if ($errors->has('is_cod'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_cod') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.delivery_methods_update') 
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
							       @lang('messages.delivery_methods_delivery_methods')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.delivery_methods_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/delivery_methods">     @lang('messages.delivery_methods_delivery_methods')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/delivery_methods/create" title = "@lang('messages.delivery_methods_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.delivery_methods_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/delivery_methods') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('delivery_methods_name')" value="{{ $delivery_method->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_country_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('delivery_methods_country_id')" value="{{ $delivery_method->country_id }}">
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_city_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="city_id" placeholder="@lang('delivery_methods_city_id')" value="{{ $delivery_method->city_id }}">
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_min') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_min')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_min" placeholder="@lang('delivery_methods_delivers_min')" value="{{ $delivery_method->delivers_min }}">
                                @if ($errors->has('delivers_min'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_min') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_max') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_max')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_max" placeholder="@lang('delivery_methods_delivers_max')" value="{{ $delivery_method->delivers_max }}">
                                @if ($errors->has('delivers_max'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_max') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_unit_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_unit_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_unit_id" placeholder="@lang('delivery_methods_delivers_unit_id')" value="{{ $delivery_method->delivers_unit_id }}">
                                @if ($errors->has('delivers_unit_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_unit_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('fees') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_fees')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fees" placeholder="@lang('delivery_methods_fees')" value="{{ $delivery_method->fees }}">
                                @if ($errors->has('fees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fees') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('min_amount') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_min_amount')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="min_amount" placeholder="@lang('delivery_methods_min_amount')" value="{{ $delivery_method->min_amount }}">
                                @if ($errors->has('min_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_amount') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_cod') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_is_cod')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_cod" placeholder="@lang('delivery_methods_is_cod')" value="{{ $delivery_method->is_cod }}">
                                @if ($errors->has('is_cod'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_cod') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.delivery_methods_update') 
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
							       @lang('messages.delivery_methods_delivery_methods')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.delivery_methods_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/delivery_methods">     @lang('messages.delivery_methods_delivery_methods')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/delivery_methods/create" title = "@lang('messages.delivery_methods_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.delivery_methods_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/delivery_methods') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('delivery_methods_name')" value="{{ $delivery_method->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_country_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('delivery_methods_country_id')" value="{{ $delivery_method->country_id }}">
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_city_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="city_id" placeholder="@lang('delivery_methods_city_id')" value="{{ $delivery_method->city_id }}">
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_min') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_min')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_min" placeholder="@lang('delivery_methods_delivers_min')" value="{{ $delivery_method->delivers_min }}">
                                @if ($errors->has('delivers_min'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_min') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_max') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_max')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_max" placeholder="@lang('delivery_methods_delivers_max')" value="{{ $delivery_method->delivers_max }}">
                                @if ($errors->has('delivers_max'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_max') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_unit_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_unit_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_unit_id" placeholder="@lang('delivery_methods_delivers_unit_id')" value="{{ $delivery_method->delivers_unit_id }}">
                                @if ($errors->has('delivers_unit_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_unit_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('fees') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_fees')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fees" placeholder="@lang('delivery_methods_fees')" value="{{ $delivery_method->fees }}">
                                @if ($errors->has('fees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fees') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('min_amount') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_min_amount')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="min_amount" placeholder="@lang('delivery_methods_min_amount')" value="{{ $delivery_method->min_amount }}">
                                @if ($errors->has('min_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_amount') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_cod') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_is_cod')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_cod" placeholder="@lang('delivery_methods_is_cod')" value="{{ $delivery_method->is_cod }}">
                                @if ($errors->has('is_cod'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_cod') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.delivery_methods_update') 
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
							       @lang('messages.delivery_methods_delivery_methods')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.delivery_methods_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/delivery_methods">     @lang('messages.delivery_methods_delivery_methods')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/delivery_methods/create" title = "@lang('messages.delivery_methods_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.delivery_methods_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/delivery_methods') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('delivery_methods_name')" value="{{ $delivery_method->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_country_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('delivery_methods_country_id')" value="{{ $delivery_method->country_id }}">
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_city_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="city_id" placeholder="@lang('delivery_methods_city_id')" value="{{ $delivery_method->city_id }}">
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_min') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_min')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_min" placeholder="@lang('delivery_methods_delivers_min')" value="{{ $delivery_method->delivers_min }}">
                                @if ($errors->has('delivers_min'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_min') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_max') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_max')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_max" placeholder="@lang('delivery_methods_delivers_max')" value="{{ $delivery_method->delivers_max }}">
                                @if ($errors->has('delivers_max'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_max') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivers_unit_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_delivers_unit_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="delivers_unit_id" placeholder="@lang('delivery_methods_delivers_unit_id')" value="{{ $delivery_method->delivers_unit_id }}">
                                @if ($errors->has('delivers_unit_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivers_unit_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('fees') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_fees')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fees" placeholder="@lang('delivery_methods_fees')" value="{{ $delivery_method->fees }}">
                                @if ($errors->has('fees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fees') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('min_amount') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_min_amount')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="min_amount" placeholder="@lang('delivery_methods_min_amount')" value="{{ $delivery_method->min_amount }}">
                                @if ($errors->has('min_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_amount') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('delivery_methods_is_cod')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_cod" value="1"  <?php echo ($delivery_method->is_cod == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.delivery_methods_update') 
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
