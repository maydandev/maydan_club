@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.football_team_posts_football_team_posts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.football_team_posts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/football_team_posts">     @lang('messages.football_team_posts_football_team_posts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/football_team_posts/create" title = "@lang('messages.football_team_posts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.football_team_posts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/football_team_posts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.football_team_posts_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('messages.football_team_posts_post_id')" value="{{ $football_team_post->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('football_team_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.football_team_posts_football_team_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="football_team_id" placeholder="@lang('messages.football_team_posts_football_team_id')" value="{{ $football_team_post->football_team_id }}">
                                @if ($errors->has('football_team_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('football_team_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.football_team_posts_update') 
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
