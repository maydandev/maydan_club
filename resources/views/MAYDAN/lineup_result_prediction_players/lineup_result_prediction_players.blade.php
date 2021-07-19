@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('lineup_result_prediction_players_lineup_result_prediction_players') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('lineup_result_prediction_players_lineup_result_prediction_players') }} 
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
                            <a class="dropdown-item" href="{{ route('lineup_result_prediction_players.create') }}">{{ __('Add new') }}</a>


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

 <table  id="lineup_result_prediction_players-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.lineup_result_prediction_players_updated_at')</th>
<th >@lang('messages.lineup_result_prediction_players_created_at')</th>
<th >@lang('messages.lineup_result_prediction_players_player_key')</th>
<th >@lang('messages.lineup_result_prediction_players_player_name')</th>
<th >@lang('messages.lineup_result_prediction_players_player_id')</th>
<th >@lang('messages.lineup_result_prediction_players_prediction_id')</th>
<th >@lang('messages.lineup_result_prediction_players_fixture_id')</th>
<th >@lang('messages.lineup_result_prediction_players_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.lineup_result_prediction_players_updated_at')</th>
<th >@lang('messages.lineup_result_prediction_players_created_at')</th>
<th >@lang('messages.lineup_result_prediction_players_player_key')</th>
<th >@lang('messages.lineup_result_prediction_players_player_name')</th>
<th >@lang('messages.lineup_result_prediction_players_player_id')</th>
<th >@lang('messages.lineup_result_prediction_players_prediction_id')</th>
<th >@lang('messages.lineup_result_prediction_players_fixture_id')</th>
<th >@lang('messages.lineup_result_prediction_players_id')</th>        </tr>
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
    $('#lineup_result_prediction_players-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/lineup_result_prediction_players_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'player_key', name: 'player_key'},
    {data: 'player_name', name: 'player_name'},
    {data: 'player_id', name: 'player_id'},
    {data: 'prediction_id', name: 'prediction_id'},
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
