@extends('layouts.app')
@section('content-header')

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('posts_posts') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">{{ __('posts_posts') }}</a>
                                    </li>
								     <li class="breadcrumb-item active">  @lang('posts_show_title') {{$post->id}}
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/posts/{{$post->id}}"   enctype="multipart/form-data"  novalidate>

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
                                           




                 



                        

       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_title')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="title" placeholder="@lang('posts_title')" value="{{ $post->title }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $post->image }}" alt="image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="image" placeholder="image" value="{{ $post->image }}">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('posts_video')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="video" placeholder="@lang('posts_video')" value="{{ $post->video }}">
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_content')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="content" placeholder="@lang('posts_content')"  >{{ $post->content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('posts_summary')</label>
                            <div class="col-md-6  ">
                                <textarea  class="form-control" name="summary" placeholder="@lang('posts_summary')"  >{{ $post->summary }}</textarea>
                                @if ($errors->has('summary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('summary') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group">
            <label class="col-md-4 control-label  "> @lang('posts_is_active')</label>
                            <div class="col-md-6 ">

                         		<label>
<input name="is_active" value="1"  <?php echo ($post->is_active == 1) ? 'checked="checked" ' : '' ; ?>    class="ace ace-switch ace-switch-2" type="checkbox" />
<span class="lbl"></span>
		</label>

                             </div>

    </div>



  
    @include('MAYDAN.custom.application_football_teams_view')  

     



 


             <button type="submit" class="btn btn-primary">Submit</button>
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


  

