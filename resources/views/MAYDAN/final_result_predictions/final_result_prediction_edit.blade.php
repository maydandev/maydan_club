@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.final_result_predictions_final_result_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.final_result_predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/final_result_predictions">     @lang('messages.final_result_predictions_final_result_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/final_result_predictions/create" title = "@lang('messages.final_result_predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.final_result_predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/final_result_predictions') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('fixture_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_fixture_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fixture_id" placeholder="@lang('messages.final_result_predictions_fixture_id')" value="{{ $final_result_prediction->fixture_id }}">
                                @if ($errors->has('fixture_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixture_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('home_team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_home_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="home_team_id" placeholder="@lang('messages.final_result_predictions_home_team_id')" value="{{ $final_result_prediction->home_team_id }}">
                                @if ($errors->has('home_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('away_team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_away_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="away_team_id" placeholder="@lang('messages.final_result_predictions_away_team_id')" value="{{ $final_result_prediction->away_team_id }}">
                                @if ($errors->has('away_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('away_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_status')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="status" placeholder="@lang('messages.final_result_predictions_status')" value="{{ $final_result_prediction->status }}">
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_home_team') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_result_home_team')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_home_team" placeholder="@lang('messages.final_result_predictions_result_home_team')" value="{{ $final_result_prediction->result_home_team }}">
                                @if ($errors->has('result_home_team'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_home_team') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_away_team') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_result_away_team')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_away_team" placeholder="@lang('messages.final_result_predictions_result_away_team')" value="{{ $final_result_prediction->result_away_team }}">
                                @if ($errors->has('result_away_team'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_away_team') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($final_result_prediction->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('prediction_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_predictions_prediction_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="prediction_id" placeholder="@lang('messages.final_result_predictions_prediction_id')" value="{{ $final_result_prediction->prediction_id }}">
                                @if ($errors->has('prediction_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prediction_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.final_result_predictions_data')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="data" placeholder="@lang('messages.final_result_predictions_data')"  >{{ $final_result_prediction->data }}</textarea>
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
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.final_result_predictions_update') 
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
