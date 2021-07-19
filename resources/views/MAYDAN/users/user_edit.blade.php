@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.users_users')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.users_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/users">     @lang('messages.users_users')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/users/create" title = "@lang('messages.users_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.users_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_first_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="first_name" placeholder="@lang('users_first_name')" value="{{ $user->first_name }}">
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_last_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="last_name" placeholder="@lang('users_last_name')" value="{{ $user->last_name }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_phone_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('users_phone_number')" value="{{ $user->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('users_email')" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email_verified_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email_verified_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="email_verified_at" placeholder="@lang('users_email_verified_at')" value="{{ $user->email_verified_at }}">
                                @if ($errors->has('email_verified_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_verified_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $user->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="flag" placeholder="@lang('users_flag')" value="{{ $user->flag }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('two_factor_secret') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_two_factor_secret')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="two_factor_secret" placeholder="@lang('users_two_factor_secret')"  >{{ $user->two_factor_secret }}</textarea>
                                @if ($errors->has('two_factor_secret'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('two_factor_secret') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('two_factor_recovery_codes') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_two_factor_recovery_codes')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="two_factor_recovery_codes" placeholder="@lang('users_two_factor_recovery_codes')"  >{{ $user->two_factor_recovery_codes }}</textarea>
                                @if ($errors->has('two_factor_recovery_codes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('two_factor_recovery_codes') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('firebase_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('users_firebase_id')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="firebase_id" placeholder="@lang('users_firebase_id')"  >{{ $user->firebase_id }}</textarea>
                                @if ($errors->has('firebase_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firebase_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_birthday')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="birthday" placeholder="@lang('users_birthday')" value="{{ $user->birthday }}">
                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_gender_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="gender_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($user->gender_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('gender_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_user_type_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="user_type_id" >

                            @foreach($user_types as $user_type)
                             <option  <?php echo ($user->user_type_id == $user_type->id) ? 'selected="selected"' : '' ; ?>    value="{{ $user_type->id }}" >{{ $user_type->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('user_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="code" placeholder="@lang('users_code')" value="{{ $user->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('code_expires_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code_expires_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="code_expires_at" placeholder="@lang('users_code_expires_at')" value="{{ $user->code_expires_at }}">
                                @if ($errors->has('code_expires_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_expires_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_lang')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="lang" placeholder="@lang('users_lang')" value="{{ $user->lang }}">
                                @if ($errors->has('lang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lang') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_city')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="city" placeholder="@lang('users_city')" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_address')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="address" placeholder="@lang('users_address')" value="{{ $user->address }}">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($user->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



       <div class="form-group{{ $errors->has('is_verified') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_is_verified')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_verified" placeholder="@lang('users_is_verified')" value="{{ $user->is_verified }}">
                                @if ($errors->has('is_verified'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_verified') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('package_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_package_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="package_id" placeholder="@lang('users_package_id')" value="{{ $user->package_id }}">
                                @if ($errors->has('package_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('package_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('subscription_date') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_subscription_date')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="subscription_date" placeholder="@lang('users_subscription_date')" value="{{ $user->subscription_date }}">
                                @if ($errors->has('subscription_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subscription_date') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('subdomain_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_subdomain_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="subdomain_id" placeholder="@lang('users_subdomain_id')" value="{{ $user->subdomain_id }}">
                                @if ($errors->has('subdomain_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subdomain_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.users_update') 
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
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.users_users')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.users_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/users">     @lang('messages.users_users')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/users/create" title = "@lang('messages.users_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.users_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_first_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="first_name" placeholder="@lang('users_first_name')" value="{{ $user->first_name }}">
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_last_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="last_name" placeholder="@lang('users_last_name')" value="{{ $user->last_name }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_phone_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('users_phone_number')" value="{{ $user->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('users_email')" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $user->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->flag }}" alt="flag" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="flag" placeholder="flag" value="{{ $user->flag }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_birthday')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="birthday" placeholder="@lang('users_birthday')" value="{{ $user->birthday }}">
                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_gender_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="gender_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($user->gender_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('gender_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_user_type_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="user_type_id" >

                            @foreach($user_types as $user_type)
                             <option  <?php echo ($user->user_type_id == $user_type->id) ? 'selected="selected"' : '' ; ?>    value="{{ $user_type->id }}" >{{ $user_type->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('user_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="code" placeholder="@lang('users_code')" value="{{ $user->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('code_expires_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code_expires_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="code_expires_at" placeholder="@lang('users_code_expires_at')" value="{{ $user->code_expires_at }}">
                                @if ($errors->has('code_expires_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_expires_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_lang')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="lang" placeholder="@lang('users_lang')" value="{{ $user->lang }}">
                                @if ($errors->has('lang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lang') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_city')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="city" placeholder="@lang('users_city')" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_address')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="address" placeholder="@lang('users_address')" value="{{ $user->address }}">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($user->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_verified')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_verified" value="1"  <?php echo ($user->is_verified == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.users_update') 
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
@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.users_users')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.users_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/users">     @lang('messages.users_users')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/users/create" title = "@lang('messages.users_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.users_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_first_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="first_name" placeholder="@lang('users_first_name')" value="{{ $user->first_name }}">
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_last_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="last_name" placeholder="@lang('users_last_name')" value="{{ $user->last_name }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_phone_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('users_phone_number')" value="{{ $user->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('users_email')" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email_verified_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_email_verified_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="email_verified_at" placeholder="@lang('users_email_verified_at')" value="{{ $user->email_verified_at }}">
                                @if ($errors->has('email_verified_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_verified_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $user->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $user->flag }}" alt="flag" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('flag') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_flag') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="flag" placeholder="flag" value="{{ $user->flag }}">
                                @if ($errors->has('flag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flag') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_birthday')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="birthday" placeholder="@lang('users_birthday')" value="{{ $user->birthday }}">
                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_gender_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="gender_id" >

                            @foreach($genders as $gender)
                             <option  <?php echo ($user->gender_id == $gender->id) ? 'selected="selected"' : '' ; ?>    value="{{ $gender->id }}" >{{ $gender->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('gender_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                             <div class="form-group{{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('users_user_type_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="user_type_id" >

                            @foreach($user_types as $user_type)
                             <option  <?php echo ($user->user_type_id == $user_type->id) ? 'selected="selected"' : '' ; ?>    value="{{ $user_type->id }}" >{{ $user_type->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('user_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="code" placeholder="@lang('users_code')" value="{{ $user->code }}">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('code_expires_at') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_code_expires_at')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="code_expires_at" placeholder="@lang('users_code_expires_at')" value="{{ $user->code_expires_at }}">
                                @if ($errors->has('code_expires_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_expires_at') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_lang')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="lang" placeholder="@lang('users_lang')" value="{{ $user->lang }}">
                                @if ($errors->has('lang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lang') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_city')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="city" placeholder="@lang('users_city')" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('users_address')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="address" placeholder="@lang('users_address')" value="{{ $user->address }}">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($user->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('users_is_verified')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_verified" value="1"  <?php echo ($user->is_verified == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.users_update') 
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
