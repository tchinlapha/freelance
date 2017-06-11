@extends('layouts.master') 
@section('content')

	<div id="page-title-background" >
		<div id="page-title">
			<div class="width-container">
				<h1>Contact Us</h1>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">jQuery(document).ready(function($) {   $("#page-title-background").backstretch([ "images/demo/page-title-contact.jpg" ],{ fade: 750, }); }); </script>
	</div>	
	<div id="main">
		<div class="width-container bg-sidebar-pro">
			<div id="sidebar-border">
						<div class="google-maps-expand">
							<iframe src="https://her.is/2r7b2FV" frameborder="0" style="border:0"></iframe>
						</div>
				<div id="content-container">
					<div class="content-container-pro">
							
						<p>&nbsp;</p>
						<h2>ติดต่อเรา</h2>
						<form class="progression-contact wpcf7" id="CommentForm" method="post" action="#">
								<fieldset>
									<div>
										<p><input id="ContactName" name="ContactName" class="textInput required" placeholder="Name" /></p>
									</div>
									<div>
										<p><input id="ContactEmail" name="ContactEmail" class="textInput required email" placeholder="E-mail" /></p>
									</div>
									<div>
										<p><input id="ContactPhone" name="ContactPhone" class="textInput digits" value="" placeholder="Phone" /></p>
									</div>
									<div>
										<p><textarea id="ContactComment" name="ContactComment" class="textInput required" rows="10" cols="4" placeholder=" Your Message"></textarea></p>
									</div>
									<div>
										<p ><button type="submit" class="progression-contact-submit wpcf7-submit"><span>ส่งข้อมูล</span></button></p>
									</div>
								</fieldset>
						</form>	
					</div>
				</div>
				<div id="sidebar">
				<div class="sidebar-divider"></div>
				<div class="sidebar-divider"></div>
					<div class="sidebar-item widget">

						<h6 class="widget-title">ที่อยู่</h6>
							<ul>
								<li>
								เสรีชัย อินทีเรียร์ ดีไซน์ จำกัด 1647 อ่อนนุช แขวง สวนหลวง เขต สวนหลวง กรุงเทพมหานคร 10250
								</li>
							</ul>
						<h6 class="widget-title">อีเมลล์บริษัท</h6>
							<ul>
								<li>
								sereechai_int@hotmail.com
								</li>
							</ul>
						<h6 class="widget-title">เบอรโทรศัพท์</h6>
							<ul>
								<li>
								02-742-0781
								</li>
							</ul>
						<h6 class="widget-title">เวลาทำการ</h6>
							<ul>
								<li>
								จันทร์ - อาทิตย์ เวลา 09.00 - 17.00 น.
								</li>
							</ul>
					</div>
					
					<div class="sidebar-item widget pyre_social_media-feat">
						<h5 class="widget-title">Follow us</h5>
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E0%25B9%2580%25E0%25B8%25AA%25E0%25B8%25A3%25E0%25B8%25B5%25E0%25B8%258A%25E0%25B8%25B1%25E0%25B8%25A2-%25E0%25B8%25AD%25E0%25B8%25B4%25E0%25B8%2599%25E0%25B8%2597%25E0%25B8%25B5%25E0%25B9%2580%25E0%25B8%25A3%25E0%25B8%25B5%25E0%25B8%25A2%25E0%25B8%25A3%25E0%25B9%258C-%25E0%25B8%2594%25E0%25B8%25B5%25E0%25B9%2584%25E0%25B8%258B%25E0%25B8%2599%25E0%25B9%258C-%25E0%25B8%2588%25E0%25B8%25B3%25E0%25B8%2581%25E0%25B8%25B1%25E0%25B8%2594-358191721245279&tabs&width=214px&height=170&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="214px" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					
						<div class="sidebar-divider"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection