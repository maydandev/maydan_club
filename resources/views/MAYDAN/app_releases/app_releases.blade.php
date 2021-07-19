@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('app_releases_app_releases') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('app_releases_app_releases') }} 
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
                            <a class="dropdown-item" href="{{ route('app_releases.create') }}">{{ __('Add new') }}</a>


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

 <table  id="app_releases-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.app_releases_updated_at')</th>
<th >@lang('messages.app_releases_created_at')</th>
<th >@lang('messages.app_releases_is_active')</th>
<th >@lang('messages.app_releases_notes')</th>
<th >@lang('messages.app_releases_ios_release_version')</th>
<th >@lang('messages.app_releases_ios_version')</th>
<th >@lang('messages.app_releases_android_release_version')</th>
<th >@lang('messages.app_releases_android_version')</th>
<th >@lang('messages.app_releases_is_delivery_and_shipping')</th>
<th >@lang('messages.app_releases_is_collect_and_pickup')</th>
<th >@lang('messages.app_releases_is_shop')</th>
<th >@lang('messages.app_releases_is_first_scorer')</th>
<th >@lang('messages.app_releases_is_match_lineup')</th>
<th >@lang('messages.app_releases_is_final_match')</th>
<th >@lang('messages.app_releases_club_logo')</th>
<th >@lang('messages.app_releases_currency')</th>
<th >@lang('messages.app_releases_secondary_color')</th>
<th >@lang('messages.app_releases_primary_color')</th>
<th >@lang('messages.app_releases_language')</th>
<th >@lang('messages.app_releases_icon')</th>
<th >@lang('messages.app_releases_name')</th>
<th >@lang('messages.app_releases_version')</th>
<th >@lang('messages.app_releases_app_release_status_id')</th>
<th >@lang('messages.app_releases_application_id')</th>
<th >@lang('messages.app_releases_club_id')</th>
<th >@lang('messages.app_releases_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.app_releases_updated_at')</th>
<th >@lang('messages.app_releases_created_at')</th>
<th >@lang('messages.app_releases_is_active')</th>
<th >@lang('messages.app_releases_notes')</th>
<th >@lang('messages.app_releases_ios_release_version')</th>
<th >@lang('messages.app_releases_ios_version')</th>
<th >@lang('messages.app_releases_android_release_version')</th>
<th >@lang('messages.app_releases_android_version')</th>
<th >@lang('messages.app_releases_is_delivery_and_shipping')</th>
<th >@lang('messages.app_releases_is_collect_and_pickup')</th>
<th >@lang('messages.app_releases_is_shop')</th>
<th >@lang('messages.app_releases_is_first_scorer')</th>
<th >@lang('messages.app_releases_is_match_lineup')</th>
<th >@lang('messages.app_releases_is_final_match')</th>
<th >@lang('messages.app_releases_club_logo')</th>
<th >@lang('messages.app_releases_currency')</th>
<th >@lang('messages.app_releases_secondary_color')</th>
<th >@lang('messages.app_releases_primary_color')</th>
<th >@lang('messages.app_releases_language')</th>
<th >@lang('messages.app_releases_icon')</th>
<th >@lang('messages.app_releases_name')</th>
<th >@lang('messages.app_releases_version')</th>
<th >@lang('messages.app_releases_app_release_status_id')</th>
<th >@lang('messages.app_releases_application_id')</th>
<th >@lang('messages.app_releases_club_id')</th>
<th >@lang('messages.app_releases_id')</th>        </tr>
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
    $('#app_releases-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/app_releases_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'is_active', name: 'is_active'},
    {data: 'notes', name: 'notes'},
    {data: 'ios_release_version', name: 'ios_release_version'},
    {data: 'ios_version', name: 'ios_version'},
    {data: 'android_release_version', name: 'android_release_version'},
    {data: 'android_version', name: 'android_version'},
    {data: 'is_delivery_and_shipping', name: 'is_delivery_and_shipping'},
    {data: 'is_collect_and_pickup', name: 'is_collect_and_pickup'},
    {data: 'is_shop', name: 'is_shop'},
    {data: 'is_first_scorer', name: 'is_first_scorer'},
    {data: 'is_match_lineup', name: 'is_match_lineup'},
    {data: 'is_final_match', name: 'is_final_match'},
    {data: 'club_logo', name: 'club_logo'},
    {data: 'currency', name: 'currency'},
    {data: 'secondary_color', name: 'secondary_color'},
    {data: 'primary_color', name: 'primary_color'},
    {data: 'language', name: 'language'},
    {data: 'icon', name: 'icon'},
    {data: 'name', name: 'name'},
    {data: 'version', name: 'version'},
    {data: 'app_release_status_id', name: 'app_release_status_id'},
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
