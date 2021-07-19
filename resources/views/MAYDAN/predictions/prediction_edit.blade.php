@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.predictions_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/predictions">     @lang('messages.predictions_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/predictions/create" title = "@lang('messages.predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/predictions') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('predictions_post_id')" value="{{ $prediction->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('prediction_type_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_prediction_type_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="prediction_type_id" placeholder="@lang('predictions_prediction_type_id')" value="{{ $prediction->prediction_type_id }}">
                                @if ($errors->has('prediction_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prediction_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('predictors') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_predictors')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="predictors" placeholder="@lang('predictions_predictors')" value="{{ $prediction->predictors }}">
                                @if ($errors->has('predictors'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('predictors') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('correct_predictions') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_correct_predictions')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="correct_predictions" placeholder="@lang('predictions_correct_predictions')" value="{{ $prediction->correct_predictions }}">
                                @if ($errors->has('correct_predictions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correct_predictions') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('correct_predictors') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_correct_predictors')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="correct_predictors" placeholder="@lang('predictions_correct_predictors')" value="{{ $prediction->correct_predictors }}">
                                @if ($errors->has('correct_predictors'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correct_predictors') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('predictions_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($prediction->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.predictions_update') 
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
							       @lang('messages.predictions_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/predictions">     @lang('messages.predictions_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/predictions/create" title = "@lang('messages.predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/predictions') }}">
                        {!! csrf_field() !!}

                        


 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.predictions_update') 
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
							       @lang('messages.predictions_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/predictions">     @lang('messages.predictions_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/predictions/create" title = "@lang('messages.predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/predictions') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('predictions_post_id')" value="{{ $prediction->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('prediction_type_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_prediction_type_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="prediction_type_id" placeholder="@lang('predictions_prediction_type_id')" value="{{ $prediction->prediction_type_id }}">
                                @if ($errors->has('prediction_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prediction_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('predictors') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_predictors')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="predictors" placeholder="@lang('predictions_predictors')" value="{{ $prediction->predictors }}">
                                @if ($errors->has('predictors'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('predictors') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('correct_predictions') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_correct_predictions')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="correct_predictions" placeholder="@lang('predictions_correct_predictions')" value="{{ $prediction->correct_predictions }}">
                                @if ($errors->has('correct_predictions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correct_predictions') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('correct_predictors') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('predictions_correct_predictors')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="correct_predictors" placeholder="@lang('predictions_correct_predictors')" value="{{ $prediction->correct_predictors }}">
                                @if ($errors->has('correct_predictors'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correct_predictors') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('predictions_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($prediction->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.predictions_update') 
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
							       @lang('messages.predictions_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/predictions">     @lang('messages.predictions_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/predictions/create" title = "@lang('messages.predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/predictions') }}">
                        {!! csrf_field() !!}

                        @extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.predictions_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/predictions">     @lang('messages.predictions_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/predictions/create" title = "@lang('messages.predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/predictions') }}">
                        {!! csrf_field() !!}

                        

           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('predictions_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($prediction->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.predictions_update') 
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
