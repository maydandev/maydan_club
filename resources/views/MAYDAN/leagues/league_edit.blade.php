@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.leagues_leagues')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.leagues_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/leagues">     @lang('messages.leagues_leagues')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/leagues/create" title = "@lang('messages.leagues_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.leagues_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/leagues') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('league_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_league_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="league_id" placeholder="@lang('messages.leagues_league_id')" value="{{ $league->league_id }}">
                                @if ($errors->has('league_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('league_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.leagues_name')" value="{{ $league->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('league_type_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_league_type_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="league_type_id" placeholder="@lang('messages.leagues_league_type_id')" value="{{ $league->league_type_id }}">
                                @if ($errors->has('league_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('league_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_country_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="country_id" placeholder="@lang('messages.leagues_country_id')" value="{{ $league->country_id }}">
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('season') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_season')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="season" placeholder="@lang('messages.leagues_season')" value="{{ $league->season }}">
                                @if ($errors->has('season'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('season') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('season_start') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_season_start')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="season_start" placeholder="@lang('messages.leagues_season_start')" value="{{ $league->season_start }}">
                                @if ($errors->has('season_start'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('season_start') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('season_end') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_season_end')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="season_end" placeholder="@lang('messages.leagues_season_end')" value="{{ $league->season_end }}">
                                @if ($errors->has('season_end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('season_end') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_logo')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $league->logo }}" alt="logo" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_logo') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="logo" placeholder="logo" value="{{ $league->logo }}">
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_flag')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="flag" placeholder="@lang('messages.leagues_flag')" value="{{ $league->flag }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('standings') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_standings')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="standings" placeholder="@lang('messages.leagues_standings')" value="{{ $league->standings }}">
                                @if ($errors->has('standings'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('standings') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_current') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_is_current')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_current" placeholder="@lang('messages.leagues_is_current')" value="{{ $league->is_current }}">
                                @if ($errors->has('is_current'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_current') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_standings') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_standings')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_standings" placeholder="@lang('messages.leagues_coverage_standings')" value="{{ $league->coverage_standings }}">
                                @if ($errors->has('coverage_standings'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_standings') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_fixtures_events') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_fixtures_events')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_fixtures_events" placeholder="@lang('messages.leagues_coverage_fixtures_events')" value="{{ $league->coverage_fixtures_events }}">
                                @if ($errors->has('coverage_fixtures_events'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_fixtures_events') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_fixtures_lineups') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_fixtures_lineups')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_fixtures_lineups" placeholder="@lang('messages.leagues_coverage_fixtures_lineups')" value="{{ $league->coverage_fixtures_lineups }}">
                                @if ($errors->has('coverage_fixtures_lineups'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_fixtures_lineups') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_fixtures_statistics') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_fixtures_statistics')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_fixtures_statistics" placeholder="@lang('messages.leagues_coverage_fixtures_statistics')" value="{{ $league->coverage_fixtures_statistics }}">
                                @if ($errors->has('coverage_fixtures_statistics'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_fixtures_statistics') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_fixtures_players_statistics') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_fixtures_players_statistics')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_fixtures_players_statistics" placeholder="@lang('messages.leagues_coverage_fixtures_players_statistics')" value="{{ $league->coverage_fixtures_players_statistics }}">
                                @if ($errors->has('coverage_fixtures_players_statistics'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_fixtures_players_statistics') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_players') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_players')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_players" placeholder="@lang('messages.leagues_coverage_players')" value="{{ $league->coverage_players }}">
                                @if ($errors->has('coverage_players'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_players') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_topscorers') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_topscorers')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_topscorers" placeholder="@lang('messages.leagues_coverage_topscorers')" value="{{ $league->coverage_topscorers }}">
                                @if ($errors->has('coverage_topscorers'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_topscorers') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_predictions') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_predictions')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_predictions" placeholder="@lang('messages.leagues_coverage_predictions')" value="{{ $league->coverage_predictions }}">
                                @if ($errors->has('coverage_predictions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_predictions') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('coverage_odds') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.leagues_coverage_odds')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="coverage_odds" placeholder="@lang('messages.leagues_coverage_odds')" value="{{ $league->coverage_odds }}">
                                @if ($errors->has('coverage_odds'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coverage_odds') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.leagues_update') 
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
