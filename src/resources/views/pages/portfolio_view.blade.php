@extends('layouts.master') 
@section('content')
<div id="page-title-background">
    <div id="page-title">
        <div class="width-container">
            <h1 align="center"><i class="fa fa-picture-o"></i> {{ $album->name }}</h1>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<div class="width-container" style="margin-top:50px;">
    <a href="/portfolio" class="btn btn-default" style="margin:15px; auto;">กลับไปหน้าผลงาน</a>
    <div class="clearfix"></div>
    @foreach($data as $val)
    <div class="col-md-4 item-portfolio">
        <div class="picture" style="background-image: url('{{$val->path}}')"></div>
    </div>
    @endforeach
</div>
@endsection