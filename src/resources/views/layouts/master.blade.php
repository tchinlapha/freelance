<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>บริษัทเสรีชัย อินทีเรียร์ ดีไซน์ จำกัด</title>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<script src="{{ asset('assets/js/libs/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/libs/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
	<script src="{{ asset('assets/js/libs/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
</head>
<body>
	 @include('layouts.header')
	 @include('layouts.slide')
	<div class="container animated slideInUp">
		@yield('content')
	</div>
	@include('layouts.footer')
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="jquery.fancybox.min.js"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>