@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.quizze_question_options_quizze_question_options')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.quizze_question_options_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/quizze_question_options">     @lang('messages.quizze_question_options_quizze_question_options')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/quizze_question_options/create" title = "@lang('messages.quizze_question_options_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.quizze_question_options_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/quizze_question_options') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('quizze_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_question_options_quizze_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="quizze_id" placeholder="@lang('messages.quizze_question_options_quizze_id')" value="{{ $quizze_question_option->quizze_id }}">
                                @if ($errors->has('quizze_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quizze_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('quizze_question_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_question_options_quizze_question_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="quizze_question_id" placeholder="@lang('messages.quizze_question_options_quizze_question_id')" value="{{ $quizze_question_option->quizze_question_id }}">
                                @if ($errors->has('quizze_question_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quizze_question_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('quizze_option_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_question_options_quizze_option_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="quizze_option_id" placeholder="@lang('messages.quizze_question_options_quizze_option_id')" value="{{ $quizze_question_option->quizze_option_id }}">
                                @if ($errors->has('quizze_option_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quizze_option_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_best_answer') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_question_options_is_best_answer')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_best_answer" placeholder="@lang('messages.quizze_question_options_is_best_answer')" value="{{ $quizze_question_option->is_best_answer }}">
                                @if ($errors->has('is_best_answer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_best_answer') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.quizze_question_options_update') 
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
