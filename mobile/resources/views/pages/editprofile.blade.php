
<!DOCTYPE HTML>
<html>
	<head>
		<title> Online Mobile shopping System</title>
		<link rel="stylesheet" href ="{{url('bootstrap/css/bootstrap.css')}}"/>
		<link href="{{ url('bootstrap/css/style.css') }}" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ url('bootstrap/css/responsiveslides.css') }}">
		<script src="{{ url('bootstrap/js/jquery.min.js') }}"></script>
		<script src="{{ url('bootstrap/js/responsiveslides.min.js') }}"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>	

					<li><a href="{!! url('/login') !!}">Login</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>

					@if (auth::check())
					<li><a href="{!! url('pages/userprofile') !!}">{{ Auth::user()->name}}</a></li>
				@endif

					<li><a href="#"><span>shopping cart&nbsp;&nbsp;: </span></a><label> &nbsp;noitems</label></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="{{ URL::to('bootstrap/images/logo.png') }}" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="{!! url('pages/index') !!}">Home</a></li>
				<li><a href="{!! url('pages/store') !!}">Store</a></li>
				<li><a href="{!! url('pages/secondhand') !!}">Secondhand</a></li>
				
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		
		<div  class="content-sidebar">
		    		<h4>Admin dashboard</h4>
						<ul>
							<li><a onclick="myFunction()" href="#">Add Product</a></li>
							<li><a onclick="myFunction1()" href="#">Product List</a></li>
							<li><a href="{!! url('pages/editprofile') !!}">Change Info</a></li>
					
						</ul>
						</div>


<div class="container mt-5" ></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Update profile') }}</div>

                <div class="card-body bg-light">
                    <form method="POST" action="{!!url('userupdate', Auth::user()->id)!!}">
                        @csrf
                        {!!method_field('put')!!}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        
