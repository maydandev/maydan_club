@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.clients_clients')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.clients_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/clients">     @lang('messages.clients_clients')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/clients/create" title = "@lang('messages.clients_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.clients_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/clients') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clients_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.clients_icon')" value="{{ $client->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clients_team_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="team_name" placeholder="@lang('messages.clients_team_name')" value="{{ $client->team_name }}">
                                @if ($errors->has('team_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clients_country')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="country" placeholder="@lang('messages.clients_country')" value="{{ $client->country }}">
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.clients_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($client->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clients_sort')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="sort" placeholder="@lang('messages.clients_sort')" value="{{ $client->sort }}">
                                @if ($errors->has('sort'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sort') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.clients_update') 
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
