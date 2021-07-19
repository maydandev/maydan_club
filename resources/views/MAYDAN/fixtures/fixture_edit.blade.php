@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.fixtures_fixtures')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.fixtures_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/fixtures">     @lang('messages.fixtures_fixtures')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/fixtures/create" title = "@lang('messages.fixtures_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.fixtures_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/fixtures') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('fixture_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_fixture_id')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="fixture_id" placeholder="@lang('fixtures_fixture_id')" value="{{ $fixture->fixture_id }}">
                                @if ($errors->has('fixture_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixture_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_league_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="league_id" placeholder="@lang('fixtures_league_id')" value="{{ $fixture->league_id }}">
                                @if ($errors->has('league_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('league_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('event_date') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_event_date')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="event_date" placeholder="@lang('fixtures_event_date')" value="{{ $fixture->event_date }}">
                                @if ($errors->has('event_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_date') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('event_timestamp') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_event_timestamp')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="event_timestamp" placeholder="@lang('fixtures_event_timestamp')" value="{{ $fixture->event_timestamp }}">
                                @if ($errors->has('event_timestamp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_timestamp') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('firstHalfStart') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_firstHalfStart')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="firstHalfStart" placeholder="@lang('fixtures_firstHalfStart')" value="{{ $fixture->firstHalfStart }}">
                                @if ($errors->has('firstHalfStart'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstHalfStart') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('secondHalfStart') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_secondHalfStart')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="secondHalfStart" placeholder="@lang('fixtures_secondHalfStart')" value="{{ $fixture->secondHalfStart }}">
                                @if ($errors->has('secondHalfStart'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondHalfStart') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('round') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_round')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="round" placeholder="@lang('fixtures_round')" value="{{ $fixture->round }}">
                                @if ($errors->has('round'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('round') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_status')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="status" placeholder="@lang('fixtures_status')" value="{{ $fixture->status }}">
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('statusShort') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_statusShort')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="statusShort" placeholder="@lang('fixtures_statusShort')" value="{{ $fixture->statusShort }}">
                                @if ($errors->has('statusShort'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('statusShort') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('elapsed') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_elapsed')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="elapsed" placeholder="@lang('fixtures_elapsed')" value="{{ $fixture->elapsed }}">
                                @if ($errors->has('elapsed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('elapsed') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_venue')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="venue" placeholder="@lang('fixtures_venue')" value="{{ $fixture->venue }}">
                                @if ($errors->has('venue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('referee') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_referee')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="referee" placeholder="@lang('fixtures_referee')" value="{{ $fixture->referee }}">
                                @if ($errors->has('referee'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('referee') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('home_team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_home_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="home_team_id" placeholder="@lang('fixtures_home_team_id')" value="{{ $fixture->home_team_id }}">
                                @if ($errors->has('home_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('away_team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_away_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="away_team_id" placeholder="@lang('fixtures_away_team_id')" value="{{ $fixture->away_team_id }}">
                                @if ($errors->has('away_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('away_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('goalsHomeTeam') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_goalsHomeTeam')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="goalsHomeTeam" placeholder="@lang('fixtures_goalsHomeTeam')" value="{{ $fixture->goalsHomeTeam }}">
                                @if ($errors->has('goalsHomeTeam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goalsHomeTeam') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('goalsAwayTeam') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_goalsAwayTeam')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="goalsAwayTeam" placeholder="@lang('fixtures_goalsAwayTeam')" value="{{ $fixture->goalsAwayTeam }}">
                                @if ($errors->has('goalsAwayTeam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goalsAwayTeam') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('score_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('fixtures_score_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="score_id" placeholder="@lang('fixtures_score_id')" value="{{ $fixture->score_id }}">
                                @if ($errors->has('score_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('score_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.fixtures_update') 
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
