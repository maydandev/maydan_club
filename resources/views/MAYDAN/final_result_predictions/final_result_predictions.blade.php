@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('final_result_predictions_final_result_predictions') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('final_result_predictions_final_result_predictions') }} 
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
                            <a class="dropdown-item" href="{{ route('final_result_predictions.create') }}">{{ __('Add new') }}</a>


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

 <table  id="final_result_predictions-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.final_result_predictions_updated_at')</th>
<th >@lang('messages.final_result_predictions_created_at')</th>
<th >@lang('messages.final_result_predictions_data')</th>
<th >@lang('messages.final_result_predictions_prediction_id')</th>
<th >@lang('messages.final_result_predictions_is_active')</th>
<th >@lang('messages.final_result_predictions_result_away_team')</th>
<th >@lang('messages.final_result_predictions_result_home_team')</th>
<th >@lang('messages.final_result_predictions_status')</th>
<th >@lang('messages.final_result_predictions_away_team_id')</th>
<th >@lang('messages.final_result_predictions_home_team_id')</th>
<th >@lang('messages.final_result_predictions_fixture_id')</th>
<th >@lang('messages.final_result_predictions_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.final_result_predictions_updated_at')</th>
<th >@lang('messages.final_result_predictions_created_at')</th>
<th >@lang('messages.final_result_predictions_data')</th>
<th >@lang('messages.final_result_predictions_prediction_id')</th>
<th >@lang('messages.final_result_predictions_is_active')</th>
<th >@lang('messages.final_result_predictions_result_away_team')</th>
<th >@lang('messages.final_result_predictions_result_home_team')</th>
<th >@lang('messages.final_result_predictions_status')</th>
<th >@lang('messages.final_result_predictions_away_team_id')</th>
<th >@lang('messages.final_result_predictions_home_team_id')</th>
<th >@lang('messages.final_result_predictions_fixture_id')</th>
<th >@lang('messages.final_result_predictions_id')</th>        </tr>
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
    $('#final_result_predictions-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/final_result_predictions_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'data', name: 'data'},
    {data: 'prediction_id', name: 'prediction_id'},
    {data: 'is_active', name: 'is_active'},
    {data: 'result_away_team', name: 'result_away_team'},
    {data: 'result_home_team', name: 'result_home_team'},
    {data: 'status', name: 'status'},
    {data: 'away_team_id', name: 'away_team_id'},
    {data: 'home_team_id', name: 'home_team_id'},
    {data: 'fixture_id', name: 'fixture_id'},
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
