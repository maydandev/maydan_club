@extends('layouts.app')
@section('content-header')

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('votes_votes') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('votes.index') }}">{{ __('votes_votes') }}</a>
                                    </li>
								     <li class="breadcrumb-item active">  @lang('votes_show_title') {{$vote->id}}
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/votes/{{$vote->id}}"   enctype="multipart/form-data"  novalidate>

  {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                                      



                    <div class="row">
                        <div class="col-md-7 col-xs-12">

 



 

       <div class="form-group{{ $errors->has('headline') ? ' has-error' : '' }}">
         <label class="col-md-12">{{ __('Headline') }} <span class="text-danger">*</span></label>
                            <div class="col-md-12 ">
                                <input type="text" class="form-control form-control-line" name="headline" placeholder="{{ __('Headline') }}" value="{{ $vote->post->title }}" required >
                                @if ($errors->has('headline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('headline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>
    
        
   

                            @include('MAYDAN.custom.application_football_teams_view')  

    



 

       <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
         <label class="col-md-12">{{ __('Question') }} <span class="text-danger">*</span></label>
                            <div class="col-md-12 ">
                                <input type="text" class="form-control form-control-line" name="question" placeholder="{{ __('Question') }}" value="{{ $vote_question->vote_question }}" required >
                                @if ($errors->has('question'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>

 
    <div class="row">
    <label class="col-md-12">{{ __('Voting Options') }}<span class="text-danger">*</span></label>
</div>

<div class="form-group dynamic-fields-container">
    <div class="col-md-12 dynamic-fields-inputs">
    @foreach($vote_question->options as $option)
        <div id="dynamic-fields-inputs-sample">
            <div class="input-group mb-2">
                <input type="text" class="form-control"  value="{{ $option->vote_option }}"  name="question_option[]" placeholder="{{ __('Option') }} 1" required>
                <div class="input-group-append">
                    <span
                        class="input-group-text btn btn-danger disabled dynamic-fields-inputs-sample-close"><i
                            class="feather icon-delete"></i></span>
                </div>
            </div>
        </div>

   

        @endforeach
      
    </div>
    <div class="col-md-12 dynamic-fields-button">
        <button type="button" class="btn btn-light text-success dynamic-fields-add"><i
                class="la la-plus"></i> {{ __('Add another option')}}</button>
    </div>
</div>


 

                     

                         

                      

<?php

$date=date_create($vote->deadline );
$deadline_date =  date_format($date,"Y-m-d");
$deadline_time =  date_format($date,"H:i:s");


          ?> 

	 

 

       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
         <label class="col-md-12">@lang('votes_deadline') <span class="text-danger">*</span></label>
                            <div class="col-md-12 ">
                                <input type="date" class="form-control form-control-line" name="deadline_date" placeholder="@lang('votes_deadline')" value="{{ $deadline_date }}" required >
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


    <div class="form-group{{ $errors->has('deadline_time') ? ' has-error' : '' }}">
         <label class="col-md-12">@lang('votes_deadline_time')  <span class="text-danger">*</span></label>
                            <div class="col-md-12 ">
                                <input type="time" class="form-control form-control-line" name="deadline_time" placeholder="@lang('votes_deadline_time')" value="{{ $deadline_time }}" required >
                                @if ($errors->has('deadline_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline_time') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>



 

  
 
 




	

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
 
                

<script>

        /* =============  Dynamic Fields  =============== */
        $('.dynamic-fields-add').click(function() {
         let root = $(this).parent().parent();
         let fieldsContainer = root.find('.dynamic-fields-inputs');
         let sample = fieldsContainer.find('#dynamic-fields-inputs-sample');
         let closeBtn = sample.find('.dynamic-fields-inputs-sample-close');
         closeBtn.removeClass('disabled');
         fieldsContainer.append(sample.html());
         closeBtn.addClass('disabled');
     });
     $(document).on('click', '.dynamic-fields-inputs-sample-close:not(.disabled)', function() {
         $(this).parent().parent().fadeOut();
     });
</script>
 
                
@endpush


  


  

