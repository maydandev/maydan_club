@extends('layouts.app')

@section('content-header')



                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('shop_products_shop_products') }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('shop_products.index') }}">{{ __('shop_products_shop_products') }}</a>
                                    </li>
                                   

								     <li class="breadcrumb-item active">{{ __('Add new shop_products_Shop_product') }} 
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/shop_products') }}"   enctype="multipart/form-data"  novalidate>
                        {!! csrf_field() !!}

                                         


                 



       <div class="form-group{{ $errors->has('shop_category_id') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_shop_category_id')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="shop_category_id" placeholder="@lang('shop_products_shop_category_id')" value="{{ old('shop_category_id') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('shop_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('product_quantity') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_quantity')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="product_quantity" placeholder="@lang('shop_products_product_quantity')" value="{{ old('product_quantity') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('product_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_model')</label>
                            <div class="col-md-6 controls ">
                                <input type="text" class="form-control" name="product_model" placeholder="@lang('shop_products_product_model')" value="{{ old('product_model') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('product_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


     

       <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_image') </label>
                            <div class="col-md-6  ">
                                <input type="file" class="form-control" name="product_image" placeholder="@lang('shop_products_product_image')" value="{{ old('product_image') }}">
                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
         <label class="col-md-4 control-label  ">@lang('shop_products_product_price')</label>
                            <div class="col-md-6 controls ">
                                <input type="number" class="form-control" name="product_price" placeholder="@lang('shop_products_product_price')" value="{{ old('product_price') }}"  data-validation-required-message="{{ __('This field is required') }}" >
                                @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
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


 

  		 


@endsection
