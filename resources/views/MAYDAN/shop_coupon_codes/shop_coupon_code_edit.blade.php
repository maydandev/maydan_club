@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_coupon_codes_shop_coupon_codes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_coupon_codes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_coupon_codes">     @lang('messages.shop_coupon_codes_shop_coupon_codes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_coupon_codes/create" title = "@lang('messages.shop_coupon_codes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_coupon_codes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_coupon_codes') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_coupon_codes_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.shop_coupon_codes_application_id')" value="{{ $shop_coupon_code->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coupon_code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_coupon_codes_coupon_code')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="coupon_code" placeholder="@lang('messages.shop_coupon_codes_coupon_code')" value="{{ $shop_coupon_code->coupon_code }}">
                                @if ($errors->has('coupon_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_use') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_coupon_codes_is_use')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_use" placeholder="@lang('messages.shop_coupon_codes_is_use')" value="{{ $shop_coupon_code->is_use }}">
                                @if ($errors->has('is_use'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_use') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.shop_coupon_codes_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($shop_coupon_code->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('coupon_amout') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_coupon_codes_coupon_amout')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coupon_amout" placeholder="@lang('messages.shop_coupon_codes_coupon_amout')" value="{{ $shop_coupon_code->coupon_amout }}">
                                @if ($errors->has('coupon_amout'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_amout') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coupon_discount_type') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_coupon_codes_coupon_discount_type')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="coupon_discount_type" placeholder="@lang('messages.shop_coupon_codes_coupon_discount_type')" value="{{ $shop_coupon_code->coupon_discount_type }}">
                                @if ($errors->has('coupon_discount_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coupon_discount_type') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_coupon_codes_update') 
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
