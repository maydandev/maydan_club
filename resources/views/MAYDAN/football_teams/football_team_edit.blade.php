@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.football_teams_football_teams')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.football_teams_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/football_teams">     @lang('messages.football_teams_football_teams')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/football_teams/create" title = "@lang('messages.football_teams_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.football_teams_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/football_teams') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="team_id" placeholder="@lang('football_teams_team_id')" value="{{ $football_team->team_id }}">
                                @if ($errors->has('team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('football_teams_name')" value="{{ $football_team->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_code')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="code" placeholder="@lang('football_teams_code')" value="{{ $football_team->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_logo')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $football_team->logo }}" alt="logo" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_logo') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="logo" placeholder="logo" value="{{ $football_team->logo }}">
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_national') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_is_national')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_national" placeholder="@lang('football_teams_is_national')" value="{{ $football_team->is_national }}">
                                @if ($errors->has('is_national'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_national') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_country_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('football_teams_country_id')" value="{{ $football_team->country_id }}">
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('founded') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_founded')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="founded" placeholder="@lang('football_teams_founded')" value="{{ $football_team->founded }}">
                                @if ($errors->has('founded'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('founded') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('venue_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_venue_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="venue_name" placeholder="@lang('football_teams_venue_name')" value="{{ $football_team->venue_name }}">
                                @if ($errors->has('venue_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('venue_surface') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_venue_surface')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="venue_surface" placeholder="@lang('football_teams_venue_surface')" value="{{ $football_team->venue_surface }}">
                                @if ($errors->has('venue_surface'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_surface') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('venue_address') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_venue_address')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="venue_address" placeholder="@lang('football_teams_venue_address')" value="{{ $football_team->venue_address }}">
                                @if ($errors->has('venue_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('venue_city') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_venue_city')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="venue_city" placeholder="@lang('football_teams_venue_city')" value="{{ $football_team->venue_city }}">
                                @if ($errors->has('venue_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('venue_capacity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('football_teams_venue_capacity')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="venue_capacity" placeholder="@lang('football_teams_venue_capacity')" value="{{ $football_team->venue_capacity }}">
                                @if ($errors->has('venue_capacity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_capacity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.football_teams_update') 
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
