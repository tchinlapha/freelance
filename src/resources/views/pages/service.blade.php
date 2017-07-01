@extends('layouts.master') 
@section('content')

<div id="page-title-background">
	<div id="page-title">
		<div class="width-container">
			<h1 align="center"><i class="fa fa-info-circle"></i> เกี่ยวกับบริษัท</h1>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div id="main col-md-12">
	<div class="width-container" style="margin-top:50px;">
		<div class="col-md-12">
			@php echo $data['about']; @endphp
		</div>
		<div class="clearfix"></div>
		<hr style="padding-top: 20px;padding-bottom: 20px;">
		<div class="row">
			<h3 align="center">ใบทะเบียนการค้า / รับรองผลงาน</h3>
			<div class="col-md-12">
				@foreach($certificate as $val)
				<div class="col-lg-3 col-sm-6">
					<div class="thumbnail">
						<div class="thumb">
							<a class="pp" href="{{$val->path}}" target="_blank">
								<img src="{{$val->path}}" alt="" style="height:320px;" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- close #service-index -->
	</div>
	<!-- close .width-container -->
	<div class="clearfix"></div>
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