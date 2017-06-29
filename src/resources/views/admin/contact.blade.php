@extends('layouts.admin')
@section('script')
	<script type="text/javascript" src="{{ asset('admin_assets/js/angular/controller/ContactController.js') }}"></script>
@endsection
@section('content')
	<div class="panel panel-flat" ng-controller="ContactController">
		<div class="panel-heading">
			<h2 class="panel-title"><i class="icon-envelop3"></i> ข้อความการติดต่อ</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="bg-primary">
						<th>#</th>
						<th>ชื่อผู้ติดต่อ</th>
						<th>อีเมล</th>
						<th>เบอร์โทรศัพท์</th>
						<th class="text-center">ตัวเลือก</th>
					</tr>
					<tr ng-repeat="x in data">
						<td>@{{$index + 1}}</td>
						<td>@{{x.name}}</td>
						<td>@{{x.email}}</td>
						<td>@{{x.phone}}</td>
						<td class="text-center">
							<button class="btn bg-orange" ng-click="view(x)"><i class="icon-envelop3"></i></button>
							<button class="btn btn-danger" ng-click="delete(x.id)"><i class="icon-bin"></i></button>
						</td>
					</tr>
				</table>
			</div>
    	</div>
    	<div id="myModal" class="modal fade" role="dialog">
    		<div class="modal-dialog">

    			<!-- Modal content-->
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					<h4 class="modal-title">ข้อความ</h4>
    				</div>
    				<div class="modal-body">
    				<p>@{{message}}</p>
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>

    		</div>
    	</div>
	</div>
@endsection