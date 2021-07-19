@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('leagues_leagues') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('leagues_leagues') }} 
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
                            <a class="dropdown-item" href="{{ route('leagues.create') }}">{{ __('Add new') }}</a>


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

 <table  id="leagues-table" dir="ltr"  class="table  zero-configuration" >
    <thead>
        <tr>

        <th class="text-right">{{ __('action') }}</th>
<th >@lang('messages.leagues_updated_at')</th>
<th >@lang('messages.leagues_created_at')</th>
<th >@lang('messages.leagues_coverage_odds')</th>
<th >@lang('messages.leagues_coverage_predictions')</th>
<th >@lang('messages.leagues_coverage_topscorers')</th>
<th >@lang('messages.leagues_coverage_players')</th>
<th >@lang('messages.leagues_coverage_fixtures_players_statistics')</th>
<th >@lang('messages.leagues_coverage_fixtures_statistics')</th>
<th >@lang('messages.leagues_coverage_fixtures_lineups')</th>
<th >@lang('messages.leagues_coverage_fixtures_events')</th>
<th >@lang('messages.leagues_coverage_standings')</th>
<th >@lang('messages.leagues_is_current')</th>
<th >@lang('messages.leagues_standings')</th>
<th >@lang('messages.leagues_flag')</th>
<th >@lang('messages.leagues_logo')</th>
<th >@lang('messages.leagues_season_end')</th>
<th >@lang('messages.leagues_season_start')</th>
<th >@lang('messages.leagues_season')</th>
<th >@lang('messages.leagues_country_id')</th>
<th >@lang('messages.leagues_league_type_id')</th>
<th >@lang('messages.leagues_name')</th>
<th >@lang('messages.leagues_league_id')</th>
<th >@lang('messages.leagues_id')</th>       </tr>
    </thead>
    <tfoot>
        <tr>
        <th >@lang('messages.action')</th> 

        
<th >@lang('messages.leagues_updated_at')</th>
<th >@lang('messages.leagues_created_at')</th>
<th >@lang('messages.leagues_coverage_odds')</th>
<th >@lang('messages.leagues_coverage_predictions')</th>
<th >@lang('messages.leagues_coverage_topscorers')</th>
<th >@lang('messages.leagues_coverage_players')</th>
<th >@lang('messages.leagues_coverage_fixtures_players_statistics')</th>
<th >@lang('messages.leagues_coverage_fixtures_statistics')</th>
<th >@lang('messages.leagues_coverage_fixtures_lineups')</th>
<th >@lang('messages.leagues_coverage_fixtures_events')</th>
<th >@lang('messages.leagues_coverage_standings')</th>
<th >@lang('messages.leagues_is_current')</th>
<th >@lang('messages.leagues_standings')</th>
<th >@lang('messages.leagues_flag')</th>
<th >@lang('messages.leagues_logo')</th>
<th >@lang('messages.leagues_season_end')</th>
<th >@lang('messages.leagues_season_start')</th>
<th >@lang('messages.leagues_season')</th>
<th >@lang('messages.leagues_country_id')</th>
<th >@lang('messages.leagues_league_type_id')</th>
<th >@lang('messages.leagues_name')</th>
<th >@lang('messages.leagues_league_id')</th>
<th >@lang('messages.leagues_id')</th>        </tr>
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
    $('#leagues-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: '/remote/leagues_data',
        columns: [
        {data: 'action', name: 'action', orderable: false, searchable: false},

          {data: 'updated_at', name: 'updated_at'},
    {data: 'created_at', name: 'created_at'},
    {data: 'coverage_odds', name: 'coverage_odds'},
    {data: 'coverage_predictions', name: 'coverage_predictions'},
    {data: 'coverage_topscorers', name: 'coverage_topscorers'},
    {data: 'coverage_players', name: 'coverage_players'},
    {data: 'coverage_fixtures_players_statistics', name: 'coverage_fixtures_players_statistics'},
    {data: 'coverage_fixtures_statistics', name: 'coverage_fixtures_statistics'},
    {data: 'coverage_fixtures_lineups', name: 'coverage_fixtures_lineups'},
    {data: 'coverage_fixtures_events', name: 'coverage_fixtures_events'},
    {data: 'coverage_standings', name: 'coverage_standings'},
    {data: 'is_current', name: 'is_current'},
    {data: 'standings', name: 'standings'},
    {data: 'flag', name: 'flag'},
    {data: 'logo', name: 'logo'},
    {data: 'season_end', name: 'season_end'},
    {data: 'season_start', name: 'season_start'},
    {data: 'season', name: 'season'},
    {data: 'country_id', name: 'country_id'},
    {data: 'league_type_id', name: 'league_type_id'},
    {data: 'name', name: 'name'},
    {data: 'league_id', name: 'league_id'},
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
