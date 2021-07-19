@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.final_result_user_predictions_final_result_user_predictions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.final_result_user_predictions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/final_result_user_predictions">     @lang('messages.final_result_user_predictions_final_result_user_predictions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/final_result_user_predictions/create" title = "@lang('messages.final_result_user_predictions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.final_result_user_predictions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/final_result_user_predictions') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_user_predictions_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('messages.final_result_user_predictions_user_id')" value="{{ $final_result_user_prediction->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('final_result_prediction_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_user_predictions_final_result_prediction_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="final_result_prediction_id" placeholder="@lang('messages.final_result_user_predictions_final_result_prediction_id')" value="{{ $final_result_user_prediction->final_result_prediction_id }}">
                                @if ($errors->has('final_result_prediction_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_result_prediction_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('home_score') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_user_predictions_home_score')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="home_score" placeholder="@lang('messages.final_result_user_predictions_home_score')" value="{{ $final_result_user_prediction->home_score }}">
                                @if ($errors->has('home_score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_score') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('away_score') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_user_predictions_away_score')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="away_score" placeholder="@lang('messages.final_result_user_predictions_away_score')" value="{{ $final_result_user_prediction->away_score }}">
                                @if ($errors->has('away_score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('away_score') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.final_result_user_predictions_update') 
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
