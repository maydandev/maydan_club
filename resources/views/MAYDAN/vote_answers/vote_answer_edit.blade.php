@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.vote_answers_vote_answers')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.vote_answers_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/vote_answers">     @lang('messages.vote_answers_vote_answers')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/vote_answers/create" title = "@lang('messages.vote_answers_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.vote_answers_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/vote_answers') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_answers_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('messages.vote_answers_user_id')" value="{{ $vote_answer->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('vote_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_answers_vote_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="vote_id" placeholder="@lang('messages.vote_answers_vote_id')" value="{{ $vote_answer->vote_id }}">
                                @if ($errors->has('vote_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vote_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('vote_question_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_answers_vote_question_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="vote_question_id" placeholder="@lang('messages.vote_answers_vote_question_id')" value="{{ $vote_answer->vote_question_id }}">
                                @if ($errors->has('vote_question_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vote_question_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('vote_question_option_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_answers_vote_question_option_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="vote_question_option_id" placeholder="@lang('messages.vote_answers_vote_question_option_id')" value="{{ $vote_answer->vote_question_option_id }}">
                                @if ($errors->has('vote_question_option_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vote_question_option_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.vote_answers_update') 
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
