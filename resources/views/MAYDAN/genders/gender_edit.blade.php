@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.genders_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.genders_name')" value="{{ $gender->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.genders_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('messages.genders_en_name')" value="{{ $gender->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('genders_name')" value="{{ $gender->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('genders_en_name')" value="{{ $gender->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('genders_is_active_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="is_active_id" >

                            @foreach($votes as $vote)
                             <option  <?php echo ($gender->is_active_id == $vote->id) ? 'selected="selected"' : '' ; ?>    value="{{ $vote->id }}" >{{ $vote->post_id }}</option>
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
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('genders_name')" value="{{ $gender->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('genders_en_name')" value="{{ $gender->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('genders_name')" value="{{ $gender->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('genders_en_name')" value="{{ $gender->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
							       @lang('messages.genders_genders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.genders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/genders">     @lang('messages.genders_genders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/genders/create" title = "@lang('messages.genders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.genders_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/genders') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('genders_name')" value="{{ $gender->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('genders_en_name')" value="{{ $gender->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_active_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('genders_is_active_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_active_id" placeholder="@lang('genders_is_active_id')" value="{{ $gender->is_active_id }}">
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
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.genders_update') 
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
