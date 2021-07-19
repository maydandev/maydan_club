@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.league_teams_league_teams')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.league_teams_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/league_teams">     @lang('messages.league_teams_league_teams')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/league_teams/create" title = "@lang('messages.league_teams_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.league_teams_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/league_teams') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.league_teams_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="team_id" placeholder="@lang('messages.league_teams_team_id')" value="{{ $league_team->team_id }}">
                                @if ($errors->has('team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.league_teams_league_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="league_id" placeholder="@lang('messages.league_teams_league_id')" value="{{ $league_team->league_id }}">
                                @if ($errors->has('league_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('league_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.league_teams_update') 
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
