@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('notifications_notifications') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('notifications_notifications') }} 
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
                            <a class="dropdown-item" href="{{ route('notifications.create') }}">{{ __('Add new') }}</a>


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

 <table  id="notifications-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.notifications_updated_at')</th>
<th >@lang('messages.notifications_created_at')</th>
<th >@lang('messages.notifications_red_card')</th>
<th >@lang('messages.notifications_full_time')</th>
<th >@lang('messages.notifications_half_time')</th>
<th >@lang('messages.notifications_goals')</th>
<th >@lang('messages.notifications_kick_off')</th>
<th >@lang('messages.notifications_line_ups')</th>
<th >@lang('messages.notifications_application_id')</th>
<th >@lang('messages.notifications_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.notifications_updated_at')</th>
<th >@lang('messages.notifications_created_at')</th>
<th >@lang('messages.notifications_red_card')</th>
<th >@lang('messages.notifications_full_time')</th>
<th >@lang('messages.notifications_half_time')</th>
<th >@lang('messages.notifications_goals')</th>
<th >@lang('messages.notifications_kick_off')</th>
<th >@lang('messages.notifications_line_ups')</th>
<th >@lang('messages.notifications_application_id')</th>
<th >@lang('messages.notifications_id')</th>        </tr>
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
    $('#notifications-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/notifications_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'red_card', name: 'red_card'},
    {data: 'full_time', name: 'full_time'},
    {data: 'half_time', name: 'half_time'},
    {data: 'goals', name: 'goals'},
    {data: 'kick_off', name: 'kick_off'},
    {data: 'line_ups', name: 'line_ups'},
    {data: 'application_id', name: 'application_id'},
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
