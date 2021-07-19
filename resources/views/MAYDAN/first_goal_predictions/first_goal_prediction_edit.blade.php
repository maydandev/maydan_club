@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.first_goal_predictions_first_goal_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.first_goal_predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/first_goal_predictions">     @lang('messages.first_goal_predictions_first_goal_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/first_goal_predictions/create" title = "@lang('messages.first_goal_predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.first_goal_predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/first_goal_predictions') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('fixture_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.first_goal_predictions_fixture_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fixture_id" placeholder="@lang('messages.first_goal_predictions_fixture_id')" value="{{ $first_goal_prediction->fixture_id }}">
                                @if ($errors->has('fixture_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixture_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('prediction_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.first_goal_predictions_prediction_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="prediction_id" placeholder="@lang('messages.first_goal_predictions_prediction_id')" value="{{ $first_goal_prediction->prediction_id }}">
                                @if ($errors->has('prediction_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prediction_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_first_goal_player_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.first_goal_predictions_result_first_goal_player_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_first_goal_player_id" placeholder="@lang('messages.first_goal_predictions_result_first_goal_player_id')" value="{{ $first_goal_prediction->result_first_goal_player_id }}">
                                @if ($errors->has('result_first_goal_player_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_first_goal_player_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_first_goal_player_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.first_goal_predictions_result_first_goal_player_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="result_first_goal_player_name" placeholder="@lang('messages.first_goal_predictions_result_first_goal_player_name')" value="{{ $first_goal_prediction->result_first_goal_player_name }}">
                                @if ($errors->has('result_first_goal_player_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_first_goal_player_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.first_goal_predictions_data')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="data" placeholder="@lang('messages.first_goal_predictions_data')"  >{{ $first_goal_prediction->data }}</textarea>
                                @if ($errors->has('data'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.first_goal_predictions_update') 
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
