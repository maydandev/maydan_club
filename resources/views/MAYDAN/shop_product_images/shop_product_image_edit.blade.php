@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_product_images_shop_product_images')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_product_images_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_product_images">     @lang('messages.shop_product_images_shop_product_images')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_product_images/create" title = "@lang('messages.shop_product_images_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_product_images_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_product_images') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('shop_product_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_product_images_shop_product_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_product_id" placeholder="@lang('messages.shop_product_images_shop_product_id')" value="{{ $shop_product_image->shop_product_id }}">
                                @if ($errors->has('shop_product_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_product_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_product_images_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_product_image->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.shop_product_images_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $shop_product_image->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.shop_product_images_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($shop_product_image->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_product_images_update') 
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
