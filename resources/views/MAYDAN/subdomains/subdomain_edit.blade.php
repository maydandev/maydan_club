@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.subdomains_subdomains')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.subdomains_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/subdomains">     @lang('messages.subdomains_subdomains')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/subdomains/create" title = "@lang('messages.subdomains_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.subdomains_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/subdomains') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('subdomain') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_subdomain')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="subdomain" placeholder="@lang('messages.subdomains_subdomain')" value="{{ $subdomain->subdomain }}">
                                @if ($errors->has('subdomain'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subdomain') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($subdomain->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('is_verified') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_is_verified')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_verified" placeholder="@lang('messages.subdomains_is_verified')" value="{{ $subdomain->is_verified }}">
                                @if ($errors->has('is_verified'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_verified') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_accepted') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_is_accepted')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_accepted" placeholder="@lang('messages.subdomains_is_accepted')" value="{{ $subdomain->is_accepted }}">
                                @if ($errors->has('is_accepted'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_accepted') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_user_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="user_id" placeholder="@lang('messages.subdomains_user_id')" value="{{ $subdomain->user_id }}">
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_club_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="club_id" placeholder="@lang('messages.subdomains_club_id')" value="{{ $subdomain->club_id }}">
                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.subdomains_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.subdomains_application_id')" value="{{ $subdomain->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.subdomains_update') 
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
