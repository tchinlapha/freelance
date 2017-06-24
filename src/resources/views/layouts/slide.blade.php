<div id="carousel-example-generic" data-ride="carousel" class="carousel slide carousel-fade">
	<!-- Indicators -->
	<!--<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>-->

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox" style="max-width: 100%;max-height: 100%">

		<!-- First slide -->
		<div class="item item-bg active" style="background-image:url({{ asset('assets/images/slider/4.jpg') }});">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp"></h1>
			</div>
		</div>
		<!-- /.item -->

		<!-- Second slide -->
		<div class="item item-bg" style="background-image:url({{ asset('assets/images/slider/3.jpg') }})">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp">
					
				</h1>
			</div>
		</div>

		<div class="item item-bg" style="background-image:url({{ asset('assets/images/slider/2.jpg') }})">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp">
					
				</h1>
			</div>
		</div>

		<div class="item item-bg" style="background-image:url({{ asset('assets/images/slider/1.jpg') }})">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp">
					
				</h1>
			</div>
		</div>
		<!-- /.item -->

	</div>
	<!-- /.carousel-inner -->

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
<!-- /.carousel -->