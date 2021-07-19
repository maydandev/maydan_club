@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.players_players')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.players_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/players">     @lang('messages.players_players')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/players/create" title = "@lang('messages.players_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.players_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/players') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="team_id" placeholder="@lang('messages.players_team_id')" value="{{ $player->team_id }}">
                                @if ($errors->has('team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('season') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_season')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="season" placeholder="@lang('messages.players_season')" value="{{ $player->season }}">
                                @if ($errors->has('season'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('season') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_player_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="player_id" placeholder="@lang('messages.players_player_id')" value="{{ $player->player_id }}">
                                @if ($errors->has('player_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('player_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_player_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="player_name" placeholder="@lang('messages.players_player_name')" value="{{ $player->player_name }}">
                                @if ($errors->has('player_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_firstname')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="firstname" placeholder="@lang('messages.players_firstname')" value="{{ $player->firstname }}">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_lastname')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="lastname" placeholder="@lang('messages.players_lastname')" value="{{ $player->lastname }}">
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="number" placeholder="@lang('messages.players_number')" value="{{ $player->number }}">
                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_position')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="position" placeholder="@lang('messages.players_position')" value="{{ $player->position }}">
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_age')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="age" placeholder="@lang('messages.players_age')" value="{{ $player->age }}">
                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_birth_date')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="birth_date" placeholder="@lang('messages.players_birth_date')" value="{{ $player->birth_date }}">
                                @if ($errors->has('birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birth_place') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_birth_place')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="birth_place" placeholder="@lang('messages.players_birth_place')" value="{{ $player->birth_place }}">
                                @if ($errors->has('birth_place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_place') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birth_country') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_birth_country')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="birth_country" placeholder="@lang('messages.players_birth_country')" value="{{ $player->birth_country }}">
                                @if ($errors->has('birth_country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_country') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_nationality')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="nationality" placeholder="@lang('messages.players_nationality')" value="{{ $player->nationality }}">
                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_height')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="height" placeholder="@lang('messages.players_height')" value="{{ $player->height }}">
                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.players_weight')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="weight" placeholder="@lang('messages.players_weight')" value="{{ $player->weight }}">
                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.players_update') 
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
