@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.votes_votes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.votes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/votes">     @lang('messages.votes_votes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/votes/create" title = "@lang('messages.votes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.votes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/votes') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('votes_post_id')" value="{{ $vote->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('votes_deadline')" value="{{ $vote->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('total_voters') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_total_voters')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="total_voters" placeholder="@lang('votes_total_voters')" value="{{ $vote->total_voters }}">
                                @if ($errors->has('total_voters'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_voters') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_percentage') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_result_percentage')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_percentage" placeholder="@lang('votes_result_percentage')" value="{{ $vote->result_percentage }}">
                                @if ($errors->has('result_percentage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_percentage') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_total_voters') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_result_total_voters')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_total_voters" placeholder="@lang('votes_result_total_voters')" value="{{ $vote->result_total_voters }}">
                                @if ($errors->has('result_total_voters'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_total_voters') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('vote_status_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_vote_status_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="vote_status_id" placeholder="@lang('votes_vote_status_id')" value="{{ $vote->vote_status_id }}">
                                @if ($errors->has('vote_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vote_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('votes_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($vote->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.votes_update') 
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
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.votes_votes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.votes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/votes">     @lang('messages.votes_votes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/votes/create" title = "@lang('messages.votes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.votes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/votes') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('votes_deadline')" value="{{ $vote->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.votes_update') 
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
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.votes_votes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.votes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/votes">     @lang('messages.votes_votes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/votes/create" title = "@lang('messages.votes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.votes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/votes') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('votes_deadline')" value="{{ $vote->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.votes_update') 
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
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.votes_votes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.votes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/votes">     @lang('messages.votes_votes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/votes/create" title = "@lang('messages.votes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.votes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/votes') }}">
                        {!! csrf_field() !!}

                        

           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('votes_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($vote->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('vote_status_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_vote_status_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="vote_status_id" placeholder="@lang('votes_vote_status_id')" value="{{ $vote->vote_status_id }}">
                                @if ($errors->has('vote_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vote_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_total_voters') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_result_total_voters')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_total_voters" placeholder="@lang('votes_result_total_voters')" value="{{ $vote->result_total_voters }}">
                                @if ($errors->has('result_total_voters'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_total_voters') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_percentage') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_result_percentage')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_percentage" placeholder="@lang('votes_result_percentage')" value="{{ $vote->result_percentage }}">
                                @if ($errors->has('result_percentage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_percentage') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('total_voters') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_total_voters')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="total_voters" placeholder="@lang('votes_total_voters')" value="{{ $vote->total_voters }}">
                                @if ($errors->has('total_voters'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_voters') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('votes_deadline')" value="{{ $vote->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('votes_post_id')" value="{{ $vote->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.votes_update') 
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
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.votes_votes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.votes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/votes">     @lang('messages.votes_votes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/votes/create" title = "@lang('messages.votes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.votes_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/votes') }}">
                        {!! csrf_field() !!}

                        

           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('votes_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($vote->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('vote_status_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_vote_status_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="vote_status_id" placeholder="@lang('votes_vote_status_id')" value="{{ $vote->vote_status_id }}">
                                @if ($errors->has('vote_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vote_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_total_voters') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_result_total_voters')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_total_voters" placeholder="@lang('votes_result_total_voters')" value="{{ $vote->result_total_voters }}">
                                @if ($errors->has('result_total_voters'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_total_voters') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('result_percentage') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_result_percentage')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="result_percentage" placeholder="@lang('votes_result_percentage')" value="{{ $vote->result_percentage }}">
                                @if ($errors->has('result_percentage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result_percentage') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('total_voters') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_total_voters')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="total_voters" placeholder="@lang('votes_total_voters')" value="{{ $vote->total_voters }}">
                                @if ($errors->has('total_voters'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_voters') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('votes_deadline')" value="{{ $vote->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('votes_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('votes_post_id')" value="{{ $vote->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.votes_update') 
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
