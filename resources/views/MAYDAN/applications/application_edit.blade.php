@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.applications_applications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.applications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/applications">     @lang('messages.applications_applications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/applications/create" title = "@lang('messages.applications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.applications_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/applications') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.applications_name')" value="{{ $application->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.applications_icon')" value="{{ $application->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_language')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="language" placeholder="@lang('messages.applications_language')" value="{{ $application->language }}">
                                @if ($errors->has('language'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="primary_color" placeholder="@lang('messages.applications_primary_color')" value="{{ $application->primary_color }}">
                                @if ($errors->has('primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="secondary_color" placeholder="@lang('messages.applications_secondary_color')" value="{{ $application->secondary_color }}">
                                @if ($errors->has('secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('alternative_primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_alternative_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="alternative_primary_color" placeholder="@lang('messages.applications_alternative_primary_color')" value="{{ $application->alternative_primary_color }}">
                                @if ($errors->has('alternative_primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alternative_primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('alternative_secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_alternative_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="alternative_secondary_color" placeholder="@lang('messages.applications_alternative_secondary_color')" value="{{ $application->alternative_secondary_color }}">
                                @if ($errors->has('alternative_secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alternative_secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_gradient_primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_is_gradient_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_gradient_primary_color" placeholder="@lang('messages.applications_is_gradient_primary_color')" value="{{ $application->is_gradient_primary_color }}">
                                @if ($errors->has('is_gradient_primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_gradient_primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_gradient_secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_is_gradient_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_gradient_secondary_color" placeholder="@lang('messages.applications_is_gradient_secondary_color')" value="{{ $application->is_gradient_secondary_color }}">
                                @if ($errors->has('is_gradient_secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_gradient_secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_currency')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="currency" placeholder="@lang('messages.applications_currency')" value="{{ $application->currency }}">
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('club_logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_club_logo')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="club_logo" placeholder="@lang('messages.applications_club_logo')" value="{{ $application->club_logo }}">
                                @if ($errors->has('club_logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="team_id" placeholder="@lang('messages.applications_team_id')" value="{{ $application->team_id }}">
                                @if ($errors->has('team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('splash_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_splash_image')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="splash_image" placeholder="@lang('messages.applications_splash_image')" value="{{ $application->splash_image }}">
                                @if ($errors->has('splash_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('splash_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('current_league_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_current_league_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="current_league_id" placeholder="@lang('messages.applications_current_league_id')" value="{{ $application->current_league_id }}">
                                @if ($errors->has('current_league_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_league_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('current_season') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_current_season')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="current_season" placeholder="@lang('messages.applications_current_season')" value="{{ $application->current_season }}">
                                @if ($errors->has('current_season'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_season') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('base_url') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_base_url')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="base_url" placeholder="@lang('messages.applications_base_url')" value="{{ $application->base_url }}">
                                @if ($errors->has('base_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('base_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('configuration') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_configuration')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="configuration" placeholder="@lang('messages.applications_configuration')" value="{{ $application->configuration }}">
                                @if ($errors->has('configuration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('configuration') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.applications_club_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="club_id" placeholder="@lang('messages.applications_club_id')" value="{{ $application->club_id }}">
                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.applications_update') 
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
