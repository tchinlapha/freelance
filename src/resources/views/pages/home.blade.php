@extends('layouts.master') 
@section('content')

<div id="carousel-example-generic" data-ride="carousel" class="carousel slide carousel-fade">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">

		<!-- First slide -->
		<div class="item item-bg active" style="background-image:url(http://thegroovedesign.com/wp-content/uploads/2015/06/slider-2.jpg)">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp">
					This is the caption for slide 1
				</h1>
			</div>
		</div>
		<!-- /.item -->

		<!-- Second slide -->
		<div class="item item-bg" style="background-image:url(http://demo.edge-themes.com/hudson6/wp-content/uploads/2015/06/slide02.jpg)">
			<div class="carousel-caption">
				<h1 data-animation="animated fadeInUp">
					This is the caption for slide 2
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

<div class="container animated slideInUp">
<div class="widget home-widget pyre_homepage_media-port">
	<div class="pyre_homepage_media-widget-port-2 service-posts-home">
		<div class="width-container">
			<h2 class="home-widget">Our Services</h2>
			<div class="summary-text-pro">Years of Expertise</div>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/construction-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="construction-icon">
						</div>
						<h2>Construction</h2>
						<div class="service-content">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/roofing-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="roofing-icon">
						</div>
						<h2>Roofing</h2>
						<div class="service-content">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid3column-progression lastcolumn-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/remodeling-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="remodeling-icon">
						</div>
						<h2>Remodeling</h2>
						<div class="service-content">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="widget home-widget pyre_homepage_media-menu">
	<div class="pyre_homepage_media-widget-menu-2 portfolio-posts-home light-fonts-pro">
		<div class="width-container">
			<h2 class="home-widget">Featured Work</h2>
			<div class="summary-text-pro">We take pride in our work</div>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="portfolio-index-pro">
						<div class="featured-image-portfolio">
							<a href="single-portfolio-post.html">
									<img width="600" height="338" src="{{ asset('assets/images/demo/shutterstock_110160008-600x338.jpg') }}" class="attachment-progression-portfolio-thumb wp-post-image" alt="shutterstock_110160008">
								</a>
						</div>
						<div class="portfolio-index-text">
							<div class="portfolio-index-padding">
								<h4 class="portfolio-index-title">
									<a data-ripple href="single-portfolio-post.html"> Commercial Building </a>
								</h4>
								<div class="meta-progression-port">
									<ul>
										<li>
											<a data-ripple href="portfolio-commercial.html">Commercial</a> <i class="fa fa-asterisk"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="portfolio-index-pro">
						<div class="featured-image-portfolio">
							<a href="single-portfolio-post.html">
									<img width="600" height="338" src="{{ asset('assets/images/demo/shutterstock_82080655-600x338.jpg') }}" class="attachment-progression-portfolio-thumb wp-post-image" alt="shutterstock_82080655">
								</a>
						</div>
						<div class="portfolio-index-text">
							<div class="portfolio-index-padding">
								<h4 class="portfolio-index-title">
									<a data-ripple href="single-portfolio-post.html"> Commercial Portfolio Example </a>
								</h4>
								<div class="meta-progression-port">
									<ul>
										<li>
											<a data-ripple href="portfolio-commercial.html">Commercial</a> <i class="fa fa-asterisk"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid3column-progression lastcolumn-progression">
				<article>
					<div class="portfolio-index-pro">
						<div class="featured-image-portfolio">
							<div class="flexslider gallery-progression">
								<ul class="slides">
									<li class="flex-active-slide">
										<a href="single-portfolio-post.html">
												<img src="{{ asset('assets/images/demo/photodune-2079559-interior-of-modern-house-kitchen-m-600x338.jpg') }}" alt="Interior of modern house kitchen" draggable="false">
											</a>
									</li>
									<li>
										<a href="single-portfolio-post.html">
												<img src="{{ asset('assets/images/demo/photodune-2079614-interior-of-modern-house-kitchen-m-600x338.jpg') }}" alt="photodune-2079614-interior-of-modern-house-kitchen-m" draggable="false">
											</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="portfolio-index-text">
							<div class="portfolio-index-padding">
								<h4 class="portfolio-index-title">
									<a data-ripple href="portfolio-commercial.html"> Kitchen Gallery Example </a>
								</h4>
								<div class="meta-progression-port">
									<ul>
										<li>
											<a data-ripple href="portfolio-kitchen-remodeling.html">Kitchen Remodeling</a> <i class="fa fa-asterisk"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="aligncenter">
				<a data-ripple href="/portfolio" class="progression-button btn-orange">ดูผลงานทั้งหมด<i class="ls-sc-button-icon-right fa fa-briefcase"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="widget home-widget pyre_homepage_media-test">
	<div class="pyre_homepage_media-widget-test-2 testimonial-posts-home">
		<div class="width-container">
			<h2 class="home-widget">What Our Clients are Saying</h2>
			<div class="summary-text-pro">Don't just take our word</div>
			<div class="home-portfolio-boxes grid2column-progression">
				<article>
					<div class="testimonial-container">
						<div class="testimonial-thumb">
							<img width="150" height="150" src="{{ asset('assets/images/demo/sample-testimonial.jpg') }}" class="attachment-thumbnail wp-post-image"
							 alt="sample-testimonial">
						</div>
						<h4>Jane Doe</h4>
						<h6>Home Owner</h6>
						<div class="testimonial-content">
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however
								a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox
								advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but
								the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself
								on the way.</p>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="home-portfolio-boxes grid2column-progression lastcolumn-progression">
				<article>
					<div class="testimonial-container">
						<div class="testimonial-thumb">
							<img width="150" height="150" src="{{ asset('assets/images/demo/sample-testimonial2.jpg') }}" class="attachment-thumbnail wp-post-image"
							 alt="sample-testimonial2">
						</div>
						<h4>John Doe</h4>
						<h6>Business Owner</h6>
						<div class="testimonial-content">
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however
								a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox
								advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but
								the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself
								on the way.</p>
						</div>
					</div>
				</article>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
@endsection