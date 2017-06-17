@extends('layouts.admin') 
@section('content')
<div class="col-md-12">
    <h2>จัดการรูปผลงาน</h2>
    <a class="btn btn-primary" href="/admin/portfolio/form">เพิ่มอัลบั้มรูป</a>
</div>
@foreach($data as $val)
<div class="col-md-4 item-portfolio">
    <a class="btn btn-default" href="/admin/portfolio/album/delete/{{$val->id}}" style="position: absolute;top:0;right:0;"><i class="glyphicon glyphicon-remove"></i></a>
    <div class="item-portfolio-inner">
        <div class="picture" style="background-image: url('{{$val->cover}}')"></div>
        <div class="item-portfolio-content">
            <h4><a href="/admin/portfolio/form/{{$val->id}}">{{$val->name}}</a></h4>
            <p>{{$val->count}} รูปภาพ</p>
        </div>
    </div>
</div>
@endforeach
@endsection