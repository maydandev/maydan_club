@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.tickets_tickets')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.tickets_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/tickets">     @lang('messages.tickets_tickets')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/tickets/create" title = "@lang('messages.tickets_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.tickets_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tickets') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('fixture_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('tickets_fixture_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="fixture_id" placeholder="@lang('tickets_fixture_id')" value="{{ $ticket->fixture_id }}">
                                @if ($errors->has('fixture_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fixture_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('tickets_url')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="url" placeholder="@lang('tickets_url')"  >{{ $ticket->url }}</textarea>
                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('tickets_message')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="message" placeholder="@lang('tickets_message')"  >{{ $ticket->message }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.tickets_update') 
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
