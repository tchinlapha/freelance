@extends('layouts.master') 
@section('content')
<script type="text/javascript">
    $(function() {
        var selectedClass = "";
        $(".fil-cat").click(function(){ 
        selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
        $("#portfolio .item-portfolio").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
        
    });
});
</script>
<div id="page-title-background">
    <div id="page-title">
        <div class="width-container">
            <h1 align="center"><i class="fa fa-picture-o"></i> ผลงานของเรา</h1>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<div class="width-container">
    <div class="toolbar mb2 mt2">
        <button class="fil-cat" href="" data-rel="all">ทั้งหมด</button>
        <button class="fil-cat" data-rel="furniture">งานตกแต่ง - เฟอร์นิเจอร์</button>
        <button class="fil-cat" data-rel="binds">งานผ้าม่าน</button>
        <button class="fil-cat" data-rel="elec-supply">งานระบบไฟฟ้า - ประปา</button>
        <button class="fil-cat" data-rel="air">งานแอร์</button>
        <button class="fil-cat" data-rel="lift">งานลิฟท์</button>
    </div>

  <div style="clear:both;"></div>   
  <div id="portfolio">
      @foreach($data as $val)
      <div class="col-md-4 item-portfolio {{$val->type}} all">
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

<div style="clear:both;"></div>   
</div>
@endsection