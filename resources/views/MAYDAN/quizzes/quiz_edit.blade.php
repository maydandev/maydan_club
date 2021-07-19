@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.quizzes_quizzes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.quizzes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/quizzes">     @lang('messages.quizzes_quizzes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/quizzes/create" title = "@lang('messages.quizzes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.quizzes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/quizzes') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('quizzes_post_id')" value="{{ $quiz->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('quizzes_deadline')" value="{{ $quiz->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('total_participants') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_total_participants')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="total_participants" placeholder="@lang('quizzes_total_participants')" value="{{ $quiz->total_participants }}">
                                @if ($errors->has('total_participants'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_participants') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('average_score') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_average_score')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="average_score" placeholder="@lang('quizzes_average_score')" value="{{ $quiz->average_score }}">
                                @if ($errors->has('average_score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('average_score') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('top_result') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_top_result')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="top_result" placeholder="@lang('quizzes_top_result')" value="{{ $quiz->top_result }}">
                                @if ($errors->has('top_result'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('top_result') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('timer') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_timer')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="timer" placeholder="@lang('quizzes_timer')" value="{{ $quiz->timer }}">
                                @if ($errors->has('timer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('timer') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.quizzes_update') 
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
