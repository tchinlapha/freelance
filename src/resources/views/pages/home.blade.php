@extends('layouts.master') 
@section('content')


<div class="widget home-widget pyre_homepage_media-port">
	<div class="pyre_homepage_media-widget-port-2 service-posts-home">
		<div class="width-container">
			<h2 class="home-widget"><i class="fa fa-wrench"></i> บริการของเรา</h2>
			<h5 style="padding-top: 10px;font-weight: 300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รับสร้างบ้าน อาคารพาณิชย์ ออกแบบตกแต่งภายในบ้านพักอาศัย คอนโด โรงแรม ร้านค้า โชว์รูมบู๊ทแสดงสินค้า ห้องตัวอย่าง บ้านตัวอย่าง โดยทีมงานสถาปนิก และวิศวกรที่มีประสบการณ์สร้างบ้านโดยเฉพาะ ดำเนินการแบบครบวงจร ตั้งแต่ออกแบบก่อสร้าง ขอใบอนุญาตก่อสร้าง ขอระบบสาธารณูปโภค</h5>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/construction-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="construction-icon">
						</div>
						<h2>Architecture Design</h2>
						<div class="service-content">
							<ul>
							<li>ออกแบบโครงการต่างๆ</li>
							<li>ออกแบบอาคาร/รีโนเวท </li>
							</ul>
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
						<h2>Interior Design</h2>
						<div class="service-content">
							<ul>
							<li>ออกแบบตกแต่งภายใน/จัดสรรพื้นที่ภายในให้ลงตัว</li>
							<li>3D และ เอนิเมชั่น </li>
							</ul>
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
						<h2>Landscape Design</h2>
						<div class="service-content">
							<ul>
							<li>ออกแบบภูมิทัศน์</li>
							<br>
							</ul>
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
			<h2 class="home-widget"><i class="fa fa-picture-o"></i> ผลงานของเรา</h2>
			<div class="summary-text-pro">ภาพผลงานที่เคยจัดทำ</div>
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
			<h2 class="home-widget"><i class="fa fa-handshake-o"></i> ติดต่อเรา</h2>
			<div id="main col-md-12">
	
	<div class="width-container" style="margin-top:50px;">
		<div class="col-md-8">
			<div class="google-maps-expand">
		<iframe src="https://her.is/2r7b2FV" frameborder="0" style="border:0;min-height: 500px;"></iframe>
	</div>
		</div>
		<div id="sidebar" class="col-md-4">
			<div class="sidebar-item widget">

				<h6 class="contact-title">ที่อยู่</h6>
				<ul>
					<li>
						เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด 1647 อ่อนนุช แขวง สวนหลวง เขต สวนหลวง กรุงเทพมหานคร 10250
					</li>
				</ul>
				<h6 class="contact-title">อีเมลล์บริษัท</h6>
				<ul>
					<li>
						sereechai_int@hotmail.com
					</li>
				</ul>
				<h6 class="contact-title">เบอรโทรศัพท์</h6>
				<ul>
					<li>
						02-742-0781
					</li>
				</ul>
				<h6 class="contact-title">เวลาทำการ</h6>
				<ul>
					<li>
						จันทร์ - อาทิตย์ เวลา 09.00 - 17.00 น.
					</li>
				</ul>
			</div>

			<div class="sidebar-item widget pyre_social_media-feat">
				<h6 class="contact-title">ติดตามเรา</h6>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E0%25B9%2580%25E0%25B8%25AA%25E0%25B8%25A3%25E0%25B8%25B5%25E0%25B8%258A%25E0%25B8%25B1%25E0%25B8%25A2-%25E0%25B8%25AD%25E0%25B8%25B4%25E0%25B8%2599%25E0%25B8%2597%25E0%25B8%25B5%25E0%25B9%2580%25E0%25B8%25A3%25E0%25B8%25B5%25E0%25B8%25A2%25E0%25B8%25A3%25E0%25B9%258C-%25E0%25B8%2594%25E0%25B8%25B5%25E0%25B9%2584%25E0%25B8%258B%25E0%25B8%2599%25E0%25B9%258C-%25E0%25B8%2588%25E0%25B8%25B3%25E0%25B8%2581%25E0%25B8%25B1%25E0%25B8%2594-358191721245279&tabs&&height=240&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
				 width="100%" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				<div class="sidebar-divider"></div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection