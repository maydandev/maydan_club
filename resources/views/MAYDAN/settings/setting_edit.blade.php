@extends('layouts.app')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.settings_settings')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.settings_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/settings">     @lang('messages.settings_settings')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/settings/create" title = "@lang('messages.settings_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.settings_add_new') 
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/settings') }}">
                        {!! csrf_field() !!}

                        

                             <div class="form-group{{ $errors->has('club_id') ? ' has-error' : '' }}">
                               <label class="col-md-4 control-label "> @lang('messages.settings_club_id')</label>
                            <div class="col-md-6  ">
                            <select class="form-control "  name="club_id" >

                            @foreach($clubs as $club)
                             <option  <?php echo ($setting->club_id == $club->id) ? 'selected="selected"' : '' ; ?>    value="{{ $club->id }}" >{{ $club->code }}</option>
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
            <label class="col-md-4 control-label  "> @lang('messages.settings_application_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="application_id" placeholder="@lang('messages.settings_application_id')" value="{{ $setting->application_id }}">
                                @if ($errors->has('application_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_final_match') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_is_final_match')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_final_match" placeholder="@lang('messages.settings_is_final_match')" value="{{ $setting->is_final_match }}">
                                @if ($errors->has('is_final_match'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_final_match') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('final_match_note') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_final_match_note')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="final_match_note" placeholder="@lang('messages.settings_final_match_note')" value="{{ $setting->final_match_note }}">
                                @if ($errors->has('final_match_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_match_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('final_match_points') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_final_match_points')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="final_match_points" placeholder="@lang('messages.settings_final_match_points')" value="{{ $setting->final_match_points }}">
                                @if ($errors->has('final_match_points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('final_match_points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_match_lineup') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_is_match_lineup')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_match_lineup" placeholder="@lang('messages.settings_is_match_lineup')" value="{{ $setting->is_match_lineup }}">
                                @if ($errors->has('is_match_lineup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_match_lineup') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('match_lineup_note') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_match_lineup_note')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="match_lineup_note" placeholder="@lang('messages.settings_match_lineup_note')" value="{{ $setting->match_lineup_note }}">
                                @if ($errors->has('match_lineup_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('match_lineup_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('match_lineup_points') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_match_lineup_points')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="match_lineup_points" placeholder="@lang('messages.settings_match_lineup_points')" value="{{ $setting->match_lineup_points }}">
                                @if ($errors->has('match_lineup_points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('match_lineup_points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_first_scorer') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_is_first_scorer')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_first_scorer" placeholder="@lang('messages.settings_is_first_scorer')" value="{{ $setting->is_first_scorer }}">
                                @if ($errors->has('is_first_scorer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_first_scorer') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('first_scorer_note') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_first_scorer_note')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="first_scorer_note" placeholder="@lang('messages.settings_first_scorer_note')" value="{{ $setting->first_scorer_note }}">
                                @if ($errors->has('first_scorer_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_scorer_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('first_scorer_points') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_first_scorer_points')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="first_scorer_points" placeholder="@lang('messages.settings_first_scorer_points')" value="{{ $setting->first_scorer_points }}">
                                @if ($errors->has('first_scorer_points'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_scorer_points') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_shop') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_is_shop')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_shop" placeholder="@lang('messages.settings_is_shop')" value="{{ $setting->is_shop }}">
                                @if ($errors->has('is_shop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_shop') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('shop_note') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_shop_note')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="shop_note" placeholder="@lang('messages.settings_shop_note')" value="{{ $setting->shop_note }}">
                                @if ($errors->has('shop_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_collect_and_pickup') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_is_collect_and_pickup')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_collect_and_pickup" placeholder="@lang('messages.settings_is_collect_and_pickup')" value="{{ $setting->is_collect_and_pickup }}">
                                @if ($errors->has('is_collect_and_pickup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_collect_and_pickup') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('collect_and_pickup_note') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_collect_and_pickup_note')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="collect_and_pickup_note" placeholder="@lang('messages.settings_collect_and_pickup_note')" value="{{ $setting->collect_and_pickup_note }}">
                                @if ($errors->has('collect_and_pickup_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('collect_and_pickup_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('is_delivery_and_shipping') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_is_delivery_and_shipping')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="is_delivery_and_shipping" placeholder="@lang('messages.settings_is_delivery_and_shipping')" value="{{ $setting->is_delivery_and_shipping }}">
                                @if ($errors->has('is_delivery_and_shipping'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_delivery_and_shipping') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('delivery_and_shipping_note') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('messages.settings_delivery_and_shipping_note')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="delivery_and_shipping_note" placeholder="@lang('messages.settings_delivery_and_shipping_note')" value="{{ $setting->delivery_and_shipping_note }}">
                                @if ($errors->has('delivery_and_shipping_note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('delivery_and_shipping_note') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.settings_update') 
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
