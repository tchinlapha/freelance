@extends('layouts.admin')
@section('script')
	<script type="text/javascript" src="{{ asset('admin_assets/js/angular/controller/HomeController.js') }}"></script>
@endsection
@section('content')
	<div class="panel panel-flat" ng-controller="HomeController">
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
@endsection