@extends('layouts.admin') @section('content')
@if(!$data)
<div class="col-md-12 panel panel-flat">
    <div class="panel-heading">
        <h2 class="panel-title"><i class="icon-plus-circle2"></i> เพิ่มโครงการ</h2>
    </div>
    <div class="panel-body">
        <form action="/admin/portfolio/add" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="form-group">
         <label>หมวดหมู่ : </label>
         <select class="form-control" name="type">
             <option value="furniture">งานตกแต่ง - เฟอร์นิเจอร์</option>
             <option value="binds">งานผ้าม่าน</option>
             <option value="elec-supply">งานระบบไฟฟ้า - ประปา</option>
             <option value="air">งานแอร์</option>
             <option value="lift">งานลิฟท์</option>
         </select>
        </div>
        <div class="form-group">
            <label>ขื่อโครงการ : </label><input class="form-control" name="name" placeholder="ขื่อโครงการ..." required>
        </div>
        <div class="form-group">
            <label>ผู้รับเหมา : </label><input class="form-control" name="contractor" placeholder="ผู้รับเหมา..." required>
        </div>
        <div class="form-group">
            <label>รายละเอียด : </label><input class="form-control" name="description" placeholder="รายละเอียด..." required>
        </div>
        <div class="form-group">
            <input class="form-control" name="value" placeholder="มูลค่าที่ได้รับ..." required>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <label>เลือกรูปภาพ : </label><input type="file" name="img[]" class="form-control" style="padding:5px;border:transparent;"
                multiple>
            </div>
        </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn btn-primary btn-raised"><i class="icon-check"></i> บันทึก</button>
        </div>
    </form>
</div>
</div>
@endif
@if($data)
<div class="col-md-12 panel panel-flat">
    <div class="panel-heading">
        <h2><i class="icon-pencil5"></i> จัดการผลงานโครงการ {{ $album->name }}</h2>
    </div>
    <div class="panel-body">
        <form action="/admin/portfolio/add" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $album->id }}" />
            <div class="form-group">
               <label>หมวดหมู่ : </label>
               <select class="form-control" name="type" value="{{ $album->type }}">
                   <option value="furniture">งานตกแต่ง - เฟอร์นิเจอร์</option>
                   <option value="binds">งานผ้าม่าน</option>
                   <option value="elec-supply">งานระบบไฟฟ้า - ประปา</option>
                   <option value="air">งานแอร์</option>
                   <option value="lift">งานลิฟท์</option>
               </select>
           </div>
            <div class="form-group">
            <label>ขื่อโครงการ : </label><input class="form-control" value="{{ $album->name }}" name="name" placeholder="ขื่อโครงการ..." required>
            </div>
            <div class="form-group">
                <label>ผู้รับเหมา : </label><input class="form-control" value="{{ $album->contractor }}" name="contractor" placeholder="ผู้รับเหมา..." required>
            </div>
            <div class="form-group">
                <label>รายละเอียด : </label><input class="form-control" value="{{ $album->description }}" name="description" placeholder="รายละเอียด..." required>
            </div>
            <div class="form-group">
                <label>มูลค่าที่ได้รับ : </label><input class="form-control" value="{{ $album->value }}" name="value" placeholder="มูลค่าที่ได้รับ..." required>
            </div>
            <div class="form-group">
                <label>เลือกรูปภาพ : </label><input type="file" name="img[]" class="form-control" style="padding:5px;border:transparent;"
                multiple>
            </div>
            <div class="form-group" align="center">
                <button type="submit" class="btn btn-primary btn-raised"><i class="icon-check"></i> บันทึก</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>รูปภาพที่มีอยู่</h2>
        <div class="row">
        @foreach($data as $val)
        <div class="col-lg-4 col-sm-6">
            <div class="thumbnail">
                <div class="thumb">
                    <a href="/admin/portfolio/image/delete/{{$val->id}}" onclick="return confirm('ต้องการลบใช่หรือไม่?');" class="btn btn-danger" style="position: absolute;top:0;right: 0;"><i class="icon-bin"></i></a>
                    <a href="{{$val->path}}" target="_blank">
                        <img src="{{$val->path}}" alt="" style="height:200px;">
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endif
@endsection