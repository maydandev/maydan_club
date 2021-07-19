@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.clubs_clubs')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.clubs_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/clubs">     @lang('messages.clubs_clubs')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/clubs/create" title = "@lang('messages.clubs_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.clubs_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/clubs') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_code')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="code" placeholder="@lang('messages.clubs_code')" value="{{ $club->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.clubs_name')" value="{{ $club->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_logo')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $club->logo }}" alt="logo" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_logo') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="logo" placeholder="logo" value="{{ $club->logo }}">
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.clubs_country_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="country_id" >

                            @foreach($countries as $country)
                             <option  <?php echo ($club->country_id == $country->id) ? 'selected="selected"' : '' ; ?>    value="{{ $country->id }}" >{{ $country->country }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.clubs_city_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="city_id" >

                            @foreach($cities as $city)
                             <option  <?php echo ($club->city_id == $city->id) ? 'selected="selected"' : '' ; ?>    value="{{ $city->id }}" >{{ $city->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('representative_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.clubs_representative_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="representative_id" >

                            @foreach($representatives as $representative)
                             <option  <?php echo ($club->representative_id == $representative->id) ? 'selected="selected"' : '' ; ?>    value="{{ $representative->id }}" >{{ $representative->user_id }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('representative_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('profiles') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_profiles')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="profiles" placeholder="@lang('messages.clubs_profiles')" value="{{ $club->profiles }}">
                                @if ($errors->has('profiles'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profiles') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('usage_data') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_usage_data')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="usage_data" placeholder="@lang('messages.clubs_usage_data')" value="{{ $club->usage_data }}">
                                @if ($errors->has('usage_data'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usage_data') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_join_date')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="join_date" placeholder="@lang('messages.clubs_join_date')" value="{{ $club->join_date }}">
                                @if ($errors->has('join_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('join_date') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.clubs_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($club->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.clubs_update') 
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
