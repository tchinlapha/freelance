@extends('layouts.admin')
@section('script')
	<script type="text/javascript" src="{{ asset('admin_assets/js/angular/controller/HomeController.js') }}"></script>
@endsection
@section('content')
<div ng-controller="HomeController">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h2 class="panel-title"><i class="icon-home5"></i> หน้าแรก</h2>
			<h4 class="panel-title">จัดการข้อมูลเว็บไซต์พื้นฐาน</h4>
		</div>
		<div class="panel-body">
			<form ng-submit="submit()">
				<div class="row">
					<div class="form-group col-md-6">
						<label class="control-label">ที่อยู่</label>
						<input class="form-control" placeholder="ที่อยู่ของคุณ..." ng-model="data.address" required>
					</div>
					<div class="form-group col-md-6">
						<label class="control-label">เบอร์โทรศัพท์</label>
						<input class="form-control" placeholder="เบอร์โทรศัพท์ของคุณ..." ng-model="data.phone" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label class="control-label">อีเมล</label>
						<input class="form-control" placeholder="อีเมลของคุณ..." ng-model="data.email" required>
					</div>
					<div class="form-group col-md-6">
						<label class="control-label">เวลาทำการ</label>
						<input class="form-control" placeholder="เวลาที่เปิดทำการ..." ng-model="data.work_time" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label class="control-label">Map iframe</label>
						<input class="form-control" placeholder="โค้ดของแผนที่..." ng-model="data.map" required>
					</div>
					<div class="form-group col-md-6">
						<label class="control-label">Facebook Fanpage URL</label>
						<input class="form-control" placeholder="URL เฟสบุ๊คเพจ..." ng-model="data.facebook" required>
					</div>
				</div>
				<div class="row text-center">
					<button class="btn btn-primary btn-raised"><i class="icon-check"></i> บันทึก</button>
					<button class="btn btn-default btn-raised" ng-click="reset()"><i class="icon-reset"></i> รีเซ็ต</button>
				</div>
			</form>
		</div>
	</div>
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h4 class="panel-title">จัดการรูปสไลต์</h4>
		</div>
		<div class="panel-body">
			<button class="btn bg-pink" ng-click="plus()"><i class="icon-plus3"></i></button>
			<button class="btn bg-pink" ng-click="minus()"><i class="icon-minus3"></i></button>
			<form action="/admin/slide/add" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group col-md-4" ng-repeat="x in slideCount">
					<input type="file" name="img[@{{$index}}]" class="form-control" required>
					<input type="text" name="text[@{{$index}}]" class="form-control" placeholder="ข้อความของรูป..." required>
				</div>
			</div>
				<div class="clearfix"></div>
				<button type="submit" class="btn btn-primary btn-raised"><i class="icon-check"></i> บันทึก</button>
			</form>
		</div>
	</div>
	<div class="row">
		@foreach($slide as $val)
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<div class="thumb">
					<a href="/admin/slide/delete/{{$val->id}}" onclick="return confirm('ต้องการลบใช่หรือไม่?');" class="btn btn-danger" style="position: absolute;top:0;right: 0;"><i class="icon-bin"></i></a>
					<a href="{{$val->path}}" target="_blank">
						<img src="{{$val->path}}" alt="" style="height:200px;">
					</a>
					<div class="caption">
						<h6 class="no-margin" style="overflow: hidden;"><a href="/admin/portfolio/form/{{$val->id}}" class="text-default">{{$val->text}}</a></h6>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection