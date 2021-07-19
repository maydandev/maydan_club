@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.countries_countries')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.countries_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/countries">     @lang('messages.countries_countries')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/countries/create" title = "@lang('messages.countries_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.countries_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/countries') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.countries_country')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="country" placeholder="@lang('messages.countries_country')" value="{{ $country->country }}">
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.countries_code')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="code" placeholder="@lang('messages.countries_code')" value="{{ $country->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.countries_flag')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="flag" placeholder="@lang('messages.countries_flag')" value="{{ $country->flag }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.countries_update') 
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
