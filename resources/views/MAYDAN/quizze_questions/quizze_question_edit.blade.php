@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.quizze_questions_quizze_questions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.quizze_questions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/quizze_questions">     @lang('messages.quizze_questions_quizze_questions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/quizze_questions/create" title = "@lang('messages.quizze_questions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.quizze_questions_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/quizze_questions') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('quizze_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_questions_quizze_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="quizze_id" placeholder="@lang('messages.quizze_questions_quizze_id')" value="{{ $quizze_question->quizze_id }}">
                                @if ($errors->has('quizze_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quizze_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('quizze_question') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_questions_quizze_question')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="quizze_question" placeholder="@lang('messages.quizze_questions_quizze_question')" value="{{ $quizze_question->quizze_question }}">
                                @if ($errors->has('quizze_question'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quizze_question') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_questions_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $quizze_question->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_questions_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $quizze_question->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('points') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_questions_points')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="points" placeholder="@lang('messages.quizze_questions_points')" value="{{ $quizze_question->points }}">
                                @if ($errors->has('points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('quizze_question_option_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.quizze_questions_quizze_question_option_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="quizze_question_option_id" placeholder="@lang('messages.quizze_questions_quizze_question_option_id')" value="{{ $quizze_question->quizze_question_option_id }}">
                                @if ($errors->has('quizze_question_option_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quizze_question_option_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.quizze_questions_update') 
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
