@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.app_releases_app_releases')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.app_releases_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/app_releases">     @lang('messages.app_releases_app_releases')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/app_releases/create" title = "@lang('messages.app_releases_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.app_releases_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/app_releases') }}">
                        {!! csrf_field() !!}

                        

                             <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.app_releases_club_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="club_id" >

                            @foreach($clubs as $club)
                             <option  <?php echo ($app_release->club_id == $club->id) ? 'selected="selected"' : '' ; ?>    value="{{ $club->id }}" >{{ $club->code }}</option>
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
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.app_releases_application_id')" value="{{ $app_release->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('app_release_status_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.app_releases_app_release_status_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="app_release_status_id" >

                            @foreach($app_release_statuses as $app_release_status)
                             <option  <?php echo ($app_release->app_release_status_id == $app_release_status->id) ? 'selected="selected"' : '' ; ?>    value="{{ $app_release_status->id }}" >{{ $app_release_status->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('app_release_status_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('app_release_status_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('version') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_version')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="version" placeholder="@lang('messages.app_releases_version')" value="{{ $app_release->version }}">
                                @if ($errors->has('version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('version') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.app_releases_name')" value="{{ $app_release->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.app_releases_icon')" value="{{ $app_release->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_language')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="language" placeholder="@lang('messages.app_releases_language')" value="{{ $app_release->language }}">
                                @if ($errors->has('language'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('primary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_primary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="primary_color" placeholder="@lang('messages.app_releases_primary_color')" value="{{ $app_release->primary_color }}">
                                @if ($errors->has('primary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('secondary_color') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_secondary_color')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="secondary_color" placeholder="@lang('messages.app_releases_secondary_color')" value="{{ $app_release->secondary_color }}">
                                @if ($errors->has('secondary_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondary_color') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_currency')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="currency" placeholder="@lang('messages.app_releases_currency')" value="{{ $app_release->currency }}">
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('club_logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_club_logo')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="club_logo" placeholder="@lang('messages.app_releases_club_logo')" value="{{ $app_release->club_logo }}">
                                @if ($errors->has('club_logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_final_match') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_final_match')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_final_match" placeholder="@lang('messages.app_releases_is_final_match')" value="{{ $app_release->is_final_match }}">
                                @if ($errors->has('is_final_match'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_final_match') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_match_lineup') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_match_lineup')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_match_lineup" placeholder="@lang('messages.app_releases_is_match_lineup')" value="{{ $app_release->is_match_lineup }}">
                                @if ($errors->has('is_match_lineup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_match_lineup') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_first_scorer') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_first_scorer')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_first_scorer" placeholder="@lang('messages.app_releases_is_first_scorer')" value="{{ $app_release->is_first_scorer }}">
                                @if ($errors->has('is_first_scorer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_first_scorer') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_shop') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_shop')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_shop" placeholder="@lang('messages.app_releases_is_shop')" value="{{ $app_release->is_shop }}">
                                @if ($errors->has('is_shop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_shop') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_collect_and_pickup') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_collect_and_pickup')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_collect_and_pickup" placeholder="@lang('messages.app_releases_is_collect_and_pickup')" value="{{ $app_release->is_collect_and_pickup }}">
                                @if ($errors->has('is_collect_and_pickup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_collect_and_pickup') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_delivery_and_shipping') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_delivery_and_shipping')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_delivery_and_shipping" placeholder="@lang('messages.app_releases_is_delivery_and_shipping')" value="{{ $app_release->is_delivery_and_shipping }}">
                                @if ($errors->has('is_delivery_and_shipping'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_delivery_and_shipping') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('android_version') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_android_version')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="android_version" placeholder="@lang('messages.app_releases_android_version')" value="{{ $app_release->android_version }}">
                                @if ($errors->has('android_version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('android_version') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('android_release_version') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_android_release_version')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="android_release_version" placeholder="@lang('messages.app_releases_android_release_version')" value="{{ $app_release->android_release_version }}">
                                @if ($errors->has('android_release_version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('android_release_version') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('ios_version') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_ios_version')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="ios_version" placeholder="@lang('messages.app_releases_ios_version')" value="{{ $app_release->ios_version }}">
                                @if ($errors->has('ios_version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ios_version') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('ios_release_version') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_ios_release_version')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="ios_release_version" placeholder="@lang('messages.app_releases_ios_release_version')" value="{{ $app_release->ios_release_version }}">
                                @if ($errors->has('ios_release_version'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ios_release_version') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.app_releases_notes')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="notes" placeholder="@lang('messages.app_releases_notes')"  >{{ $app_release->notes }}</textarea>
                                @if ($errors->has('notes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notes') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.app_releases_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($app_release->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.app_releases_update') 
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
