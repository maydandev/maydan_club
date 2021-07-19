@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.package_table_features_package_table_features')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.package_table_features_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/package_table_features">     @lang('messages.package_table_features_package_table_features')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/package_table_features/create" title = "@lang('messages.package_table_features_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.package_table_features_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/package_table_features') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.package_table_features_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.package_table_features_name')" value="{{ $package_table_feature->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('package_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.package_table_features_package_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="package_id" placeholder="@lang('messages.package_table_features_package_id')" value="{{ $package_table_feature->package_id }}">
                                @if ($errors->has('package_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('package_table_category_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.package_table_features_package_table_category_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="package_table_category_id" placeholder="@lang('messages.package_table_features_package_table_category_id')" value="{{ $package_table_feature->package_table_category_id }}">
                                @if ($errors->has('package_table_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package_table_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_available') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.package_table_features_is_available')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_available" placeholder="@lang('messages.package_table_features_is_available')" value="{{ $package_table_feature->is_available }}">
                                @if ($errors->has('is_available'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_available') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.package_table_features_update') 
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
