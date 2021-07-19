@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('embedded_posts_embedded_posts') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('embedded_posts.index') }}">{{ __('embedded_posts_embedded_posts') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new embedded_posts_Embedded_post') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/embedded_posts') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         




       <div class="form-group{{ $errors->has('post_url') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('embedded_posts_post_url')</label>
                            <div class="col-md-6 controls ">
                            <input type="text" name="post_url" placeholder="@lang('embedded_posts_post_url')" value="{{ old('post_url') }}"  class="form-control" data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" data-validation-regex-message="Must be a valid url" placeholder="Enter valid url"  data-validation-required-message="{{ __('This field is required') }}"   aria-invalid="false">
                                 @if ($errors->has('post_url'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('post_url') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     
                             <div class="form-group{{ $errors->has('post_platform') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label  ">  @lang('embedded_posts_post_platform')  </label>
                            <div class="col-md-6  ">

                             <ul class="list-unstyled mb-0">
                                    
                                            <li class="d-inline-block mr-2">
                                            
                                                <fieldset>
                                               
                                                 
                                                 @foreach($platforms as $key =>  $platform)
                                                  
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" name="post_platform" @if(old('post_platform') == $platform->name ) checked  @endif  value="{{ $platform->name }}">
                                                        <span class="vs-radio vs-radio-lg">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">{{ $platform->name }}</span>
                                                    </div>


                   
                                                 @endforeach
                                                   
                                                </fieldset>
                                               
                                            </li>
                                        </ul>

                                @if ($errors->has('post_platform'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('post_platform') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        @include('MAYDAN.custom.application_football_teams_add')  

  

 


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


  