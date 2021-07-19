@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.packages_packages')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.packages_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/packages">     @lang('messages.packages_packages')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/packages/create" title = "@lang('messages.packages_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.packages_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/packages') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.packages_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('messages.packages_title')" value="{{ $package->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.packages_alias')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="alias" placeholder="@lang('messages.packages_alias')" value="{{ $package->alias }}">
                                @if ($errors->has('alias'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alias') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.packages_cost')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="cost" placeholder="@lang('messages.packages_cost')" value="{{ $package->cost }}">
                                @if ($errors->has('cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_recommend') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.packages_is_recommend')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_recommend" placeholder="@lang('messages.packages_is_recommend')" value="{{ $package->is_recommend }}">
                                @if ($errors->has('is_recommend'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_recommend') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.packages_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($package->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.packages_sort')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="sort" placeholder="@lang('messages.packages_sort')" value="{{ $package->sort }}">
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
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.packages_update') 
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
