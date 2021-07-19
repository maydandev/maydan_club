@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_categories_shop_categories')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_categories_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_categories">     @lang('messages.shop_categories_shop_categories')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_categories/create" title = "@lang('messages.shop_categories_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_categories_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_categories') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="category_name" placeholder="@lang('shop_categories_category_name')" value="{{ $shop_category->category_name }}">
                                @if ($errors->has('category_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('shop_categories_application_id')" value="{{ $shop_category->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('category_image') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_categories_category_image')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="category_image" placeholder="@lang('shop_categories_category_image')"  >{{ $shop_category->category_image }}</textarea>
                                @if ($errors->has('category_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('category_icon') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_categories_category_icon')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="category_icon" placeholder="@lang('shop_categories_category_icon')"  >{{ $shop_category->category_icon }}</textarea>
                                @if ($errors->has('category_icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_parent_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="parent_id" placeholder="@lang('shop_categories_parent_id')" value="{{ $shop_category->parent_id }}">
                                @if ($errors->has('parent_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('sort_order') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_sort_order')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="sort_order" placeholder="@lang('shop_categories_sort_order')" value="{{ $shop_category->sort_order }}">
                                @if ($errors->has('sort_order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sort_order') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('last_modified') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_last_modified')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="last_modified" placeholder="@lang('shop_categories_last_modified')" value="{{ $shop_category->last_modified }}">
                                @if ($errors->has('last_modified'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_modified') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('category_slug') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_slug')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="category_slug" placeholder="@lang('shop_categories_category_slug')" value="{{ $shop_category->category_slug }}">
                                @if ($errors->has('category_slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_slug') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('category_status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_status')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="category_status" placeholder="@lang('shop_categories_category_status')" value="{{ $shop_category->category_status }}">
                                @if ($errors->has('category_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_status') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_categories_update') 
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
							       @lang('messages.shop_categories_shop_categories')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_categories_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_categories">     @lang('messages.shop_categories_shop_categories')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_categories/create" title = "@lang('messages.shop_categories_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_categories_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_categories') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.shop_categories_shop_categories')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_categories_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_categories">     @lang('messages.shop_categories_shop_categories')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_categories/create" title = "@lang('messages.shop_categories_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_categories_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_categories') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="category_name" placeholder="@lang('shop_categories_category_name')" value="{{ $shop_category->category_name }}">
                                @if ($errors->has('category_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('category_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_category->category_image }}" alt="category_image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('category_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="category_image" placeholder="category_image" value="{{ $shop_category->category_image }}">
                                @if ($errors->has('category_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_categories_update') 
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
							       @lang('messages.shop_categories_shop_categories')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.shop_categories_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/shop_categories">     @lang('messages.shop_categories_shop_categories')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/shop_categories/create" title = "@lang('messages.shop_categories_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.shop_categories_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_categories') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="category_name" placeholder="@lang('shop_categories_category_name')" value="{{ $shop_category->category_name }}">
                                @if ($errors->has('category_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('category_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_category->category_image }}" alt="category_image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('category_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_categories_category_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="category_image" placeholder="category_image" value="{{ $shop_category->category_image }}">
                                @if ($errors->has('category_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.shop_categories_update') 
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
