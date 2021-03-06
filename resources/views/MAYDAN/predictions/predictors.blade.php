@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('predictions_predictions') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('predictions_predictions') }} 
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('predictions.create') }}">{{ __('Add new') }}</a>


                            </div>
                        </div>
                    </div>
                </div> -->
 
@endsection


 

@push('style')


@endpush


@section('content')



<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">{{ __('predictions_predictions') }}</h4>
                                </div>
                                <div class="card-content">
                                   @if (Session::has('message'))

                                     <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                                {!! session('message') !!}
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                            </button>
                                        </div>

                                        @endif
                                        
                                    <div class="table-responsive mt-1">
                                        
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
           
<th  >{{ __('predictions_id') }}</th>
<th  >{{ __('predictions_prediction') }}</th>
<th  >{{ __('predictions_prediction_type_id') }}</th>
<th  >{{ __('predictions_predictors') }}</th>
<th  >{{ __('predictions_correct_predictions') }}</th>
<th  >{{ __('predictions_correct_predictors') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
     <tbody>
     @foreach( $predictions as $prediction)
        <tr>

<td>{{ $prediction->id  }}</td>
<td>{{ $prediction->Prediction  }}</td>
 
@if($prediction->prediction_type_id ==1)
<td title="{{ ($prediction->final_result_predictions) ? $prediction->final_result_predictions->status  : ''  }} " >
   
{{ ($prediction->final_result_predictions) ? $prediction->final_result_predictions->result_home_team  : '' }} - 
    {{ ($prediction->final_result_predictions) ? $prediction->final_result_predictions->result_away_team : ''  }}
    </td>
      @endif
@if($prediction->prediction_type_id == 2)
<td  >{{ ($prediction->first_goal_predictions) ? $prediction->first_goal_predictions->result_first_goal_player_name : ''  }}</td>
      @endif
      
       @if($prediction->prediction_type_id == 3)
<td>
  </td>
      @endif
      <td>
      <i class="fa fa-circle   text-success mr-50" </i>
       {{ $prediction->prediction_type->name  }}
    </td>


      <td> <a href="/predictions/{{ $prediction->id }}/predictors" >{{ $prediction->predictors  }} </a> </td>

<td>{{ $prediction->correct_predictors  }}</td>

      
      

      
      
      
      
      

 
  <td>
           <a href="{{ route('predictions.show', $prediction) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
           
             <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('???? ?????? ?????????? ?? ');event.preventDefault(); 
                                                document.getElementById('destroy-prediction_{{ $prediction->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-prediction_{{  $prediction->id }}"
                                                    action="{{ route('predictions.destroy', $prediction) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td   dir="rtl"  colspan="6"  >{{$predictions->links("pagination::bootstrap-4")}} </td></tr>
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
