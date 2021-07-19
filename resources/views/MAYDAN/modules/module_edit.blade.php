@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.modules_modules')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.modules_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/modules">     @lang('messages.modules_modules')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/modules/create" title = "@lang('messages.modules_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.modules_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/modules') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.modules_name')" value="{{ $module->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('messages.modules_en_name')" value="{{ $module->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('route') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_route')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="route" placeholder="@lang('messages.modules_route')" value="{{ $module->route }}">
                                @if ($errors->has('route'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('route') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $module->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $module->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.modules_icon')" value="{{ $module->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_parent_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="parent_id" placeholder="@lang('messages.modules_parent_id')" value="{{ $module->parent_id }}">
                                @if ($errors->has('parent_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('user_type_ids') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_user_type_ids')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="user_type_ids" placeholder="@lang('messages.modules_user_type_ids')" value="{{ $module->user_type_ids }}">
                                @if ($errors->has('user_type_ids'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type_ids') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('app_type') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_app_type')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="app_type" placeholder="@lang('messages.modules_app_type')" value="{{ $module->app_type }}">
                                @if ($errors->has('app_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('app_type') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('sorting') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.modules_sorting')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="sorting" placeholder="@lang('messages.modules_sorting')" value="{{ $module->sorting }}">
                                @if ($errors->has('sorting'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sorting') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.modules_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($module->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.modules_update') 
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
