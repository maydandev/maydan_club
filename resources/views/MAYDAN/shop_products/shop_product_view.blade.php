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
								     <li class="breadcrumb-item active">  @lang('shop_products_show_title') {{$shop_product->id}}
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/shop_products/{{$shop_product->id}}"   enctype="multipart/form-data"  novalidate>

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
                                           




                 



                        

       <div class="form-group{{ $errors->has('shop_category_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_shop_category_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_category_id" placeholder="@lang('shop_products_shop_category_id')" value="{{ $shop_product->shop_category_id }}">
                                @if ($errors->has('shop_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_quantity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_quantity')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_quantity" placeholder="@lang('shop_products_product_quantity')" value="{{ $shop_product->product_quantity }}">
                                @if ($errors->has('product_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_model')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_model" placeholder="@lang('shop_products_product_model')" value="{{ $shop_product->product_model }}">
                                @if ($errors->has('product_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_product->product_image }}" alt="product_image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="product_image" placeholder="product_image" value="{{ $shop_product->product_image }}">
                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_price" placeholder="@lang('shop_products_product_price')" value="{{ $shop_product->product_price }}">
                                @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_status')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_status" placeholder="@lang('shop_products_product_status')" value="{{ $shop_product->product_status }}">
                                @if ($errors->has('product_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_status') }}</strong>
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
												<a href="/shop_products/{{$previous}}"><i class="ace-icon fa fa-angle-double-right"></i> @lang('messages.previous')   </a>
											</li>
                @endif
                @if($next)
											<li class="next">
												<a href="/shop_products/{{$next}}"> @lang('messages.next')   <i class="ace-icon fa fa-angle-double-left"></i> </a>
											</li>
                @endif
	</ul>

<!-- Simple Validation start  
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Form Validation</h4>
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
                                        
                                        <p class="mt-1">Add <code>novalidate</code> attribute to form tag and <code>required</code> attribute to input tag.</p>
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
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
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               Input Validation end  

               Multiple Rules Validation start  
                <section class="multiple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Validating multiple rules</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" placeholder="Your Email" required data-validation-required-message="The email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" placeholder="Your Password" required data-validation-required-message="The password field is required" minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="con-password" class="form-control" placeholder="Confirm Password" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                        </div>
                                                    </div>
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
 
              Input Validation start  
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inputs Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>This field is required</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" data-validation-required-message="This field is required" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must only consist of numbers</label>
                                                        <div class="controls">
                                                            <input type="text" name="numeric" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters." placeholder="Enter Numbers only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Only alphabetic characters</label>
                                                        <div class="controls">
                                                            <input type="text" name="alpha" class="form-control" required data-validation-containsnumber-regex="^[a-zA-Z]+$" data-validation-containsnumber-message="The alpha field may only contain alphabetic characters." placeholder="Enter Character only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password Input Field</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" data-validation-required-message="This field is required" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Repeat password must match</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" data-validation-match-match="password" class="form-control" data-validation-required-message="Repeat password must match" placeholder="Repeat Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must be a valid email</label>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" data-validation-required-message="Must be a valid email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enter Number between 10 & 20</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-containsnumber-message="Enter Number between 10 & 20" min="10" max="20" required placeholder="Enter Number between 10 & 20">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must match the specified regular expression : ^([0-9]+)$ - numbers only</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" data-validation-containsnumber-regex="^([0-9]+)$" data-validation-containsnumber-message="The regex field format is invalid." placeholder="Enter specified regular expression" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Length should not be less than the specified length : 3</label>
                                                        <div class="controls">
                                                            <input type="text" name="minChar" class="form-control" data-validation-required-message="The min field must be at least 3 characters." minlength="3" placeholder="Enter minimum 3 characters">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>The digits field must be numeric and exactly contain 3 digits</label>
                                                        <div class="controls">
                                                            <input type="text" name="digit" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-required-message="The digits field must be numeric and exactly contain 3 digits" maxlength="3" minlength="3" placeholder="Enter Exactly 3 digits">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Only alphabetic characters, numbers, dashes or underscores</label>
                                                        <div class="controls">
                                                            <input type="text" name="reg-exp" class="form-control" data-validation-regex-regex="^[-a-zA-Z_\d]+$" data-validation-regex-message="Must Enter Character, Number, Dash or Uderscore" placeholder="Enter Character, Numbers, Dash, Uderscore" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must be a valid url</label>
                                                        <div class="controls">
                                                            <input type="text" name="url" class="form-control" data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" data-validation-regex-message="Must be a valid url" placeholder="Enter valid url" required>
                                                        </div>
                                                    </div>
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
 

  		 


@endsection

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
								     <li class="breadcrumb-item active">  @lang('shop_products_show_title') {{$shop_product->id}}
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
                                        
                                       
                     <form class="form-horizontal" role="form" method="POST" action="/shop_products/{{$shop_product->id}}"   enctype="multipart/form-data"  novalidate>

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
                                           




                 



                        

       <div class="form-group{{ $errors->has('shop_category_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_shop_category_id')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="shop_category_id" placeholder="@lang('shop_products_shop_category_id')" value="{{ $shop_product->shop_category_id }}">
                                @if ($errors->has('shop_category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_quantity') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_quantity')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_quantity" placeholder="@lang('shop_products_product_quantity')" value="{{ $shop_product->product_quantity }}">
                                @if ($errors->has('product_quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_model') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_model')</label>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="product_model" placeholder="@lang('shop_products_product_model')" value="{{ $shop_product->product_model }}">
                                @if ($errors->has('product_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_model') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


           <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image')</label>
                            <div class="col-md-6 ">
                              <img src="{{ $shop_product->product_image }}" alt="product_image" width="200px" height="200px" />
                            </div>

    </div>

       <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_image') </label>
                            <div class="col-md-6 ">
                                <input type="file" class="form-control" name="product_image" placeholder="product_image" value="{{ $shop_product->product_image }}">
                                @if ($errors->has('product_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_image') }}</strong>
                                    </span>
                                @endif
                            </div>

    </div>


       <div class="form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label  "> @lang('shop_products_product_price')</label>
                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="product_price" placeholder="@lang('shop_products_product_price')" value="{{ $shop_product->product_price }}">
                                @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
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
												<a href="/shop_products/{{$previous}}"><i class="ace-icon fa fa-angle-double-right"></i> @lang('messages.previous')   </a>
											</li>
                @endif
                @if($next)
											<li class="next">
												<a href="/shop_products/{{$next}}"> @lang('messages.next')   <i class="ace-icon fa fa-angle-double-left"></i> </a>
											</li>
                @endif
	</ul>

<!-- Simple Validation start  
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Form Validation</h4>
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
                                        
                                        <p class="mt-1">Add <code>novalidate</code> attribute to form tag and <code>required</code> attribute to input tag.</p>
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
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
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               Input Validation end  

               Multiple Rules Validation start  
                <section class="multiple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Validating multiple rules</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" placeholder="Your Email" required data-validation-required-message="The email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" placeholder="Your Password" required data-validation-required-message="The password field is required" minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" name="con-password" class="form-control" placeholder="Confirm Password" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                        </div>
                                                    </div>
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
 
              Input Validation start  
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inputs Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>This field is required</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" data-validation-required-message="This field is required" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must only consist of numbers</label>
                                                        <div class="controls">
                                                            <input type="text" name="numeric" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters." placeholder="Enter Numbers only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Only alphabetic characters</label>
                                                        <div class="controls">
                                                            <input type="text" name="alpha" class="form-control" required data-validation-containsnumber-regex="^[a-zA-Z]+$" data-validation-containsnumber-message="The alpha field may only contain alphabetic characters." placeholder="Enter Character only">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password Input Field</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" data-validation-required-message="This field is required" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Repeat password must match</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" data-validation-match-match="password" class="form-control" data-validation-required-message="Repeat password must match" placeholder="Repeat Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must be a valid email</label>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" data-validation-required-message="Must be a valid email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Enter Number between 10 & 20</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-containsnumber-message="Enter Number between 10 & 20" min="10" max="20" required placeholder="Enter Number between 10 & 20">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must match the specified regular expression : ^([0-9]+)$ - numbers only</label>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" data-validation-containsnumber-regex="^([0-9]+)$" data-validation-containsnumber-message="The regex field format is invalid." placeholder="Enter specified regular expression" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Length should not be less than the specified length : 3</label>
                                                        <div class="controls">
                                                            <input type="text" name="minChar" class="form-control" data-validation-required-message="The min field must be at least 3 characters." minlength="3" placeholder="Enter minimum 3 characters">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>The digits field must be numeric and exactly contain 3 digits</label>
                                                        <div class="controls">
                                                            <input type="text" name="digit" class="form-control" data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-required-message="The digits field must be numeric and exactly contain 3 digits" maxlength="3" minlength="3" placeholder="Enter Exactly 3 digits">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Only alphabetic characters, numbers, dashes or underscores</label>
                                                        <div class="controls">
                                                            <input type="text" name="reg-exp" class="form-control" data-validation-regex-regex="^[-a-zA-Z_\d]+$" data-validation-regex-message="Must Enter Character, Number, Dash or Uderscore" placeholder="Enter Character, Numbers, Dash, Uderscore" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Must be a valid url</label>
                                                        <div class="controls">
                                                            <input type="text" name="url" class="form-control" data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" data-validation-regex-message="Must be a valid url" placeholder="Enter valid url" required>
                                                        </div>
                                                    </div>
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
 

  		 


@endsection

