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
	 @include('./layouts.header')
	 <div id="carousel-example-generic" data-ride="carousel" class="carousel slide carousel-fade">
	<!-- Indicators -->
	<!--<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>-->

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox" style="max-width: 100%;max-height: 100%">

		<!-- First slide -->
		<div class="item item-bg active" style="background-image:url({{ asset('assets/images/slider/1.jpg') }}); max-width: 100%;max-height: 100%">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp"></h1>
			</div>
		</div>
		<!-- /.item -->

		<!-- Second slide -->
		<div class="item item-bg" style="background-image:url({{ asset('assets/images/slider/2.jpg') }})">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp">
					
				</h1>
			</div>
		</div>
		<!-- /.item -->

	</div>
	<!-- /.carousel-inner -->

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
<!-- /.carousel -->

	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>