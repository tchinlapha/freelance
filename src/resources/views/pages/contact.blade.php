@extends('layouts.master') 
@section('content')

	<div id="page-title-background">
		<div id="page-title">
			<div class="width-container">
				<h1>Contact Us</h1>
				<div id="page-title-description">
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
				</div>
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
						
					<div class="sidebar-divider"></div>
					</div>
					
					<div class="sidebar-item widget pyre_social_media-feat">
						<h5 class="widget-title">Follow us</h5>
						<div class="social-icons-widget-pro">
							<div class="social-ico">
								<a href="https://www.facebook.com/%E0%B9%80%E0%B8%AA%E0%B8%A3%E0%B8%B5%E0%B8%8A%E0%B8%B1%E0%B8%A2-%E0%B8%AD%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B9%8C-%E0%B8%94%E0%B8%B5%E0%B9%84%E0%B8%8B%E0%B8%99%E0%B9%8C-%E0%B8%88%E0%B8%B3%E0%B8%81%E0%B8%B1%E0%B8%94-358191721245279/" target="_blank"><i class="fa fa-facebook"></i>
								</a> 
							</div>
						</div>
						<div class="sidebar-divider"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

@endsection