@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('football_teams_football_teams') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('football_teams_football_teams') }} 
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
                            <a class="dropdown-item" href="{{ route('football_teams.create') }}">{{ __('Add new') }}</a>


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
                                    <h4 class="mb-0">{{ __('football_teams_football_teams') }}</h4>
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
           
<th  >{{ __('football_teams_id') }}</th>
<th  >{{ __('football_teams_name') }}</th>
<th  >{{ __('football_teams_logo') }}</th>
<th  >{{ __('football_teams_country_id') }}</th>
<th  >{{ __('football_teams_founded') }}</th>
<th  >{{ __('football_teams_venue_name') }}</th>
<th  >{{ __('football_teams_venue_city') }}</th>
<th  >{{ __('football_teams_venue_capacity') }}</th>
<th  >{{ __('football_teams_created_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($football_teams as $football_team)
            <tr>
         
            

           


   
        
<td>{{ $football_team->id }}</td>
<td>{{ $football_team->name }}</td>
<td>{{ $football_team->logo }}</td>
<td>{{ $football_team->country_id }}</td>
<td>{{ $football_team->founded }}</td>
<td>{{ $football_team->venue_name }}</td>
<td>{{ $football_team->venue_city }}</td>
<td>{{ $football_team->venue_capacity }}</td>
<td>{{ $football_team->created_at }}</td>         <td>

           <a href="{{ route('football_teams.show', $football_team) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
           
             <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('هل أنت متأكد ؟ ');event.preventDefault(); 
                                                document.getElementById('destroy-football_team_{{ $football_team->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-football_team_{{  $football_team->id }}"
                                                    action="{{ route('football_teams.destroy', $football_team) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td   dir="rtl"  colspan="10"  >{{$football_teams->links("pagination::bootstrap-4")}} </td></tr>
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
