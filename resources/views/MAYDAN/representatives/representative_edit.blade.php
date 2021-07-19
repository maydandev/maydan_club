@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.representatives_representatives')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.representatives_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/representatives">     @lang('messages.representatives_representatives')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/representatives/create" title = "@lang('messages.representatives_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.representatives_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/representatives') }}">
                        {!! csrf_field() !!}

                        

                             <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.representatives_user_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="user_id" >

                            @foreach($users as $user)
                             <option  <?php echo ($representative->user_id == $user->id) ? 'selected="selected"' : '' ; ?>    value="{{ $user->id }}" >{{ $user->first_name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.representatives_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.representatives_name')" value="{{ $representative->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.representatives_position')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="position" placeholder="@lang('messages.representatives_position')" value="{{ $representative->position }}">
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.representatives_phone_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('messages.representatives_phone_number')" value="{{ $representative->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.representatives_email')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('messages.representatives_email')" value="{{ $representative->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.representatives_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($representative->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.representatives_update') 
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
