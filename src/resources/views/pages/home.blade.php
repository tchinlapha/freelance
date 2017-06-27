<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">
	<script src="{{ asset('assets/js/libs/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/libs/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
	<script src="{{ asset('assets/js/libs/jquery-ui.min.js') }}"></script>
</head>

<body>
	<img src="{{asset('/assets/images/SEREECHAILOGOV2-01.png')}}" style="width: 215px;
    height: auto;
    position: fixed;
    top: 0;
    z-index: 9;
    margin: auto;
    left: 0;
    right: 0;
    background: #fff;
    padding: 10px 25px;
    box-shadow: 0 0 5px 1px #313131;
    border-radius: 0 0 20px 20px;">
	<div id="carousel-example-generic" data-ride="carousel" class="carousel slide carousel-fade">
	 	<div class="carousel-inner" role="listbox" style="width: 100%;height: 100vh;">
	 		@foreach($slide as $key => $x)
	 		<div class="item item-bg {{ $key == 0 ? 'active'  : '' }}" style="background-image:url({{$x->path}})">
	 			<div class="carousel-caption" style="padding-top: 0;">
	 				<h1 data-animation="animated fadeInUp" style="margin: 0;">{{$x->text}}</h1>
	 				
	 			</div>
	 		</div>
	 		@endforeach

	 		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	 			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	 			<span class="sr-only">Previous</span>
	 		</a>
	 		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	 			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	 			<span class="sr-only">Next</span>
	 		</a>

	 	</div>

	</div>
<!-- /.carousel -->

	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>