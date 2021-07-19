@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.social_media_links_social_media_links')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.social_media_links_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/social_media_links">     @lang('messages.social_media_links_social_media_links')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/social_media_links/create" title = "@lang('messages.social_media_links_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.social_media_links_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/social_media_links') }}">
                        {!! csrf_field() !!}

                        

                             <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.social_media_links_club_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="club_id" >

                            @foreach($clubs as $club)
                             <option  <?php echo ($social_media_link->club_id == $club->id) ? 'selected="selected"' : '' ; ?>    value="{{ $club->id }}" >{{ $club->code }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.social_media_links_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.social_media_links_application_id')" value="{{ $social_media_link->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('social_media_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.social_media_links_social_media_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="social_media_id" >

                            @foreach($social_media as $social_media)
                             <option  <?php echo ($social_media_link->social_media_id == $social_media->id) ? 'selected="selected"' : '' ; ?>    value="{{ $social_media->id }}" >{{ $social_media->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('social_media_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('social_media_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.social_media_links_link')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="link" placeholder="@lang('messages.social_media_links_link')" value="{{ $social_media_link->link }}">
                                @if ($errors->has('link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.social_media_links_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($social_media_link->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.social_media_links_update') 
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
