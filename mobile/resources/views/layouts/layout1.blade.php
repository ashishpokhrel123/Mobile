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
        <body>
		
        <div class="header">
            @include('includes1.header')
        </div>

        <div class="nav">
            @include('includes1.nav')
        </div>


        <div class="change">
            @yield('change')
        </div>


        <div class="footer">
            @include('includes1.footer')
        </div>

        </body>
        </html>