@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('users_users') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('users_users') }} 
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
                            <a class="dropdown-item" href="{{ route('users.create') }}">{{ __('Add new') }}</a>


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
                                    <h4 class="mb-0">{{ __('users_users') }}</h4>
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
           
<th  >{{ __('users_id') }}</th>
<th  >{{ __('users_first_name') }}</th>
<th  >{{ __('users_last_name') }}</th>
<th  >{{ __('users_phone_number') }}</th>
<th  >{{ __('users_email') }}</th>
<th  >{{ __('users_birthday') }}</th>
<th  >{{ __('users_gender_id') }}</th>
<th  >{{ __('users_city') }}</th>
<th  >{{ __('users_address') }}</th>
<th  >{{ __('users_is_active') }}</th>
<th  >{{ __('users_is_verified') }}</th>
<th  >{{ __('users_created_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($users as $user)
            <tr>
         
            

           


   
        
<td>{{ $user->id }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->phone_number }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->birthday }}</td>
<td>{{ $user->gender_id }}</td>
<td>{{ $user->city }}</td>
<td>{{ $user->address }}</td>
<td>{{ $user->is_active }}</td>
<td>{{ $user->is_verified }}</td>
<td>{{ $user->created_at }}</td>         <td>

           <a href="{{ route('users.show', $user) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
           
             <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('???? ?????? ?????????? ?? ');event.preventDefault(); 
                                                document.getElementById('destroy-user_{{ $user->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-user_{{  $user->id }}"
                                                    action="{{ route('users.destroy', $user) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td   dir="rtl"  colspan="13"  >{{$users->links("pagination::bootstrap-4")}} </td></tr>
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
