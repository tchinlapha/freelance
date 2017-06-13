@extends('layouts.master') 
@section('content')

<div id="page-title-background">
	<div id="page-title">
		<div class="width-container">
			<h1 align="center"><i class="fa fa-wrench"></i> บริการของเรา</h1>
			<div class="clearfix"></div>
		</div>
	</div>
	<script type="text/javascript">
		// jQuery(document).ready(function ($) { $("#page-title-background").backstretch(["images/demo/page-title-contact.jpg"], { fade: 750, }); });
	</script>
</div>

    <div id="main">
        <div class="width-container">
            <div id="service-index">
                <div class="grid2column-progression ">
                    <article>
                        
                             <div class="service-thumb">
                                <img width="300" height="140" src="{{ asset('assets/images/pp.jpg') }}" class="attachment-medium wp-post-image"
							 alt="remodeling-icon">
                            </div>
                        
                    </article>
                </div>
                <div class="grid2column-progression lastcolumn-progression">
                    <article>
                        <div class="service-container">
                            
                            <h3 align="center">ขั้นตอนการทำงานของเรา </h3>
                            <div class="service-content">
                                <p>
									การดำเนินงานอย่างมืออาชีพ<br>
									ขั้นที่ 1 ให้คำปรึกษา พูดคุยกับลูกค้าถึงความต้องการและรูปแบบงาน<br>
									ขั้นที่ 2 ออกแบบร่างขั้นต้นเพื่อให้ลูกค้าเข้าใจแบบ<br>
									ขั้นที่ 3 แก้ไขแบบพัฒนาแบบร่างขั้นสุดท้าย<br>
									ขั้นที่ 4 ออกแบบ 3D<br>
									ขั้นที่ 5 ประเมินราคาการก่อสร้างขั้นตอนการทำงานของเรา<br>
									ขั้นที่ 6 จัดทำเอกสารสัญญา ดำเนินการผลิต และส่งมอบพื้นที่พร้อมรับประกัน 1 ปี<br>

									</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="clearfix"></div>

                <div class="grid2column-progression ">
                    <article>
                        <div class="service-container">
                           
                            <h3 align="center">บริการต่างๆ</h3>
                            <div class="service-content">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รับสร้างบ้าน อาคารพาณิชย์ ออกแบบตกแต่งภายในบ้านพักอาศัย คอนโด โรงแรม ร้านค้า โชว์รูมบู๊ทแสดงสินค้า ห้องตัวอย่าง บ้านตัวอย่าง โดยทีมงานสถาปนิก และวิศวกรที่มีประสบการณ์สร้างบ้านโดยเฉพาะ ดำเนินการแบบครบวงจร ตั้งแต่ออกแบบก่อสร้าง ขอใบอนุญาตก่อสร้าง ขอระบบสาธารณูปโภค<br>

								- งานก่อสร้าง<br>
								- งานสถาปัตยกรรม<br>
								- งานออกแบบตกแต่งภายใน<br>
								-  งานปรับภูมิทัศน์ จัดพื้นที่ดินและจัดสวน<br></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="grid2column-progression lastcolumn-progression">
                    <article>
                            <div class="service-thumb">
                                <img width="300" height="140" src="{{ asset('assets/images/aa.jpg') }}" class="attachment-medium wp-post-image"
							 alt="remodeling-icon">
							</div>
                    </article>
                </div>

                <div class="clearfix"></div>
                <br>
                <br>
                <br>

               <h3 class="home-widget" align="center">CREATIVE & DESIGN</h3>
			<div class="home-portfolio-boxes grid3column-progression">
				<article>
					<div class="service-container">
						<div class="service-thumb">
							<img width="300" height="140" src="{{ asset('assets/images/demo/construction-icon.png') }}" class="attachment-medium wp-post-image"
							 alt="construction-icon">
						</div>
						<h3 align="center">Architecture Design </h3>
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
						<h3 align="center">Interior Design</h3>
						<div class="service-content">
							<ul>
							<li>ออกแบบตกแต่งภายใน/จัดสรรพื้นที่ภายในให้ลงตัว</li>
							<li>3D และ เอนิเมชั่น </li>
							</ul>
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
						<h3 align="center">Landscape Design</h3>
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
            <!-- close #service-index -->
        </div>
        <!-- close .width-container -->
        <div class="clearfix"></div>
    </div>


    
@endsection