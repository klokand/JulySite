<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>$RP CompanyName</title>

	<link href="/output/final.css" rel="stylesheet">

	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	@include('layout.nav')
	{{-- Showing the Error and Success Messages--}}
			@if(Session::has('error'))
				<div class="bg-danger">{{Session::get('error')}}</div>
			@endif

			@if(Session::has('success'))
				<div class="bg-success">{!!Session::get('success')!!}</div>
			@endif
	@yield('content')
	@include('layout.footer')

	<!-- Scripts -->
	<script src="/output/final.js"></script>
</body>
</html>
