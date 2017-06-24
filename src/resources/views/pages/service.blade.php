@extends('layouts.master') 
@section('content')

<div id="page-title-background">
	<div id="page-title">
		<div class="width-container">
			<h1 align="center"><i class="fa fa-info-circle"></i> เกี่ยวกับบริษัท</h1>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div id="main col-md-12">
	<div class="width-container" style="margin-top:50px;">
		<div class="col-md-12">
			@php echo $data['about']; @endphp
		</div>
		<hr style="padding-top: 20px;padding-bottom: 20px;">
		<div class="row">
			<h3 align="center">ใบรับรองทำงาน</h3>
			<div class="col-md-12">
				<div class="col-md-3 item-portfolio">
					<div class="item-portfolio-inner">
						<div class="picture" style="background-image: url('')"></div>
						<div class="item-portfolio-content">
							<h4>ใบรับรอง</h4>
							<p> รูปภาพ</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 item-portfolio">
					<div class="item-portfolio-inner">
						<div class="picture" style="background-image: url('')"></div>
						<div class="item-portfolio-content">
							<h4>ใบรับรอง</h4>
							<p> รูปภาพ</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 item-portfolio">
					<div class="item-portfolio-inner">
						<div class="picture" style="background-image: url('')"></div>
						<div class="item-portfolio-content">
							<h4>ใบรับรอง</h4>
							<p> รูปภาพ</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 item-portfolio">
					<div class="item-portfolio-inner">
						<div class="picture" style="background-image: url('')"></div>
						<div class="item-portfolio-content">
							<h4>ใบรับรอง</h4>
							<p> รูปภาพ</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>


		</div>
		<!-- close #service-index -->
	</div>
	<!-- close .width-container -->
	<div class="clearfix"></div>
</div>
@endsection