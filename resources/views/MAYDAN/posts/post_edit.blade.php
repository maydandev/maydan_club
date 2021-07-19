@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('messages.posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('messages.posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('messages.posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('messages.posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_type_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_post_type_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_type_id" placeholder="@lang('messages.posts_post_type_id')" value="{{ $post->post_type_id }}">
                                @if ($errors->has('post_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('count_views') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_count_views')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="count_views" placeholder="@lang('messages.posts_count_views')" value="{{ $post->count_views }}">
                                @if ($errors->has('count_views'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('count_views') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_post_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_url" placeholder="@lang('messages.posts_post_url')" value="{{ $post->post_url }}">
                                @if ($errors->has('post_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_post_platform')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="post_platform" placeholder="@lang('messages.posts_post_platform')" value="{{ $post->post_platform }}">
                                @if ($errors->has('post_platform'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.posts_application_id')" value="{{ $post->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.posts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($post->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('messages.posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('messages.posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('messages.posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('messages.posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('posts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($post->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('posts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($post->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('posts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($post->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
							       @lang('messages.posts_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/posts">     @lang('messages.posts_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/posts/create" title = "@lang('messages.posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('posts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($post->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.posts_update') 
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
