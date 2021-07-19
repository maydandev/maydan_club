@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.notifications_notifications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.notifications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/notifications">     @lang('messages.notifications_notifications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/notifications/create" title = "@lang('messages.notifications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.notifications_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/notifications') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.notifications_application_id')" value="{{ $notification->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('line_ups') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_line_ups')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="line_ups" placeholder="@lang('messages.notifications_line_ups')" value="{{ $notification->line_ups }}">
                                @if ($errors->has('line_ups'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('line_ups') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('kick_off') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_kick_off')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="kick_off" placeholder="@lang('messages.notifications_kick_off')" value="{{ $notification->kick_off }}">
                                @if ($errors->has('kick_off'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kick_off') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('goals') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_goals')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="goals" placeholder="@lang('messages.notifications_goals')" value="{{ $notification->goals }}">
                                @if ($errors->has('goals'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goals') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('half_time') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_half_time')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="half_time" placeholder="@lang('messages.notifications_half_time')" value="{{ $notification->half_time }}">
                                @if ($errors->has('half_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('half_time') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('full_time') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_full_time')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="full_time" placeholder="@lang('messages.notifications_full_time')" value="{{ $notification->full_time }}">
                                @if ($errors->has('full_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_time') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('red_card') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.notifications_red_card')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="red_card" placeholder="@lang('messages.notifications_red_card')" value="{{ $notification->red_card }}">
                                @if ($errors->has('red_card'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('red_card') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.notifications_update') 
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
