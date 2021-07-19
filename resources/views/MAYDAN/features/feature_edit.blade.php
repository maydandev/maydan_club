@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.features_features')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.features_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/features">     @lang('messages.features_features')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/features/create" title = "@lang('messages.features_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.features_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/features') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.features_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('messages.features_title')" value="{{ $feature->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.features_text')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="text" placeholder="@lang('messages.features_text')"  >{{ $feature->text }}</textarea>
                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.features_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.features_icon')" value="{{ $feature->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.features_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $feature->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.features_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $feature->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('text_align') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.features_text_align')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="text_align" placeholder="@lang('messages.features_text_align')" value="{{ $feature->text_align }}">
                                @if ($errors->has('text_align'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text_align') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.features_sort')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="sort" placeholder="@lang('messages.features_sort')" value="{{ $feature->sort }}">
                                @if ($errors->has('sort'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sort') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.features_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($feature->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.features_update') 
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
