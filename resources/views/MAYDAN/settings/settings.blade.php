@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('settings_settings') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('settings_settings') }} 
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('settings.create') }}">{{ __('Add new') }}</a>


                            </div>
                        </div>
                    </div>
                </div>
 
@endsection


 

@push('style')


@endpush


@section('content')


 

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
 
                                    </h4>
                                </div>
                                <div class="card-content">
 

                                


                                    <div class="card-body card-dashboard">
                                  @if (Session::has('message'))

                                     <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                                {!! session('message') !!}
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        @endif

                                        <p class="card-text"></p>
                                        <div class="table-responsive">

 <table  id="settings-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.settings_updated_at')</th>
<th >@lang('messages.settings_created_at')</th>
<th >@lang('messages.settings_delivery_and_shipping_note')</th>
<th >@lang('messages.settings_is_delivery_and_shipping')</th>
<th >@lang('messages.settings_collect_and_pickup_note')</th>
<th >@lang('messages.settings_is_collect_and_pickup')</th>
<th >@lang('messages.settings_shop_note')</th>
<th >@lang('messages.settings_is_shop')</th>
<th >@lang('messages.settings_first_scorer_points')</th>
<th >@lang('messages.settings_first_scorer_note')</th>
<th >@lang('messages.settings_is_first_scorer')</th>
<th >@lang('messages.settings_match_lineup_points')</th>
<th >@lang('messages.settings_match_lineup_note')</th>
<th >@lang('messages.settings_is_match_lineup')</th>
<th >@lang('messages.settings_final_match_points')</th>
<th >@lang('messages.settings_final_match_note')</th>
<th >@lang('messages.settings_is_final_match')</th>
<th >@lang('messages.settings_application_id')</th>
<th >@lang('messages.settings_club_id')</th>
<th >@lang('messages.settings_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.settings_updated_at')</th>
<th >@lang('messages.settings_created_at')</th>
<th >@lang('messages.settings_delivery_and_shipping_note')</th>
<th >@lang('messages.settings_is_delivery_and_shipping')</th>
<th >@lang('messages.settings_collect_and_pickup_note')</th>
<th >@lang('messages.settings_is_collect_and_pickup')</th>
<th >@lang('messages.settings_shop_note')</th>
<th >@lang('messages.settings_is_shop')</th>
<th >@lang('messages.settings_first_scorer_points')</th>
<th >@lang('messages.settings_first_scorer_note')</th>
<th >@lang('messages.settings_is_first_scorer')</th>
<th >@lang('messages.settings_match_lineup_points')</th>
<th >@lang('messages.settings_match_lineup_note')</th>
<th >@lang('messages.settings_is_match_lineup')</th>
<th >@lang('messages.settings_final_match_points')</th>
<th >@lang('messages.settings_final_match_note')</th>
<th >@lang('messages.settings_is_final_match')</th>
<th >@lang('messages.settings_application_id')</th>
<th >@lang('messages.settings_club_id')</th>
<th >@lang('messages.settings_id')</th>        </tr>
    </tfoot>
</table>

              </div>
              </div>

          </div>
           </div>
           </div>

@stop


@push('scripts')
<script>
    $('#settings-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/settings_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'delivery_and_shipping_note', name: 'delivery_and_shipping_note'},
    {data: 'is_delivery_and_shipping', name: 'is_delivery_and_shipping'},
    {data: 'collect_and_pickup_note', name: 'collect_and_pickup_note'},
    {data: 'is_collect_and_pickup', name: 'is_collect_and_pickup'},
    {data: 'shop_note', name: 'shop_note'},
    {data: 'is_shop', name: 'is_shop'},
    {data: 'first_scorer_points', name: 'first_scorer_points'},
    {data: 'first_scorer_note', name: 'first_scorer_note'},
    {data: 'is_first_scorer', name: 'is_first_scorer'},
    {data: 'match_lineup_points', name: 'match_lineup_points'},
    {data: 'match_lineup_note', name: 'match_lineup_note'},
    {data: 'is_match_lineup', name: 'is_match_lineup'},
    {data: 'final_match_points', name: 'final_match_points'},
    {data: 'final_match_note', name: 'final_match_note'},
    {data: 'is_final_match', name: 'is_final_match'},
    {data: 'application_id', name: 'application_id'},
    {data: 'club_id', name: 'club_id'},
    {data: 'id', name: 'id'},
  
 ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false, true).draw();
                });
            });
        }
    });
</script>
@endpush
