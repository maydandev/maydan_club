@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.package_features_package_features')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.package_features_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/package_features">     @lang('messages.package_features_package_features')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/package_features/create" title = "@lang('messages.package_features_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.package_features_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/package_features') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('package_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.package_features_package_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="package_id" placeholder="@lang('messages.package_features_package_id')" value="{{ $package_feature->package_id }}">
                                @if ($errors->has('package_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('feature') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.package_features_feature')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="feature" placeholder="@lang('messages.package_features_feature')" value="{{ $package_feature->feature }}">
                                @if ($errors->has('feature'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.package_features_update') 
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
