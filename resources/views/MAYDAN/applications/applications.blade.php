@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('applications_applications') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('applications_applications') }} 
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
                            <a class="dropdown-item" href="{{ route('applications.create') }}">{{ __('Add new') }}</a>


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

 <table  id="applications-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.applications_updated_at')</th>
<th >@lang('messages.applications_created_at')</th>
<th >@lang('messages.applications_club_id')</th>
<th >@lang('messages.applications_configuration')</th>
<th >@lang('messages.applications_base_url')</th>
<th >@lang('messages.applications_current_season')</th>
<th >@lang('messages.applications_current_league_id')</th>
<th >@lang('messages.applications_splash_image')</th>
<th >@lang('messages.applications_team_id')</th>
<th >@lang('messages.applications_club_logo')</th>
<th >@lang('messages.applications_currency')</th>
<th >@lang('messages.applications_is_gradient_secondary_color')</th>
<th >@lang('messages.applications_is_gradient_primary_color')</th>
<th >@lang('messages.applications_alternative_secondary_color')</th>
<th >@lang('messages.applications_alternative_primary_color')</th>
<th >@lang('messages.applications_secondary_color')</th>
<th >@lang('messages.applications_primary_color')</th>
<th >@lang('messages.applications_language')</th>
<th >@lang('messages.applications_icon')</th>
<th >@lang('messages.applications_name')</th>
<th >@lang('messages.applications_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.applications_updated_at')</th>
<th >@lang('messages.applications_created_at')</th>
<th >@lang('messages.applications_club_id')</th>
<th >@lang('messages.applications_configuration')</th>
<th >@lang('messages.applications_base_url')</th>
<th >@lang('messages.applications_current_season')</th>
<th >@lang('messages.applications_current_league_id')</th>
<th >@lang('messages.applications_splash_image')</th>
<th >@lang('messages.applications_team_id')</th>
<th >@lang('messages.applications_club_logo')</th>
<th >@lang('messages.applications_currency')</th>
<th >@lang('messages.applications_is_gradient_secondary_color')</th>
<th >@lang('messages.applications_is_gradient_primary_color')</th>
<th >@lang('messages.applications_alternative_secondary_color')</th>
<th >@lang('messages.applications_alternative_primary_color')</th>
<th >@lang('messages.applications_secondary_color')</th>
<th >@lang('messages.applications_primary_color')</th>
<th >@lang('messages.applications_language')</th>
<th >@lang('messages.applications_icon')</th>
<th >@lang('messages.applications_name')</th>
<th >@lang('messages.applications_id')</th>        </tr>
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
    $('#applications-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/applications_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'club_id', name: 'club_id'},
    {data: 'configuration', name: 'configuration'},
    {data: 'base_url', name: 'base_url'},
    {data: 'current_season', name: 'current_season'},
    {data: 'current_league_id', name: 'current_league_id'},
    {data: 'splash_image', name: 'splash_image'},
    {data: 'team_id', name: 'team_id'},
    {data: 'club_logo', name: 'club_logo'},
    {data: 'currency', name: 'currency'},
    {data: 'is_gradient_secondary_color', name: 'is_gradient_secondary_color'},
    {data: 'is_gradient_primary_color', name: 'is_gradient_primary_color'},
    {data: 'alternative_secondary_color', name: 'alternative_secondary_color'},
    {data: 'alternative_primary_color', name: 'alternative_primary_color'},
    {data: 'secondary_color', name: 'secondary_color'},
    {data: 'primary_color', name: 'primary_color'},
    {data: 'language', name: 'language'},
    {data: 'icon', name: 'icon'},
    {data: 'name', name: 'name'},
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
