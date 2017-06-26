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
	<header class="animated slideInDown fix-when-mobile" style="position: fixed;z-index: 99999;">
    <div class="menu-mobile" style="padding:10px;">
        <div class="pull-left">
            <img src="{{ asset('assets/images/SEREECHAILOGOV2-01.png') }}" alt="Renovation" style="height:50px;" />
            <span style="color:#fff;font-size: 16px;">เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด</span>
        </div>
        <div class="pull-right">
            <a href="javascript:void(0)" onclick="toggleSidebar()"><i class="fa fa-bars fa-3x" aria-hidden="true" style="line-height:50px;color:#fff;margin-right:5px;"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="menu-side-menu animated">
        <ul>
            <li>
                <a data-ripple href="/" class="{{ $page == "home" ? "active " : "" }}"> <i class="fa fa-home"></i> หน้าแรก</a>
            </li>
            <li>
                <a data-ripple href="/service" class="{{ $page == "service" ? "active " : "" }}"><i class="fa fa-info-circle"></i> เกี่ยวกับบริษัท</a>
            </li>
            <li>
                <a data-ripple href="/portfolio" class="{{ $page == "portfolio" ? "active " : "" }}"><i class="fa fa-picture-o"></i> ผลงานของเรา</a>
            </li>
            <li>
                <a data-ripple href="/contact" class="{{ $page == "contact" ? "active " : "" }}"><i class="fa fa-handshake-o"></i> ติดต่อเรา</a>
            </li>
        </ul>
    </div>
    <nav>
        <div class="width-container">
           <div style="background: #fff;width: 125px;position: absolute;left: 45%;border-radius: 0 0 10px 10px;box-shadow:0px 0px 10px 1px #252536;">
                <div class="pull-left">
                    <a href="/" title="Renovation" rel="home">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Renovation" class="img-responsive" />
                    </a>
                </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>
	<div id="carousel-example-generic" data-ride="carousel" class="carousel slide carousel-fade">
	 	<div class="carousel-inner" role="listbox" style="width: 100%;height: 100vh;">
	 		@foreach($slide as $key => $x)
	 		<div class="item item-bg {{ $key == 0 ? 'active'  : '' }}" style="background-image:url({{$x->path}})">
	 			<div class="carousel-caption">
	 				<h1 data-animation="animated fadeInUp">{{$x->text}}</h1>
	 				<a href=""><button type="button" class="btn btn-primary btn-lg active">เข้าสู่เว็บไซท์</button></a>
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