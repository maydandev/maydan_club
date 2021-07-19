@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('players_players') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('players_players') }} 
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
                            <a class="dropdown-item" href="{{ route('players.create') }}">{{ __('Add new') }}</a>


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

 <table  id="players-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.players_updated_at')</th>
<th >@lang('messages.players_created_at')</th>
<th >@lang('messages.players_weight')</th>
<th >@lang('messages.players_height')</th>
<th >@lang('messages.players_nationality')</th>
<th >@lang('messages.players_birth_country')</th>
<th >@lang('messages.players_birth_place')</th>
<th >@lang('messages.players_birth_date')</th>
<th >@lang('messages.players_age')</th>
<th >@lang('messages.players_position')</th>
<th >@lang('messages.players_number')</th>
<th >@lang('messages.players_lastname')</th>
<th >@lang('messages.players_firstname')</th>
<th >@lang('messages.players_player_name')</th>
<th >@lang('messages.players_player_id')</th>
<th >@lang('messages.players_season')</th>
<th >@lang('messages.players_team_id')</th>
<th >@lang('messages.players_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.players_updated_at')</th>
<th >@lang('messages.players_created_at')</th>
<th >@lang('messages.players_weight')</th>
<th >@lang('messages.players_height')</th>
<th >@lang('messages.players_nationality')</th>
<th >@lang('messages.players_birth_country')</th>
<th >@lang('messages.players_birth_place')</th>
<th >@lang('messages.players_birth_date')</th>
<th >@lang('messages.players_age')</th>
<th >@lang('messages.players_position')</th>
<th >@lang('messages.players_number')</th>
<th >@lang('messages.players_lastname')</th>
<th >@lang('messages.players_firstname')</th>
<th >@lang('messages.players_player_name')</th>
<th >@lang('messages.players_player_id')</th>
<th >@lang('messages.players_season')</th>
<th >@lang('messages.players_team_id')</th>
<th >@lang('messages.players_id')</th>        </tr>
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
    $('#players-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/players_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'weight', name: 'weight'},
    {data: 'height', name: 'height'},
    {data: 'nationality', name: 'nationality'},
    {data: 'birth_country', name: 'birth_country'},
    {data: 'birth_place', name: 'birth_place'},
    {data: 'birth_date', name: 'birth_date'},
    {data: 'age', name: 'age'},
    {data: 'position', name: 'position'},
    {data: 'number', name: 'number'},
    {data: 'lastname', name: 'lastname'},
    {data: 'firstname', name: 'firstname'},
    {data: 'player_name', name: 'player_name'},
    {data: 'player_id', name: 'player_id'},
    {data: 'season', name: 'season'},
    {data: 'team_id', name: 'team_id'},
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
