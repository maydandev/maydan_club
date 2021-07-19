@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('fixtures_fixtures') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('fixtures_fixtures') }} 
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
                            <a class="dropdown-item" href="{{ route('fixtures.create') }}">{{ __('Add new') }}</a>


                            </div>
                        </div>
                    </div>
                </div>
 
@endsection


 

@push('style')


@endpush


@section('content')



<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">{{ __('fixtures_fixtures') }}</h4>
                                </div>
                                <div class="card-content">
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
                                        
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
           
<th  >{{ __('fixtures_id') }}</th>
<th  >{{ __('fixtures_league_id') }}</th>
<th  >{{ __('fixtures_event_date') }}</th>
<th  >{{ __('fixtures_firstHalfStart') }}</th>
<th  >{{ __('fixtures_secondHalfStart') }}</th>
<th  >{{ __('fixtures_round') }}</th>
<th  >{{ __('fixtures_status') }}</th>
<th  >{{ __('fixtures_statusShort') }}</th>
<th  >{{ __('fixtures_home_team_id') }}</th>
<th  >{{ __('fixtures_away_team_id') }}</th>
<th  >{{ __('fixtures_goalsHomeTeam') }}</th>
<th  >{{ __('fixtures_goalsAwayTeam') }}</th>
<th  >{{ __('fixtures_created_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($fixtures as $fixture)
            <tr>
         
            

           


   
        
<td>{{ $fixture->id }}</td>
<td>{{ $fixture->league_id }}</td>
<td>{{ $fixture->event_date }}</td>
<td>{{ $fixture->firstHalfStart }}</td>
<td>{{ $fixture->secondHalfStart }}</td>
<td>{{ $fixture->round }}</td>
<td>{{ $fixture->status }}</td>
<td>{{ $fixture->statusShort }}</td>
<td>{{ $fixture->home_team_id }}</td>
<td>{{ $fixture->away_team_id }}</td>
<td>{{ $fixture->goalsHomeTeam }}</td>
<td>{{ $fixture->goalsAwayTeam }}</td>
<td>{{ $fixture->created_at }}</td>         <td>

           <a href="{{ route('fixtures.show', $fixture) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
           
             <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('هل أنت متأكد ؟ ');event.preventDefault(); 
                                                document.getElementById('destroy-fixture_{{ $fixture->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-fixture_{{  $fixture->id }}"
                                                    action="{{ route('fixtures.destroy', $fixture) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td   dir="rtl"  colspan="14"  >{{$fixtures->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
    
</table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@stop


@push('scripts')

                                  
@endpush
