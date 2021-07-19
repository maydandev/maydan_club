@extends('layouts.app')

@section('content-header')
 
<?php use Illuminate\Support\Str; ?>


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('quizzes_quizzes') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('quizzes_quizzes') }} 
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
                            <a class="dropdown-item" href="{{ route('quizzes.create') }}">{{ __('Add new') }}</a>


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
                                    <h4 class="mb-0">{{ __('quizzes_quizzes') }}</h4>
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
                                                <th  >{{ __('quizzes_id') }}</th>
                                                <th  >{{ __('quizzes_post_id') }}</th>

<th  >{{ __('quizzes_top_result') }}</th>
<th  >{{ __('quizzes_average_score') }}</th>
<th  >{{ __('quizzes_total_participants') }}</th>
 
<th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($quizzes as $key => $quiz)
            <tr>
         
            

           
            <td>{{ $quiz->firstItem + $key + 1 }}</td>
            <td>{{ ($quiz->post) ? Str::words($quiz->post->title , 5 , '...') : ''  }}</td>

   
        
<td>{{ $quiz->top_result }}</td>
<td>{{ $quiz->average_score }}</td>
<td>{{ $quiz->total_participants }}</td>
  

<td>

           <a href="{{ route('quizzes.show', $quiz) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
           
             <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('هل أنت متأكد ؟ ');event.preventDefault(); 
                                                document.getElementById('destroy-quiz_{{ $quiz->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-quiz_{{  $quiz->id }}"
                                                    action="{{ route('quizzes.destroy', $quiz) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td   dir="rtl"  colspan="7"  >{{$quizzes->links("pagination::bootstrap-4")}} </td></tr>
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
