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
                                    <li class="breadcrumb-item active">
									{{ __('votes_votes') }} 
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
                            <a class="dropdown-item" href="{{ route('votes.create') }}">{{ __('Add new') }}</a>


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
                                    <h4 class="mb-0">{{ __('votes_votes') }}</h4>
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
                                        <p class="text-muted"></p>
				
				
				<?php 
				$data = [];
				?>
                <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
    <thead>
        <tr>


 
<th >@lang('messages.vote_answers_id')</th>  
<th >@lang('messages.vote_answers_user_id')</th>
<th >@lang('messages.vote_answers_vote_question_option_id')</th>
<th >@lang('messages.vote_answers_created_at')</th>



   </tr>
    </thead>

   
    <tbody>
     @foreach( $vote_answers as $key => $vote_answer)
        <tr>


       
   
        <td>{{ $key + 1  }}</td>
        <?php $data[$vote_answer->vote_question_option->vote_option->vote_option][] = $vote_answer->vote_question_option->vote_option->vote_option ; ?>

        <td><a href="/users/{{ $vote_answer->user_id  }}" title="show user"  >{{ ($vote_answer->user) ? $vote_answer->user->full_name() : ''  }}</a></td>
        <td>{{ $vote_answer->vote_question_option->vote_option->vote_option  }}</td>


        
 
<td>{{ $vote_answer->created_at  }}</td>






        </tr>
        @endforeach
    </tbody>
    <tfoot>
       <tr><td   dir="rtl"  colspan="4"  >{{$vote_answers->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
 

                 </div>    
                                 </div>
                            </div>
                        </div>
                    </div>


                    @stop


@push('scripts')


<script src="https://www.chartjs.org/dist/2.9.4/Chart.min.js"></script>
	<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
	
	

<script>
	 
	 
 

 


		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
					    @foreach($data as $key => $val)
						"{{count($val)}}",
						@endforeach
					 
					],
					backgroundColor: [
					 
				 
                        backgroundColor: [
                  "#FF6384",
                  "#36A2EB",
                  "#FFCE56"
             ],
						
						
					
				}],
				labels: [
				  @foreach($data as $key => $name )
						"{{$key}}  ({{count($name)}})",
						@endforeach
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

 

 
	</script>
	
	
	
	
	
	
@endpush
