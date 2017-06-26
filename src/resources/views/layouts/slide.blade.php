<div id="carousel-example-generic" data-ride="carousel" class="carousel slide carousel-fade">
	<div class="carousel-inner" role="listbox" style="max-width: 100%;max-height: 100%">
		@foreach($slide as $key => $x)
	 		<div class="item item-bg {{ $key == 0 ? 'active'  : '' }}" style="background-image:url({{$x->path}})">
	 			<div class="carousel-caption">
	 				<h1 data-animation="animated fadeInUp">{{$x->text}}</h1>
	 			</div>
	 		</div>
	 		@endforeach
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>