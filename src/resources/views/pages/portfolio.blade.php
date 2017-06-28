@extends('layouts.master') @section('content')
<div id="page-title-background">
    <div id="page-title">
        <div class="width-container">
            <h1 align="center"><i class="fa fa-picture-o"></i> ผลงานของเรา</h1>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<div class="width-container">
    @foreach($data as $val)
    <div class="col-md-4 item-portfolio">
        <div class="item-portfolio-inner">
            <div class="picture" style="background-image: url('{{$val->cover}}')"></div>
            <div class="item-portfolio-content">
                <h4>
                <a href="/portfolio/view/{{$val->id}}">{{$val->name}}</a>
                </h4>
                <p>{{$val->count}} รูปภาพ</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection