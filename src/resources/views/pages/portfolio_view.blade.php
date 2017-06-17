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
        <a href="#" class="imgModal" data-toggle="modal" data-target="#imgModal" data-img="{{$val->path}}">
            <div class="picture" style="background-image: url('{{$val->path}}')"></div>
        </a>
    </div>
    @endforeach
</div>

<script type="text/javascript">
    $(function () {
        $(document).on('click', '.imgModal', function (e) {
            var img = $(this).data('img');
            $('#blockImg').attr("src", img)
        });

        var span = document.getElementsByClassName("closex")[0];
        span.onclick = function () {
            $("#imgModal").modal('hide');
        }
    });
</script>
@endsection