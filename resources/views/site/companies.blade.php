@extends('layouts.appPortalPages')


@section('content')


<section class="page-banner" style="background-size: 100% 100%; background-image: url('public/portal-assets/media/banner/top shape.png'); background-repeat: no-repeat; background-color: #7052fb;">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title" style="font-family: cairo"> الشركات</h1>
			<ul class="bradcurmed">
				<li>
					<a href="{{ URL :: to ('/')}}" rel="noopener noreferrer" style="font-family: cairo">الرئيسية</a>
				</li>
				<li style="font-family: cairo"> الشركات</li>
			</ul>
		</div>
	</div><svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
		<path fill-rule="evenodd" stroke="rgb(146, 112, 250)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z">
		</path>
	</svg>
	<ul class="animate-ball">
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
	</ul>
</section>



<section class="teams">
	<div class="container">
		<div class="section-title text-center">
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">  
       الشركات
				</h2>
		</div>
		<div class="row">

        @foreach($allData as $data)

			<div class="col-lg-3 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="0.3s">
					<div class="member-avater">
                        <img src="{{ URL ::to ('public/upload/'.$data->image)}}" 
          alt="avater" style="width: 470px; height : 300px ;">
						<ul class="member-social">
							<!--li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li-->
							<li><a href="{{ URL :: to ('/department' , $data->id )}}">
                                <i class="fa fa-link"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
          <h3 class="name"> {{ $data->name_ar }}  </h3>
           
						<!--h4 class="job">يمكنك تصفح المكاتب الافتراضيه من خلال اللينك</h4-->
					</div>
				</div>
			</div>
            @endforeach
			
		
		</div>
	</div>
</section>






<!--form name="form1" method="post" action="./" id="form1" style="padding:0px; margin:0px;">
    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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ODQlRDklODUlRDklODYlRDklODglRDglQjElRDglQTkrNDIzMTUlQzIlQTA4NTA4KyVEOCVBNyVEOSU4NCVEOCVCMyVEOCVCOSVEOSU4OCVEOCVBRiVEOSU4QSVEOCVBOSIgdGFyZ2V0PSJfYmxhbmsiPti02KfYsdi5INi52YXYsSDYqNmGINiu2LfYp9ioICgg2KfZhNi52YbYqNix2YrYqSDYs9in2KjZgtinICkgLSDZhdmC2KfYqNmEINij2YXYp9mG2Kkg2KfZhNmF2K/ZitmG2Kkg2KfZhNmF2YbZiNix2KkgLSDYp9mE2YXZhdmE2YPYqSDYp9mE2LnYsdio2YrYqSDYp9mE2LPYudmI2K/ZitipPC9hPjwvcD5kAgEPZBYCZg8VAwVwaG9uZRPYsdmC2YUg2KfZhNmH2KfYqtmBLjxwIGRpcj0ibHRyIj4mbmJzcDsoKzk2NikmbmJzcDs1MCAwNTkgOTcxMzwvcD5kAgIPZBYCZg8VAwhlbnZlbG9wZSHYp9mE2KjYsdmK2K8g2KfZhNin2YTZg9iq2LHZiNmG2YlPPHA+PGEgaHJlZj0ibWFpbHRvOmZmd2ZsZnNAZ21haWwuY29tIiB0YXJnZXQ9Il9ibGFuayI+ZmZ3Zmxmc0BnbWFpbC5jb208L2E+PC9wPmQCCA8WAh8BAgYWDGYPZBYCZg8VAgEjCmZhY2Vib29rLWZkAgEPZBYCZg8VAgEjB3R3aXR0ZXJkAgIPZBYCZg8VAgEjCWluc3RhZ3JhbWQCAw9kFgJmDxUCASMNZ29vZ2xlLXBsdXMtZ2QCBA9kFgJmDxUCASMHeW91dHViZWQCBQ9kFgJmDxUCASMLbGlua2VkaW4taW5kAgoPFgIfAQIBFgJmD2QWAmYPFQGdA2h0dHBzOi8vd3d3Lmdvb2dsZS5jb20vbWFwcy9lbWJlZD9wYj0hMW0xOCExbTEyITFtMyExZDM2MzEuNzYyNjQ2ODgyNjA3NCEyZDM5LjYwNDA1Njk4NTAwNDkxITNkMjQuNDU5MDE4ODg0MjQ0ODM3ITJtMyExZjAhMmYwITNmMCEzbTIhMWkxMDI0ITJpNzY4ITRmMTMuMSEzbTMhMW0yITFzMHgxNWJkYmYwZGM0MWUzMzk5JTNBMHhjMzgwMjdkYjJmYzRjMjc0ITJ6TXprMk5DRFpoZGl0MllYWXJ5RFlwOW1FMlliWmdkaXpJTmluMllUWXN0bUQyWXJaaDlpTUlOaW4yWVRaaGRpNjJZcllzOW1FMktuWWpDRFlwOW1FMllYWXI5bUsyWWJZcVNEWXA5bUUyWVhaaHRtSTJMSFlxU0EwTWpNeE5jS2dPRFV3T05pTUlOaW4yWVRZczlpNTJZallyOW1LMktrITVlMCEzbTIhMXNhciEyc2VnITR2MTU1NTE1OTUzNzA5OCE1bTIhMXNhciEyc2VnZGSwy3IJ+Ro91mCXbIDZWTIsZ8kRS3Hvd99V6mGb12hXTQ==">

    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CEB5DE29">


    <div class="main-wrapper">
        <section class="bg-grey parallax" data-background="assets/images/projectsbg.jpg">
            <div class="container">
                <div class="section-heading title-style5">
                    <img alt="" src="{{ asset('public/tower/assets/images/logo2.png')}}" style="margin-top: -45px; width: 35%;"><br>
                    <br>
                    <h3>مكاتب البرج</h3>
                    <div class="square">
                        <span class="separator-left bg-theme"></span>
                        <span class="separator-right bg-theme"></span>
                    </div>
                </div>


                <br>


                <div class="row margin-50px-bottom sm-margin-30px-bottom" style="border-radius: 15px; color: transparent">

                    @foreach($allData as $data)

                    <div class="col-lg-3 col-md-6 animals ">
                        <div class="contact-box " style="border-radius: 7px;">

                            <a href="{{ URL :: to ('/department' , $data->id )}}">
                                <img alt="" src="{{ URL ::to ('public/upload/'.$data->image)}}" 
                                style="height: 90px; width: 82px;" class="auto-style1"><br>
                                <h4 style="font-size: medium">{{ $data->name_ar }}</h4>
                                <br>
                        </div>
                    </div>

                    @endforeach





                </div-->
@endsection