@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.lineup_result_prediction_players_lineup_result_prediction_players')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.lineup_result_prediction_players_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/lineup_result_prediction_players">     @lang('messages.lineup_result_prediction_players_lineup_result_prediction_players')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/lineup_result_prediction_players/create" title = "@lang('messages.lineup_result_prediction_players_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.lineup_result_prediction_players_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/lineup_result_prediction_players') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('fixture_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_result_prediction_players_fixture_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fixture_id" placeholder="@lang('messages.lineup_result_prediction_players_fixture_id')" value="{{ $lineup_result_prediction_player->fixture_id }}">
                                @if ($errors->has('fixture_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixture_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('prediction_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_result_prediction_players_prediction_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="prediction_id" placeholder="@lang('messages.lineup_result_prediction_players_prediction_id')" value="{{ $lineup_result_prediction_player->prediction_id }}">
                                @if ($errors->has('prediction_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prediction_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_result_prediction_players_player_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="player_id" placeholder="@lang('messages.lineup_result_prediction_players_player_id')" value="{{ $lineup_result_prediction_player->player_id }}">
                                @if ($errors->has('player_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_result_prediction_players_player_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="player_name" placeholder="@lang('messages.lineup_result_prediction_players_player_name')" value="{{ $lineup_result_prediction_player->player_name }}">
                                @if ($errors->has('player_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_key') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_result_prediction_players_player_key')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="player_key" placeholder="@lang('messages.lineup_result_prediction_players_player_key')" value="{{ $lineup_result_prediction_player->player_key }}">
                                @if ($errors->has('player_key'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_key') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.lineup_result_prediction_players_update') 
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
