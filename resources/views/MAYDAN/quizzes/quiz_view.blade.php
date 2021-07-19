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
								     <li class="breadcrumb-item active">  @lang('quizzes_show_title') {{$quiz->id}}
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/quizzes/{{$quiz->id}}"   enctype="multipart/form-data"  novalidate>

  {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                                            <!--div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" placeholder="First Name" required data-validation-required-message="This First Name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required data-validation-required-message="This Email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div-->
                                           




                 



                        

       <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_post_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="post_id" placeholder="@lang('quizzes_post_id')" value="{{ $quiz->post_id }}">
                                @if ($errors->has('post_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_deadline')</label>
                            <div class="col-md-6 ">
                                <input type="date" class="form-control" name="deadline" placeholder="@lang('quizzes_deadline')" value="{{ $quiz->deadline }}">
                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('total_participants') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_total_participants')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="total_participants" placeholder="@lang('quizzes_total_participants')" value="{{ $quiz->total_participants }}">
                                @if ($errors->has('total_participants'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_participants') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('average_score') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_average_score')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="average_score" placeholder="@lang('quizzes_average_score')" value="{{ $quiz->average_score }}">
                                @if ($errors->has('average_score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('average_score') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('top_result') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_top_result')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="top_result" placeholder="@lang('quizzes_top_result')" value="{{ $quiz->top_result }}">
                                @if ($errors->has('top_result'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('top_result') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('timer') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('quizzes_timer')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="timer" placeholder="@lang('quizzes_timer')" value="{{ $quiz->timer }}">
                                @if ($errors->has('timer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('timer') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


  


     



 


             <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


  <ul class="pager">
                 @if($previous)
											<li class="previous">
												<a href="/quizzes/{{$previous}}"><i class="ace-icon fa fa-angle-double-right"></i> @lang('messages.previous')   </a>
											</li>
                @endif
                @if($next)
											<li class="next">
												<a href="/quizzes/{{$next}}"> @lang('messages.next')   <i class="ace-icon fa fa-angle-double-left"></i> </a>
											</li>
                @endif
	</ul>

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


  

