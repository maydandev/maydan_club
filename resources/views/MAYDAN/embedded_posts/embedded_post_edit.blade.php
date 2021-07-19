@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

checkbox
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>
checkbox
                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

checkbox
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

 <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

 <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_color_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="color_id" >

                            @foreach($vote_statuses as $vote_status)
                             <option  <?php echo ($embedded_post->color_id == $vote_status->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote_status->id }}" >{{ $vote_status->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('color_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

 <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

 <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_color_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="color_id" >

                            @foreach($vote_statuses as $vote_status)
                             <option  <?php echo ($embedded_post->color_id == $vote_status->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote_status->id }}" >{{ $vote_status->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('color_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('en_name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_en_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="en_name_id" >

                            @foreach($vote_statuses as $vote_status)
                             <option  <?php echo ($embedded_post->en_name_id == $vote_status->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote_status->id }}" >{{ $vote_status->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('en_name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('percentage_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_percentage_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="percentage_id" >

                            @foreach($vote_question_options as $vote_question_option)
                             <option  <?php echo ($embedded_post->percentage_id == $vote_question_option->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote_question_option->id }}" >{{ $vote_question_option->vote_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('percentage_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('percentage_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('en_name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_en_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="en_name_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($embedded_post->en_name_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('en_name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_color_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="color_id" >

                            @foreach($vote_statuses as $vote_status)
                             <option  <?php echo ($embedded_post->color_id == $vote_status->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote_status->id }}" >{{ $vote_status->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('color_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('en_name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_en_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="en_name_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($embedded_post->en_name_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('en_name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('en_name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_en_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="en_name_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($embedded_post->en_name_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('en_name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($embedded_post->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('is_active_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_active_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('name_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_name_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="name_id" >

                            @foreach($platforms as $platform)
                             <option  <?php echo ($embedded_post->name_id == $platform->id) ? 'selected="selected"' : '' ; ?>    value="{{ $platform->id }}" >{{ $platform->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('name_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>Xxxxxxx
             <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Small</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Default</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked="" value="false">
                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Large</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                             <div class="form-group{{ $errors->has('football_team_id_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('embedded_posts_football_team_id_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="football_team_id_id" >

                            @foreach($football_team_posts as $football_team_post)
                             <option  <?php echo ($embedded_post->football_team_id_id == $football_team_post->id) ? 'selected="selected"' : '' ; ?>    value="{{ $football_team_post->id }}" >{{ $football_team_post->post_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('football_team_id_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
							       @lang('messages.embedded_posts_embedded_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.embedded_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/embedded_posts">     @lang('messages.embedded_posts_embedded_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/embedded_posts/create" title = "@lang('messages.embedded_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.embedded_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('embedded_posts_post_platform')" value="{{ $embedded_post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ $embedded_post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.embedded_posts_update') 
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
