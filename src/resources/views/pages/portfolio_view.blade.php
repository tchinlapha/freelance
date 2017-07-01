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
<div class="width-container" style="margin-top:20px;">
    <div class="table-responsive">
        <table class="table table-bordered" style="max-width: 800px;margin: auto;">
            <tr class="active">
                <th style="min-width: 110px;">โครงการ</th><td>{{ $album->name }}</td>
            </tr>
            <tr>
                <th style="min-width: 110px;">ผู้รับเหมา</th><td>{{ $album->contractor }}</td>
            </tr>
            <tr class="active">
                <th style="min-width: 110px;">รายละเอียด</th><td>{{ $album->description }}</td>
            </tr>
            <tr>
                <th style="min-width: 110px;">มูลค่าที่ได้รับ</th><td>{{ $album->value }}</td>
            </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    <div id="portfolio">
      @foreach($data as $val)
      <div class="col-md-4 item-portfolio" >
          <a href="{{$val->path}}" class="pp">
              <div class="picture" style="background-image: url('{{$val->path}}')"></div>
          </a>
      </div>
      @endforeach
    </div>
</div>
@endsection
@section('script')
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-fullsizable.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-fullsizable-theme.css') }}" />
  <script src="{{ asset('assets/js/jquery-1.7.2.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-fullsizable.js') }}"></script>
  <script>
    $(function() {
      $('a.pp').fullsizable({
        detach_id: 'portfolio'
      });

      $(document).on('fullsizable:opened', function(){
        $("#jquery-fullsizable").swipe({
          swipeLeft: function(){
            $(document).trigger('fullsizable:next')
          },
          swipeRight: function(){
            $(document).trigger('fullsizable:prev')
          },
          swipeUp: function(){
            $(document).trigger('fullsizable:close')
          }
        });
      });
    });
  </script>
@endsection