@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.lineup_user_prediction_players_lineup_user_prediction_players')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.lineup_user_prediction_players_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/lineup_user_prediction_players">     @lang('messages.lineup_user_prediction_players_lineup_user_prediction_players')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/lineup_user_prediction_players/create" title = "@lang('messages.lineup_user_prediction_players_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.lineup_user_prediction_players_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/lineup_user_prediction_players') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('lineup_prediction_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_user_prediction_players_lineup_prediction_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="lineup_prediction_id" placeholder="@lang('messages.lineup_user_prediction_players_lineup_prediction_id')" value="{{ $lineup_user_prediction_player->lineup_prediction_id }}">
                                @if ($errors->has('lineup_prediction_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lineup_prediction_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_user_prediction_players_player_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="player_id" placeholder="@lang('messages.lineup_user_prediction_players_player_id')" value="{{ $lineup_user_prediction_player->player_id }}">
                                @if ($errors->has('player_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_user_prediction_players_player_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="player_name" placeholder="@lang('messages.lineup_user_prediction_players_player_name')" value="{{ $lineup_user_prediction_player->player_name }}">
                                @if ($errors->has('player_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.lineup_user_prediction_players_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('messages.lineup_user_prediction_players_user_id')" value="{{ $lineup_user_prediction_player->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.lineup_user_prediction_players_update') 
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
