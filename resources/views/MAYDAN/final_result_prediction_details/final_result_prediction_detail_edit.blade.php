@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.final_result_prediction_details_final_result_prediction_details')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.final_result_prediction_details_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/final_result_prediction_details">     @lang('messages.final_result_prediction_details_final_result_prediction_details')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/final_result_prediction_details/create" title = "@lang('messages.final_result_prediction_details_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.final_result_prediction_details_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/final_result_prediction_details') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('final_result_prediction_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_prediction_details_final_result_prediction_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="final_result_prediction_id" placeholder="@lang('messages.final_result_prediction_details_final_result_prediction_id')" value="{{ $final_result_prediction_detail->final_result_prediction_id }}">
                                @if ($errors->has('final_result_prediction_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_result_prediction_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_prediction_details_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('messages.final_result_prediction_details_user_id')" value="{{ $final_result_prediction_detail->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('home_team_result') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_prediction_details_home_team_result')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="home_team_result" placeholder="@lang('messages.final_result_prediction_details_home_team_result')" value="{{ $final_result_prediction_detail->home_team_result }}">
                                @if ($errors->has('home_team_result'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_team_result') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('away_team_result') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.final_result_prediction_details_away_team_result')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="away_team_result" placeholder="@lang('messages.final_result_prediction_details_away_team_result')" value="{{ $final_result_prediction_detail->away_team_result }}">
                                @if ($errors->has('away_team_result'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('away_team_result') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.final_result_prediction_details_update') 
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
