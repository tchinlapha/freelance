@extends('layouts.master') @section('content')

<div id="page-title-background">
	<div id="page-title">
		<div class="width-container">
			<h1 align="center"><i class="fa fa-handshake-o"></i> ติดต่อเรา</h1>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div id="main col-md-12">
	<div class="google-maps-expand">
		<iframe src="{{ $data['map'] }}" frameborder="0" style="border:0;min-height: 500px;"></iframe>
	</div>
	<div class="width-container" style="margin-top:50px;">
		<div class="col-md-8">
			<h2>ส่งข้อความ</h2>
			<form class="progression-contact wpcf7" id="CommentForm" method="post" action="javascript:void(0)" onsubmit="submitContact()">
				<fieldset>
					<div>
						<p><input id="ContactName" name="ContactName" class="textInput required" placeholder="ชื่อ - นามสกุล" /></p>
					</div>
					<div>
						<p><input id="ContactEmail" name="ContactEmail" class="textInput required email" placeholder="อีเมลล์ของคุณ" /></p>
					</div>
					<div>
						<p><input id="ContactPhone" name="ContactPhone" class="textInput digits" value="" placeholder="เบอรโทรศัพท์ที่ติดต่อได้"
							/></p>
					</div>
					<div>
						<p><textarea id="ContactComment" name="ContactComment" class="textInput required" rows="6" placeholder="รายละเอียด ..."></textarea></p>
					</div>
					<div>
						<p><button type="submit" class="progression-contact-submit wpcf7-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span>ส่งข้อความ</span></button></p>
					</div>
				</fieldset>
			</form>
		</div>
		<div id="sidebar" class="col-md-4">
			<div class="sidebar-item widget">

				<h6 class="contact-title">ที่อยู่</h6>
				<ul>
					<li>
						{{ $data['address'] }}
					</li>
				</ul>
				<h6 class="contact-title">อีเมลล์บริษัท</h6>
				<ul>
					<li>
						{{ $data['email'] }}
					</li>
				</ul>
				<h6 class="contact-title">เบอรโทรศัพท์</h6>
				<ul>
					<li>
						{{ $data['phone'] }}
					</li>
				</ul>
				<h6 class="contact-title">เวลาทำการ</h6>
				<ul>
					<li>
						{{ $data['work_time'] }}
					</li>
				</ul>
			</div>

			<div class="sidebar-item widget pyre_social_media-feat">
				<h6 class="contact-title">ติดตามเรา</h6>
				<iframe src="https://www.facebook.com/plugins/page.php?href={{$data['facebook']}}&tabs&&height=240&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
				 width="100%" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				<div class="sidebar-divider"></div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
	function submitContact(){
		var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var regexPhone = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
		var name = $('#ContactName').val();
		var email = $('#ContactEmail').val();
		var phone = $('#ContactPhone').val();
		var message = $('#ContactComment').val();


		if(!regexEmail.test(email)){
			return;
		}

		if(!regexPhone.test(phone)){
			return;
		}

		if(!message){
			return;
		}

		var json = {name:name, email:email, phone:phone, message:message}

		swal({
			title: "<i class='fa fa-spinner fa-spin fa-3x' style='color:#00bcd4'></i><br><br>กำลังโหลด...",
			showCloseButton: false,
			showCancelButton: false,
			showOkButton: false,
			showConfirmButton: false
		})
		$.post("/api/contact",json).then(function(res){
			console.log(res)
			if(res.result){
				swal(
					'เรียบร้อย!',
					'ส่งข้อความเรียบร้อยแล้ว!',
					'success'
					)
			}else{
				swal(
					'เกิดข้อผิดพลาด!',
					'ส่งข้อความผิดพลาด กุณาลองใหม่อีกครั้ง!',
					'error'
					)
			}
		})

	}
</script>
@endsection