@extends('layouts.admin') 
@section('content')
<div class="panel panel-flat">
    <div class="panel-heading">
        <div class="pull-left">
            <h2 style="margin: 0;" class="panel-title"><i class="icon-image2"></i> จัดการผลงาน</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-raised" href="/admin/portfolio/form"><i class="icon-plus-circle2"></i> เพิ่มโครงการ</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@foreach($data as $val)
<div class="row">
    <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
            <div class="thumb">
                <a href="/admin/portfolio/album/delete/{{$val->id}}" onclick="return confirm('ต้องการลบใช่หรือไม่?');" class="btn btn-danger" style="position: absolute;top:0;right: 0;"><i class="icon-bin"></i></a>
                <a href="/admin/portfolio/form/{{$val->id}}">
                    <img src="{{$val->cover}}" alt="" style="height:200px;">
                </a>
            </div>

            <div class="caption">
                <h6 class="no-margin"><a href="/admin/portfolio/form/{{$val->id}}" class="text-default">{{$val->name}}</a></h6>
                <p>{{$val->count}} รูปภาพ</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection