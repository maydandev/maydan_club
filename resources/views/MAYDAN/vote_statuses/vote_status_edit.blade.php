@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.vote_statuses_vote_statuses')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.vote_statuses_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/vote_statuses">     @lang('messages.vote_statuses_vote_statuses')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/vote_statuses/create" title = "@lang('messages.vote_statuses_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.vote_statuses_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/vote_statuses') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_statuses_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.vote_statuses_name')" value="{{ $vote_status->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_statuses_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('messages.vote_statuses_en_name')" value="{{ $vote_status->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.vote_statuses_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="color" placeholder="@lang('messages.vote_statuses_color')" value="{{ $vote_status->color }}">
                                @if ($errors->has('color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.vote_statuses_update') 
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
