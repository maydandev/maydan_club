@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.prediction_types_prediction_types')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.prediction_types_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/prediction_types">     @lang('messages.prediction_types_prediction_types')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/prediction_types/create" title = "@lang('messages.prediction_types_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.prediction_types_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/prediction_types') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.prediction_types_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.prediction_types_name')" value="{{ $prediction_type->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.prediction_types_en_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="en_name" placeholder="@lang('messages.prediction_types_en_name')" value="{{ $prediction_type->en_name }}">
                                @if ($errors->has('en_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.prediction_types_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="color" placeholder="@lang('messages.prediction_types_color')" value="{{ $prediction_type->color }}">
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
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.prediction_types_update') 
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
