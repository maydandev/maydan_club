@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.contacts_contacts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.contacts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/contacts">     @lang('messages.contacts_contacts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/contacts/create" title = "@lang('messages.contacts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.contacts_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/contacts') }}">
                        {!! csrf_field() !!}

                        

       <div class="form-group{{ $errors->has('application_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.contacts_application_id')" value="{{ $contact->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


                             <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.contacts_club_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="club_id" >

                            @foreach($clubs as $club)
                             <option  <?php echo ($contact->club_id == $club->id) ? 'selected="selected"' : '' ; ?>    value="{{ $club->id }}" >{{ $club->code }}</option>
                             @endforeach
                            </select>


                                @if ($errors->has('club_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('club_id') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

       <div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('messages.contacts_purpose')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="purpose" placeholder="@lang('messages.contacts_purpose')"  >{{ $contact->purpose }}</textarea>
                                @if ($errors->has('purpose'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('purpose') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_phone_number')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="phone_number" placeholder="@lang('messages.contacts_phone_number')" value="{{ $contact->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_email')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="@lang('messages.contacts_email')" value="{{ $contact->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('working_days') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_working_days')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="working_days" placeholder="@lang('messages.contacts_working_days')" value="{{ $contact->working_days }}">
                                @if ($errors->has('working_days'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('working_days') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('working_hours_from') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_working_hours_from')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="working_hours_from" placeholder="@lang('messages.contacts_working_hours_from')" value="{{ $contact->working_hours_from }}">
                                @if ($errors->has('working_hours_from'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('working_hours_from') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('working_hours_to') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_working_hours_to')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="working_hours_to" placeholder="@lang('messages.contacts_working_hours_to')" value="{{ $contact->working_hours_to }}">
                                @if ($errors->has('working_hours_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('working_hours_to') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('messages.contacts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($contact->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>




 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.contacts_update') 
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
