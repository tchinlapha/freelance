<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
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
=======
<div class="widget home-widget pyre_homepage_media-port">
	<div class="pyre_homepage_media-widget-port-2 service-posts-home">
		<div class="width-container">
			<div class="col-md-12">
			<h2 class="home-widget"><i class="fa fa-wrench"></i> บริการของเรา</h2>
			<h5 style="padding-top: 10px;font-weight: 300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รับสร้างบ้าน อาคารพาณิชย์ ออกแบบตกแต่งภายในบ้านพักอาศัย คอนโด โรงแรม ร้านค้า โชว์รูมบู๊ทแสดงสินค้า ห้องตัวอย่าง บ้านตัวอย่าง โดยทีมงานสถาปนิก และวิศวกรที่มีประสบการณ์สร้างบ้านโดยเฉพาะ ดำเนินการแบบครบวงจร ตั้งแต่ออกแบบก่อสร้าง ขอใบอนุญาตก่อสร้าง ขอระบบสาธารณูปโภค</h5>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/construction-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="construction-icon">
						</div>
						<h2>Architecture Design</h2>
						<div class="service-content">
							<ul>
							<li>ออกแบบโครงการต่างๆ</li>
							<li>ออกแบบอาคาร/รีโนเวท </li>
							</ul>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/roofing-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="roofing-icon">
						</div>
						<h2>Interior Design</h2>
						<div class="service-content">
							<ul>
							<li>ออกแบบตกแต่งภายใน/จัดสรรพื้นที่ภายในให้ลงตัว</li>
							<li>3D และ เอนิเมชั่น </li>
							</ul>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid3column-progression lastcolumn-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/remodeling-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="remodeling-icon">
						</div>
						<h2>Landscape Design</h2>
						<div class="service-content">
							<ul>
							<li>ออกแบบภูมิทัศน์</li>
							<br>
							</ul>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="widget home-widget pyre_homepage_media-menu">
	<div class="pyre_homepage_media-widget-menu-2 portfolio-posts-home light-fonts-pro">
		<div class="width-container">
			<h2 class="home-widget"><i class="fa fa-picture-o"></i> ผลงานของเรา</h2>
			<div class="summary-text-pro">ภาพผลงานที่เคยจัดทำ</div>
			@foreach($image as $val)
			<div class="col-md-4 item-portfolio">
				<div class="item-portfolio-inner">
					<div class="picture" style="background-image: url('{{$val->cover}}')"></div>
					<div class="item-portfolio-content">
						<h4 style="font-size:16px;margin:0;text-align: center;"><a href="/portfolio/view/{{$val->id}}">{{$val->name}}</a></h4>
					</div>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
			<div class="aligncenter">
				<a data-ripple href="/portfolio" class="progression-button btn-orange">ดูผลงานทั้งหมด<i class="ls-sc-button-icon-right fa fa-briefcase"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="widget home-widget pyre_homepage_media-test">
	<div class="pyre_homepage_media-widget-test-2 testimonial-posts-home">
		<div class="width-container">
			<h2 class="home-widget"><i class="fa fa-handshake-o"></i> ข้อมูลการติดต่อ</h2>
			<div id="main col-md-12">
	
	<div class="width-container" style="margin-top:50px;">
		<div class="col-md-8">
			<div class="google-maps-expand">
		<iframe src="https://her.is/2r7b2FV" frameborder="0" style="border:0;min-height: 500px;"></iframe>
	</div>
		</div>
		<div id="sidebar" class="col-md-4">
			<div class="sidebar-item widget">
>>>>>>> b3e872000373c7f31773b74a57f70fe2085a9a57

<body>
	 @include('../layouts.header')
	 @include('../layouts.slide')
		<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>