<html>
<head>
	<meta>
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">	
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/dist/ui/trumbowyg.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
	<body>

		@include('customers.template.partials.nav')
		@include('flash::message')
		<section>
			<div class="container">				
				@yield('content')
			</div>
		</section>
		<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
		<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
		<script src="{{asset('plugins/trumbowyg/dist/trumbowyg.js')}}"></script>
		<script src="{{asset('plugins/fontawesome/js/all.js')}}"></script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtaR6rcOH9UB4QuUIJiy2_Az50xYPix8k&callback=initMap">
		</script>
		@yield('js')
	</body>

</html>