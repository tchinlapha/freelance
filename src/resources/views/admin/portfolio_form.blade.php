@extends('layouts.admin') @section('content')
@if(!$data)
<div class="col-md-6">
    <h2>เพิ่มอัลบั้มรูป</h2>
    <form action="/admin/portfolio/add" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
        <div class="form-group">
            <input class="form-control" name="name" placeholder="ชื่ออัลบั้มรูป..." required>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <label>เลือกรูปภาพ : </label><input type="file" name="img[]" class="form-control" style="padding:5px;border:transparent;"
                    multiple>
                    <button type="submit" class="btn btn-primary">ตกลง</button>
            </div>
        </div>
        
    </form>
</div>
@endif
@if($data)
<div class="col-md-6">
    <h2>จัดการรูปภาพอัลบั้ม {{ $album->name }}</h2>
    <form action="/admin/portfolio/add" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $album->id }}">
        <div class="form-inline">
            <div class="form-group">
                <label>เลือกรูปภาพ : </label><input type="file" name="img[]" class="form-control" style="padding:5px;border:transparent;"
                    multiple>
                <button type="submit" class="btn btn-primary">ตกลง</button>
            </div>
        </div>

    </form>
</div>
<div class="col-md-12">
    <h2>รูปภาพที่มีอยู่</h2>
     @foreach($data as $val)
    <div class="col-md-4 item-portfolio">
        <a class="btn btn-default" href="/admin/portfolio/image/delete/{{$val->id}}" style="position: absolute;top:0;right:0;"><i class="glyphicon glyphicon-remove"></i></a>
        <div class="picture" style="background-image: url('{{$val->path}}')"></div>
    </div>
    @endforeach
</div>
@endif
@endsection