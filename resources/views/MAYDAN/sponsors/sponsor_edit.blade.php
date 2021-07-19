@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.sponsors_sponsors')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.sponsors_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/sponsors">     @lang('messages.sponsors_sponsors')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/sponsors/create" title = "@lang('messages.sponsors_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.sponsors_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/sponsors') }}">
                        {!! csrf_field() !!}

                        

                             <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.sponsors_club_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="club_id" >

                            @foreach($clubs as $club)
                             <option  <?php echo ($sponsor->club_id == $club->id) ? 'selected="selected"' : '' ; ?>    value="{{ $club->id }}" >{{ $club->code }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.sponsors_name')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="@lang('messages.sponsors_name')" value="{{ $sponsor->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.sponsors_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.sponsors_application_id')" value="{{ $sponsor->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('sponsor_type_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.sponsors_sponsor_type_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="sponsor_type_id" >

                            @foreach($sponsor_types as $sponsor_type)
                             <option  <?php echo ($sponsor->sponsor_type_id == $sponsor_type->id) ? 'selected="selected"' : '' ; ?>    value="{{ $sponsor_type->id }}" >{{ $sponsor_type->name }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('sponsor_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sponsor_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.sponsors_icon')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="icon" placeholder="@lang('messages.sponsors_icon')" value="{{ $sponsor->icon }}">
                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.sponsors_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($sponsor->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.sponsors_update') 
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
