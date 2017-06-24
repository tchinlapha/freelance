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
    	<div class="panel-heading">
			<h2 class="panel-title"><i class="icon-magazine"></i> ใบรับรอง</h2>
		</div>
	</div>
</div>
@endsection