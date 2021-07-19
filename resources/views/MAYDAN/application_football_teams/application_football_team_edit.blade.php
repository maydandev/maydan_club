@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.application_football_teams_application_football_teams')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.application_football_teams_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/application_football_teams">     @lang('messages.application_football_teams_application_football_teams')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/application_football_teams/create" title = "@lang('messages.application_football_teams_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.application_football_teams_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/application_football_teams') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.application_football_teams_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.application_football_teams_application_id')" value="{{ $application_football_team->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('football_team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.application_football_teams_football_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="football_team_id" placeholder="@lang('messages.application_football_teams_football_team_id')" value="{{ $application_football_team->football_team_id }}">
                                @if ($errors->has('football_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.application_football_teams_update') 
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
