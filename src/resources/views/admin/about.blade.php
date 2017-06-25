@extends('layouts.admin')
@section('script')
	<script type="text/javascript" src="{{ asset('admin_assets/js/angular/controller/AboutController.js') }}"></script>
@endsection
@section('content')
<div ng-controller="AboutController">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h2 class="panel-title"><i class="icon-info22"></i> เกี่ยวกับบริษัท</h2>
		</div>
		<div class="panel-body">
			<form ng-submit="submit()">
				<div class="row">
					<div class="form-group">
						<textarea id="content"></textarea>
					</div>
				</div>
				<div class="row text-center">
					<button class="btn btn-primary btn-raised"><i class="icon-check"></i> บันทึก</button>
					<button type="button" class="btn btn-default btn-raised" ng-click="reset()"><i class="icon-reset"></i> รีเซ็ต</button>
				</div>
			</form>
    	</div>
	</div>

	<div class="panel panel-flat">
		<div class="panel-heading">
			<h2 class="panel-title"><i class="icon-magazine"></i> ใบรับรอง</h2>
		</div>
		<div class="panel-body">
			<form action="/admin/certificate/add" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-inline">
					<div class="form-group">
						<label>เลือกรูปภาพ : </label><input type="file" name="img[]" class="form-control" style="border:transparent;"
						multiple>
						<button type="submit" class="btn btn-primary btn-raised"><i class="icon-check"></i> บันทึก</button>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div class="row">
		@foreach($certificate as $val)
		<div class="col-lg-3 col-sm-6">
			<div class="thumbnail">
				<div class="thumb">
					<a href="/admin/certificate/delete/{{$val->id}}" onclick="return confirm('ต้องการลบใช่หรือไม่?');" class="btn btn-danger" style="position: absolute;top:0;right: 0;"><i class="icon-bin"></i></a>
					<a href="{{$val->path}}" target="_blank">
					<img src="{{$val->path}}" alt="" style="height:320px;">
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection