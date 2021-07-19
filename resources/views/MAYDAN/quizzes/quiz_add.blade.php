@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('quizzes_quizzes') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('quizzes.index') }}">{{ __('quizzes_quizzes') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new quizzes_quiz') }} 
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div-->
 
@endsection

@section('content')
<?php $questions = (isset($_GET['questions'])) ? $_GET['questions'] : 0  ?>


  <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/quizzes') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 


                        <div class="row">
                        <div class="col-md-7 col-xs-12">


                       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
         <label class="col-md-12">{{ __('Photo')}} <span class="text-danger">*</span></label>
                            <div class="col-md-12 ">
                                <input type="file" class="form-control form-control-line" name="image"   value="{{ old('image') }}" required >
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



    <?php $ids = (old('application_football_team_ids')) ? old('application_football_team_ids') :  [];  ?>
    
    
        <div class="form-group  {{ $errors->has('application_football_team_ids') ? ' has-error' : '' }}">
         <label class="col-md-12">@lang('messages.posts_application_football_teams') <span class="text-danger">*</span> </label>
                            <div class="col-md-12">


<div class="form-check">
												<label class="form-check-label">
													<input id="checkAll" value="0" 
													 class="form-check-input"  type="checkbox" value="">
													<span class="form-check-sign"> &nbsp;&nbsp &nbsp;&nbsp  General</span>
												</label>
											</div>
											
											@foreach ($application_football_teams as $application_football_team)
											
											<div class="form-check">
												<label class="form-check-label">
													<input name="application_football_team_ids[]" class="form-check-input check" 
													@if(in_array($application_football_team->football_team_id,$ids)) checked  @endif  type="checkbox" value="{{ $application_football_team->football_team_id }}">
													<span class="form-check-sign"> &nbsp;&nbsp &nbsp;&nbsp  {{ $application_football_team->football_team->name }}</span>
												</label>
											</div>
											
											@endforeach 

                                @if ($errors->has('application_football_team_ids'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('application_football_team_ids') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
    
    

 

       <div class="form-group{{ $errors->has('Quiz Name') ? ' has-error' : '' }}">
         <label class="col-md-12">{{ __('Quiz Name') }} <span class="text-danger">*</span></label>
                            <div class="col-md-12 ">
                                <input type="text" class="form-control form-control-line" name="headline" placeholder="{{ __('Quiz Name') }}" value="{{ old('headline') }}" required >
                                @if ($errors->has('headline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('headline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
    
    
    
       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                             <label class="col-md-12 "> @lang('messages.posts_summary')<span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <textarea  class="form-control form-control-line  "    name="summary" placeholder="@lang('messages.posts_summary')" required >{{ old('summary') }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>


    </div>

 

                            <div class="row">
                                <label class="col-md-12">Questions<span class="text-danger">*</span></label>
                            </div>

                            <div class="questions">
                               @for($x = 1; $x <= $questions ; $x++)
 
                                <div class="question bg-extralight pt-3 pr-3 pl-3 pb-0">
                                    <div class="form-group mb-3">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Question"  name="question_{{$x}}"
                                                class="form-control form-control-line">
                                        </div>
                                        
                                          <div class="row">
                                        <label class="col-md-12">Image</label>
                                    </div>
                                    
                                           <div class="col-md-12">
                                            <input type="file" placeholder="image"  name="question_{{$x}}"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-12">Options</label>
                                    </div>

                                    <div class="form-group dynamic-fields-container">
                                        <div class="col-md-12 dynamic-fields-inputs">
                                            <div id="dynamic-fields-inputs-sample">
                                                <div class="input-group mb-2">
                                                    <input type="text" class="form-control"   name="answer_question_{{$x}}[]" placeholder="Option">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text btn btn-default">
                                                            <input type="radio" class="form-control mr-2"    required   name="best_answer_question_{{$x}}" id="q-1-a-1">
                                                            <label for="q-1-a-1" class="m-0 p-0">Best
                                                                answer</label></span>
                                                        <span
                                                            class="input-group-text btn btn-danger disabled dynamic-fields-inputs-sample-close"><i
                                                                class="la la-times text-white"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12 dynamic-fields-button mb-3">
                                            <button type="button" class="btn btn-light text-success dynamic-fields-add"><i
                                                    class="la la-plus"></i> Add another option</button>
                                        </div>
                                    </div>
                                </div>
                                
                                @endfor
                                 <div class="form-group">
                                    <div class="col-md-12 dynamic-fields-button">
                                        <a href="/quizzes/create?questions={{ ($questions + 1) }}" class="btn btn-light text-success dynamic-fields-add"><i
                                                class="la la-plus"></i> Add another question</a>
                                    </div>
                                </div>
                            </div>

                      

                     

                         
      <div class="form-group{{ $errors->has('Timer') ? ' has-error' : '' }}">
         <label class="col-md-12">{{ __('Timer') }} <span class="text-danger">*</span><small
                                        class="text-muted">(in seconds)</small></label>
                            <div class="col-md-12 ">
                                <input type="number" class="form-control form-control-line" name="timer" placeholder="{{ __('Timer') }}" value="{{ old('timer') }}" required >
                                @if ($errors->has('timer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('timer') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                             <div class="col-md-12">
                                    <small class="text-muted"> Number of timer seconds for each question.</small>
                                </div>

    </div>
                      





						
<input name="questions" value="{{ $questions }}" type="hidden" />
     


  

 

 

 
 

 

 
 




	

                        </div>

                    </div>

     

 


             <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


 

@stop

@push('scripts')



<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
 
                
@endpush


  