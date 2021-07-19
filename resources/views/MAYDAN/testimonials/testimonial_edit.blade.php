@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.testimonials_testimonials')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.testimonials_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/testimonials">     @lang('messages.testimonials_testimonials')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/testimonials/create" title = "@lang('messages.testimonials_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.testimonials_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/testimonials') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.testimonials_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('messages.testimonials_title')" value="{{ $testimonial->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.testimonials_text')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="text" placeholder="@lang('messages.testimonials_text')"  >{{ $testimonial->text }}</textarea>
                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.testimonials_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $testimonial->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.testimonials_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $testimonial->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.testimonials_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($testimonial->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.testimonials_sort')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="sort" placeholder="@lang('messages.testimonials_sort')" value="{{ $testimonial->sort }}">
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
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.testimonials_update') 
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
