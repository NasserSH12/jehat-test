@extends('layouts.appPortal')

@section('content')

<main>
	<!--? slider Area Start-->
	<section class="slider-area slider-area2">
		<div class="slider-active">
			<!-- Single Slider -->
			<div class="single-slider slider-height2">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-11 col-md-12">
							<div class="hero__caption hero__caption2 text-center">
								<h1 data-animation="bounceIn" data-delay="0.2s"> المركز الاعلامى</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="section-top-border">
	<div class="container">
		<h3>شرح منصة مستفيد </h3>
		<div class="row gallery-item">
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
					<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g1.jpg' ) }}">

					<h5> انشاء جهه جديده </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g5.jpg' ) }}">
					<h5> الية التسجيل كمستفيد </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g3.jpg' ) }}">
					<h5> تغيير لغة العرض </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g8.jpg' ) }}">
					<h5> حضور الاجتماعات والتصويت </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g4.jpg' ) }}">
					<h5> استرجاع كلمه المرور </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g2.jpg' ) }}">
					<h5> تعديل البيانات الشخصيه </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g9.jpg' ) }}">
					<h5> اضافه المفوضين واداره المستندات </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g6.jpg' ) }}">
					<h5> اضافه واداره المواعيد </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g10.jpg' ) }}">
					<h5> اضافه ومتابعه طلب </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g7.jpg' ) }}">
					<h5> الانتقال الى مكتبي </h5>
				</a>
			</div>
		</div>
	</div>
</div>
	<div class="section-top-border">
	<div class="container">
		<h3>شرح منصة الموظف</h3>
		<div class="row gallery-item">
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h1.jpg' ) }}">
					<h5> اضافه وادارة الفواتير الالكترونية</h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h2.jpg' ) }}">
					<h5> اضافه ومتابعه الطلبات </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h3.jpg' ) }}">
					<h5> ادارة الاجتماع اثناء الانعقاد</h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h4.jpg' ) }}">
					<h5>التعليقات وانواع الاسناد</h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h5.jpg' ) }}">
					<h5>ادارة العملاء والاقسام </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h6.jpg' ) }}">
					<h5> ادارة غرف الفيديو كونفرس</h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h7.jpg' ) }}">
					<h5> الية انشاء  الاجتماعات</h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h8.jpg' ) }}">
					<h5> استخدام فلتر بحث المعاملات</h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h9.jpg' ) }}">
					<h5> ادارة الموظفين </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/10.jpg' ) }}">
					<h5> اضافه واداره المواعيد</h5>
				</a>
			</div>
		</div>
	</div>
</div>
	@endsection