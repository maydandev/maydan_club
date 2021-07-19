@extends('layouts.app')

@section('content-header')
 


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('delivery_methods_delivery_methods') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
									{{ __('delivery_methods_delivery_methods') }} 
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
                            <a class="dropdown-item" href="{{ route('delivery_methods.create') }}">{{ __('Add new') }}</a>


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
                                    <h4 class="mb-0">{{ __('delivery_methods_delivery_methods') }}</h4>
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
           
<th  >{{ __('delivery_methods_id') }}</th>
<th  >{{ __('delivery_methods_name') }}</th>
<th  >{{ __('delivery_methods_country_id') }}</th>
<th  >{{ __('delivery_methods_city_id') }}</th>
<th  >{{ __('delivery_methods_delivers_min') }}</th>
<th  >{{ __('delivery_methods_delivers_max') }}</th>
<th  >{{ __('delivery_methods_delivers_unit_id') }}</th>
<th  >{{ __('delivery_methods_fees') }}</th>
<th  >{{ __('delivery_methods_min_amount') }}</th>
<th  >{{ __('delivery_methods_is_cod') }}</th>
<th  >{{ __('delivery_methods_created_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($delivery_methods as $delivery_method)
            <tr>
         
            

           


   
        
<td>{{ $delivery_method->id }}</td>
<td>{{ $delivery_method->name }}</td>
<td>{{ $delivery_method->country_id }}</td>
<td>{{ $delivery_method->city_id }}</td>
<td>{{ $delivery_method->delivers_min }}</td>
<td>{{ $delivery_method->delivers_max }}</td>
<td>{{ $delivery_method->delivers_unit_id }}</td>
<td>{{ $delivery_method->fees }}</td>
<td>{{ $delivery_method->min_amount }}</td>
<td>{{ $delivery_method->is_cod }}</td>
<td>{{ $delivery_method->created_at }}</td>         <td>

           <a href="{{ route('delivery_methods.show', $delivery_method) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
           
             <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('هل أنت متأكد ؟ ');event.preventDefault(); 
                                                document.getElementById('destroy-delivery_method_{{ $delivery_method->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-delivery_method_{{  $delivery_method->id }}"
                                                    action="{{ route('delivery_methods.destroy', $delivery_method) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td   dir="rtl"  colspan="12"  >{{$delivery_methods->links("pagination::bootstrap-4")}} </td></tr>
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
