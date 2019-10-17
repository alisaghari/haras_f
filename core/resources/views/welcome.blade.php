@extends('site.master')
@section('content')

    <!-- Header Area End Here -->
    <!-- Slider Area Start Here -->
    <!--<div class="mg-t&#45;&#45;100">
        <div class="slides"><img src="{{url("websiteui")}}/img/slider/slide3-1.jpg" alt="slider" title="#slider-direction-2" /></div>
    </div>-->
    <div class="single-item-rtl" style="direction: rtl ; width: 100%">
        <div style=" width: 100%;height: 500px;background-image: url('{{url("websiteui")}}/img/slider/Slide07.jpg') ; background-size: cover">
            <div class="container" style="margin-top: 10%">
                <div class="row">

                </div>
            </div>
        </div>

    </div>

    <!-- <div id="slider-direction-2" class="t-cn slider-direction">
         <div class="slider-content s-tb slide-2">
             <div class="text-left title-container s-tb-c">
                 <div class="container">
                     <div class="slider-big-text text-light">هرس ، همیشه  راه سومی ...</div>
                     <div class="slider-paragraph text-light">هرس  با تکيه بر توان علمي و عملياتي خود با ايجاد شبکه اي قدرتمند با ناوبری کامل تحت وب تا کنون در خدمت بیش از 15000 نفر از اعضای خود در کشور عزیزمان بوده  و همچنان در حال گسترش و توسعه ارائه خدماتي متمايز است .سيستم پشتيباني با در اختيار داشتن ابزار و امکانات مدرن روز هميشه و همه جا در کنار شماست و افتخار ميزباني فعال ، همچون برگ زريني در تاريخ عملکرد ما ثبت گرديده است .</div>
                     &lt;!&ndash;<div class="slider-btn-area">
                         <a href="{{url("websiteui")}}/#" class="item-btn-accent">ثبت سفارش طراحی سایت
                             <i class="fas fa-arrow-circle-right"></i>
                         </a>
                     </div>&ndash;&gt;
                 </div>
             </div>
         </div>
     </div>
     <div id="slider-direction-3" class="t-cn slider-direction">
         <div class="slider-content s-tb slide-3">
             <div class="text-left title-container s-tb-c">

                 </a>
             </div>
         </div>
     </div>-->

    <!-- Slider Area End Here -->
    <!-- Service Area Start Here -->
    <section class="service-wrap-layout4" style="padding: 0px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box-layout6" style="background-image: url('{{url("websiteui")}}/img/representer.jpg');">
                        <div class="item-icon" style="height: 70px;"></div>
                        <div class="item-content">
                            <a href="#"
                               class="ghost-btn-2 text-white border-aqua"> نمایندگان<i class="fas fa-arrow-circle-right"></i>
                            </a>
                            <a href="{{url("/organ/login")}}" class="ghost-btn-2 text-white border-aqua">ورود نماینده<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box-layout6" style="background-image: url('{{url("websiteui")}}/img/holders.jpg');">
                        <div class="item-icon" style="height: 70px;"></div>
                        <div class="item-content">
                            <a href="{{url("user")}}"
                               class="ghost-btn-2 text-white border-aqua text-center" style="width: 100%;">
                                ورود اعضا<i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box-layout6" style="background-image: url('{{url("websiteui")}}/img/contractor.jpg');">
                        <div class="item-icon" style="height: 70px;"></div>
                        <div class="item-content">
                            <a href="{{url("doctors")}}" class="ghost-btn-2 text-white border-aqua"> پزشکان<i class="fas fa-arrow-circle-right"></i></a>
                            <a href="{{url("doctor/login")}}" class="ghost-btn-2 text-white border-aqua">ورود پزشکان<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .gradient-aqua {
            background: -webkit-gradient(linear, left top, left bottom, from(#001ea2), to(#b842fe));
            background: -webkit-linear-gradient(top, aqua, #b842fe);
            background: -o-linear-gradient(top, skyblue, #174daf);
            background: linear-gradient(to bottom, #b842fe, #174daf);
        }
    </style>
    <section class=""style="height: 150px; background-image: url({{url("websiteui/img/bgp.jpg")}}) ; background-size: cover; border-radius: 5px;
    box-shadow: 3px 3px 15px  #0c5460; margin-left: 20px;
    margin-right: 20px;margin-bottom: -4%;z-index: 2;position: relative;">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <div class="view-all-btn" style="padding: 35px;">
                        <div class="view-all-btn text-center">
                            <a href="{{url("organ/login")}}" class="item-title btn-fill gradient-aqua">درخواست غربال</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="view-all-btn" style="padding: 35px;">
                        <div class="view-all-btn text-center">
                            <a href="{{url("doctor/login")}}" class="item-title btn-fill gradient-aqua">ثبت نام پزشک</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="view-all-btn" style="padding: 35px;">
                        <div class="view-all-btn text-center">
                            <a href="{{url("user/login")}}" class="item-title btn-fill gradient-aqua">ثبت نام عمومی</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="view-all-btn" style="padding: 35px;">
                        <div class="view-all-btn text-center">
                            <a href="{{url("doctors")}}" class="item-title btn-fill gradient-aqua">رزرو پزشک</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- Service Area End Here -->
    <section  style="z-index: 1;" class="case-study-wrap-layout3 gradient-primary">
        <div class="container">
            <div class="heading-layout2">
                <h2>معرفی پزشکان برتر</h2>
            </div>
            <div class="row">
                @foreach($favDoctors as $favDoctor)
                    @if($favDoctor->favorite == 1)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="case-study-box-layout3">
                                <?php
                                $image = $favDoctor->documents()->where('type','profile_image')->get();
                                if (isset($image[0]->image)){
                                    $src = url('upload/document').'/'.$image[0]->image;
                                } else{
                                    $src= "#";
                                }
                                ?>
                                <div class="item-img"> <img src="{{url($src)}}" alt="Case Study"> </div>
                                <div class="item-content">
                                    <div class="item-subtitle">{{$favDoctor->field}}</div>
                                    <h3 class="item-title"><a href="{{url('rezerv_days'.'/'.$favDoctor->id)}}">{{$favDoctor->f_name}} {{ $favDoctor->l_name}}</a></h3>
                                </div>

                            </div>
                        </div>
                    @endif
                    @if($favDoctor->favorite == 2)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="case-study-box-layout3">
                                <?php
                                $image = $favDoctor->documents()->where('type','profile_image')->get();
                                if (isset($image[0]->image)){
                                    $src = url('upload/document').'/'.$image[0]->image;
                                } else{
                                    $src= "#";
                                }
                                ?>
                                <div class="item-img"> <img src="{{url($src)}}" alt="Case Study"> </div>
                                <div class="item-content">
                                    <div class="item-subtitle">{{$favDoctor->field}}</div>
                                    <h3 class="item-title"><a href="{{url('rezerv_days'.'/'.$favDoctor->id)}}">{{$favDoctor->f_name}} {{ $favDoctor->l_name}}</a></h3>
                                </div>

                            </div>
                        </div>
                    @endif
                    @if($favDoctor->favorite == 3)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="case-study-box-layout3">
                                <?php
                                $image = $favDoctor->documents()->where('type','profile_image')->get();
                                if (isset($image[0]->image)){
                                    $src = url('upload/document').'/'.$image[0]->image;
                                } else{
                                    $src= "#";
                                }
                                ?>
                                <div class="item-img"> <img src="{{url($src)}}" alt="Case Study"> </div>
                                <div class="item-content">
                                    <div class="item-subtitle">{{$favDoctor->field}}</div>
                                    <h3 class="item-title"><a href="{{url('rezerv_days'.'/'.$favDoctor->id)}}">{{$favDoctor->f_name}} {{ $favDoctor->l_name}}</a></h3>
                                </div>

                            </div>
                        </div>
                    @endif
                    @if($favDoctor->favorite == 4)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="case-study-box-layout3">
                                <?php
                                $image = $favDoctor->documents()->where('type','profile_image')->get();
                                if (isset($image[0]->image)){
                                    $src = url('upload/document').'/'.$image[0]->image;
                                } else{
                                    $src= "#";
                                }
                                ?>
                                <div class="item-img"> <img src="{{url($src)}}" alt="Case Study"> </div>
                                <div class="item-content">
                                    <div class="item-subtitle">{{$favDoctor->field}}</div>
                                    <h3 class="item-title"><a href="{{url('rezerv_days'.'/'.$favDoctor->id)}}">{{$favDoctor->f_name}} {{ $favDoctor->l_name}}</a></h3>
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="view-all-btn text-center mg-t-10">
                <a href="{{url("doctor/login")}}" class="btn-fill gradient-accent">ورود پزشکان<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="service-bottom-shape">
            <div class="svg-shape"> <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                         width="100%" height="100%" viewBox="0 0 1920.000000 364.000000"
                                         preserveAspectRatio="none">
                    <g transform="translate(0.000000,364.000000) scale(0.100000,-0.100000)"
                       fill="rgba(1, 31, 162, 0.50)" stroke="none">
                        <path d="M3080 3443 c-119 -20 -304 -84 -429 -147 -252 -126 -485 -294 -941
                        -677 -547 -459 -812 -863 -850 -1299 -16 -189 11 -342 89 -505 27 -55 108
                        -258 181 -451 l132 -351 262 -6 c143 -4 4179 -7 8969 -7 l8707 0 0 1400 c0
                        770 -3 1400 -6 1400 -3 0 -59 -14 -125 -30 -393 -99 -836 -292 -1269 -553 -63
                        -38 -245 -156 -405 -262 -320 -213 -508 -325 -720 -426 -796 -381 -1489 -405
                        -2148 -75 -323 162 -569 345 -1052 782 -518 468 -700 597 -941 666 -117 33
                        -289 31 -399 -5 -144 -48 -260 -125 -455 -302 -428 -390 -922 -679 -1481 -866
                        -1147 -383 -2443 -274 -3739 313 -300 136 -561 278 -924 505 -869 544 -1457
                        816 -1931 893 -146 24 -396 26 -525 3z"/>
                    </g>
                </svg> </div>
            <div class="svg-shape"> <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                         width="100%" height="100%" viewBox="0 0 1920.000000 364.000000"
                                         preserveAspectRatio="none">
                    <g transform="translate(0.000000,364.000000) scale(0.100000,-0.100000)"
                       fill="#0221a3" stroke="none">
                        <path d="M17960 3420 c-451 -76 -1035 -340 -1800 -815 -330 -205 -497 -303
                        -676 -399 -1063 -567 -2226 -815 -3245 -691 -901 110 -1705 473 -2349 1060
                        -195 177 -311 254 -455 302 -110 36 -282 38 -399 5 -241 -69 -423 -198 -941
                        -666 -483 -437 -729 -620 -1052 -782 -356 -178 -745 -256 -1113 -224 -423 36
                        -855 183 -1320 449 -80 46 -275 170 -435 276 -159 106 -342 224 -405 262 -616
                        371 -1210 586 -1769 643 -150 15 -446 12 -595 -5 -474 -56 -928 -248 -1318
                        -557 l-88 -70 0 -1104 0 -1104 9600 0 9600 0 0 1558 0 1558 -92 56 c-215 131
                        -438 220 -627 252 -129 22 -382 20 -521 -4z"/>
                    </g>
                </svg> </div>
        </div>
    </section>
    <!-- Service Area Start Here -->
    <!-- Service Area End Here -->
    <!-- Brand Area Start Here -->
    <section class="brand-wrap-layout2">
        <div class="container">
            <div class="heading-layout1">
                <h3> زیر مجموعه های هلدینگ هرس </h3>
            </div>
            <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="10" data-margin="0"
                 data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                 data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                 data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                 data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4"
                 data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true"
                 data-r-large-dots="false" data-r-extra-large="5" data-r-extra-large-nav="true"
                 data-r-extra-large-dots="false">
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/1.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/2.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/3.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/4.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/5.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/6.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/7.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/8.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Area End Here -->
    <!-- About Us Area Start Here -->
    <section class="about-wrap-layout2">
        <div class="container">
            <div class="row gutters-50">
                <div class="col-lg-7">
                    <div class="about-box-layout2">
                        <div class="item-img">
                            <img src="{{url("websiteui")}}/img/about/about8.jpg" alt="About">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-box-layout3">
                        <div class="item-subtitle"> Referral Marketing </div>
                        <h2 class="item-title"> بازاریابی ارجاعی </h2>
                        <p class=text-justify>
                            ریفرال مارکتینگ یا بازاریابی ارجاعی امروزه به دلیل افزایش فروش ، کاهش هزینه و دیگر موارد توانسته یکی
                            از شیوه های تاثیرگذار در بازاریابی باشد . امروزه اکثر افراد به توصیه ، پیشنهاد و نظرات افراد مشهور ،
                            آشنایان ، دوستان و نزدیکان قابل اعتماد خود بسیار توجه داشته و به معمولاً از فروشگاه هایی که این افراد به
                            آنان معرفی می کنند ، خرید خود را انجام می دهند که دلیل آن اطمینان بیشتر کاربران به پیام های دوستان
                            و نزدیکان نسبت به پیام های تبلیغاتی از خود مشاغل است .
                        </p>

                        <a href="#" class="ghost-btn-2 text-white border-aqua text-center" style="width: 70%;">
                            تماس با شرکت : 09422009091<i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section></div>
    <!-- About Us Area End Here -->
    <!-- Call To Action Start Here -->
<style>
    .gradient-primary {
        background: -webkit-gradient(linear, left top, left bottom, from(#4f0293), to(#174daf));
        background: -webkit-linear-gradient(top, #4f0293, #174daf);
        background: -o-linear-gradient(top, #4f0293, #174daf);
        background: linear-gradient(to bottom, #4f0293, #174daf);
    }
</style>
    <section class="action-wrap-layout1 bg-common case-study-wrap-layout3 gradient-primary" >
        <div class="container">
            <div class="heading-layout2">
                <h2>دریافت مشاوره رایگان</h2>
                <p>جهت دریافت مشاوره رایگان در زمینه تمامی خدمات قابل ارائه در سایت کافیست عدد ( 1 ) را به شماره زیر پیامک نمایید.</p>
            </div>
            <div class="action-box-layout1">
                <div class="view-all-btn text-center mg-t-10"> <a href="#" class="btn-fill gradient-accent">شماره : 09422009091<i class="fas fa-arrow-circle-right"></i></a> </div>
            </div>
            <br>

            <div class="row">

                <div class="col-lg-4">
                    <div class="pricing-box-layout3 question-box">
                        <h3 class="item-title"> قبل از خرید سوالاتی دارم </h3>
                        <hr>
                        <p>
                            در صورتی که تمایل به خرید و استفاده از امکانات هلدینگ هرس دارید و تنها نکاتی مجهول شما را تا به الان
                            از خرید بازداشته ، ابتدا میتوانید با ورود به بخش سوالات متداول پاسخ خود را بیابید و اما در صورتی که
                            آن بخش برای شما کافی نبود ، میتوانید سوال خود را در همین قسمت مطرح کرده و به پاسخ خود برسید .
                        </p>
                        <hr>
                        <a href="#" class="ghost-btn-2 border-aqua text-white">پرسش و پاسخ<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box-layout3 question-box">
                        <h3 class="item-title"> سوال پزشک </h3>
                        <hr>
                        <p>
                            این بخش مخصوص آن دسته از پزشکانی است که تمایل به ارائه ی خدمات از طریق سیستم هرس را دارند .
                            در صورتی که برای شروع همکاری سوالی دارید میتوانید سوال خود را در این بخش مطرح نموده و به
                            جواب برسید .
                            <br> <br> <br>
                        </p>
                        <hr>
                        <a href="#" class="ghost-btn-2 border-aqua text-white">پرسش و پاسخ<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box-layout3 question-box">
                        <h3 class="item-title"> سوالات متداول </h3>
                        <hr>
                        <p>
                            رایج ترین سوالات اعم از مزایای استفاده از امکانات هرس ، نحوه ی پرداخت ها ، نحوه کسر شدن مالیات
                            و دیگر سوالات را میتوانید در ابن بخش مشاهده نمایید ، در صورتی که با دیدن پرسش و پاسخ های این
                            بخش باز هم موضوعی برایتان نامفهوم ماند ، میتوانید آن را مطرح کنید .
                            <br> <br>
                        </p>
                        <hr>
                        <a href="{{url("normal_questions")}}" class="ghost-btn-2 border-aqua text-white">سوالات متداول<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
        </form>
</div>
</div>
</section>

<!--  <section class="testimonial-wrap-layout3">
      <div class="container">
          <div class="heading-layout4">
              <div class="item-subtitle">نظرات مشتریان </div>
          </div>
          <div class="rc-carousel dot-control-layout2" data-loop="true" data-items="10" data-margin="30"
              data-autoplay="true" data-autoplay-timeout="4000" data-smart-speed="700" data-dots="true"
              data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
              data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true"
              data-r-small="1" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2"
              data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false"
              data-r-large-dots="true" data-r-extra-large="2" data-r-extra-large-nav="false"
              data-r-extra-large-dots="true">
              <div class="testimonial-box-layout4">
                  <div class="item-paragraph">“ من نزدیک به سه سال میباشد که از خدمات و پشتیبانی آریا گستران بهره مند میباشم وبی اغراق میتوانم بگویم این شرکت بهترین خدمات را ارائه میدهد ”</div>
                  <div class="media media-none&#45;&#45;xs">
                      <div class="item-img">
                          <img src="{{url("websiteui")}}/img/testimonial/man.png" class="media-img-auto" alt="testimonial">
                      </div>
                      <div class="media-body space-md">
                          <h3 class="item-title">آقای طاهری</h3>
                          <div class="item-subtitle">مدیر عامل موسسه آموزشی کیسان</div>
                      </div>
                  </div>
              </div>
              <div class="testimonial-box-layout4">
                  <div class="item-paragraph">“  شرکت آریا گستران با کمترین هزینه بهترین خدمات را ارائه میدهد از اینکه با چنین شرکت توان مندی همکاری میکنم بسیار خرسند میباشم ”</div>
                  <div class="media media-none&#45;&#45;xs">
                      <div class="item-img">
                          <img src="{{url("websiteui")}}/img/testimonial/man.png" class="media-img-auto" alt="testimonial">
                      </div>
                      <div class="media-body space-md">
                          <h3 class="item-title">آقای عسگری</h3>
                          <div class="item-subtitle">مدیریت سایت دیجی ارزونی</div>
                      </div>
                  </div>
              </div>
              <div class="testimonial-box-layout4">
                  <div class="item-paragraph">“  بنده از خدمات هاستینگ آریا گستران به مدت 5 سال بهره مند میباشم و از خدمات پشتیبانی و سرعت سرور راضی میباشم  ”</div>
                  <div class="media media-none&#45;&#45;xs">
                      <div class="item-img">
                          <img src="{{url("websiteui")}}/img/testimonial/man.png" class="media-img-auto" alt="testimonial">
                      </div>
                      <div class="media-body space-md">
                          <h3 class="item-title">آقای احمد زاده</h3>
                          <div class="item-subtitle">مدیریت سایت لندر شاپ</div>
                      </div>
                  </div>
              </div>
              <div class="testimonial-box-layout4">
                  <div class="item-paragraph">“  شرکت آریا گستران یک شرکت مطمعن در زمنینه طراحی  و پشتیبانی سایت میباشد که تمامی مشکلات را میتواند در کمترین زمان ممکن برطرف نماید ”</div>
                  <div class="media media-none&#45;&#45;xs">
                      <div class="item-img">
                          <img src="{{url("websiteui")}}/img/testimonial/man.png" class="media-img-auto" alt="testimonial">
                      </div>
                      <div class="media-body space-md">
                          <h3 class="item-title">اقای مظلوهی</h3>
                          <div class="item-subtitle">مدیریت سایت نانو نیا</div>
                      </div>
                  </div>
              </div>
              <div class="testimonial-box-layout4">
                  <div class="item-paragraph">“  من نزدیک به سه سال میباشد که از خدمات و پشتیبانی آریا گستران بهره مند میباشم وبی اغراق میتوانم بگویم این شرکت بهترین خدمات را ارائه میدهد ”</div>
                  <div class="media media-none&#45;&#45;xs">
                      <div class="item-img">
                          <img src="{{url("websiteui")}}/img/testimonial/man.png" class="media-img-auto" alt="testimonial">
                      </div>
                      <div class="media-body space-md">
                          <h3 class="item-title">آقای طاهری</h3>
                          <div class="item-subtitle">مدیر عامل موسسه آموزشی کیسان</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>-->
<!-- Testimonial Area End Here -->
<!-- Pricing Area Start Here -->
<section class="pricing-wrap-layout3">
    <div class="container">
        <div class="heading-layout1">
            <h2>معرفی خدمات ها</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="pricing-box-layout3">
                    <h3 class="item-title"> خدمات پوست و مو </h3>
                    <hr>
                    <p>
                        خدمات ها تنها درمان هایی از پوست و مو را پوشش خواهند داد که جنبه ی ترمیمی دارند ، یعنی انجام چنین
                        درمانی به خاطر سلامت و در خطر بودن جان بیمار و مشکلات آن انجام می شود .
                        از آنجا که انجام عمل ها و انواع جراحی زیبایی پوست و مو همواره با هزینه های سنگینی انجام می شود و
                        خدمات درمانی نیز در مقایسه با این هزینه ها ، هزینه بسیار کمتری را دریافت می کند ، پوشش عمل های
                        زیبایی که همواره گران قیمت هستند را متقبل نخواهد شد .
                    </p>
                    <hr>
                    <a href="#" class="ghost-btn-2 border-aqua text-white">سفارش<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-box-layout3">
                    <h3 class="item-title">خدمات دندانپزشکی</h3>
                    <hr>
                    <p>
                        با توجه به تقاضای بالایی که برای تهیه خدمات نامه های دندانپزشکی وجود دارد، متاسفانه سود جویی‌های
                        بسیاری بابت این موضوع انجام گرفته که افراد سود جو با فروش کارت خدمات دندانپزشکی بدون پشتوانه
                        معتبر اقدام به دریافت حق خدمات از خدمات گذاران نموده اند و این موضوع مشکلات بسیاری را برای بیشتر
                        افراد ایجاد کرده.از این رو ارائه طرح های مختلف دندانپزشکی از سوی شرکت های خدمات مختلف به همراه خدمات درمان
                        تکمیلی انفرادی و گروهی انجام می شود.
                    </p>
                    <hr>
                    <a href="#" class="ghost-btn-2 border-aqua text-white">سفارش<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-box-layout3">
                    <h3 class="item-title">خدمات چشم پزشکی</h3>
                    <hr>
                    <p>
                        در خدمات تکمیلی اگر متقاضی، قبل از خرید خدمات بیماری خاصی داشته باشد، نمی‌تواند از پوشش خدمات‌ای
                        استفاده کند. به همین دلیل در خدمات تکمیلی چشم ، برای پوشش رفع عیوب انکساری لازم است شماره چشم
                        متقاضی خدمات صفر بوده و ضعیف نباشد. خدمات سامان برای خدمات کردن افرادی که چشمان ضعیفی دارند
                        انعطاف بیشتری به خرج می‌دهد. به این ترتیب اگر فرد درصد کمی ضعف چشم داشته باشد درصورت
                        تایید پزشک معتمد خدمات، می‌تواند از پوشش رفع عیوب انکساری بهره‌مند شود.
                    </p>
                    <hr>
                    <a href="#" class="ghost-btn-2 border-aqua text-white">سفارش<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-wrap-layout3">
    <div class="container">
        <div class="heading-layout1">
            <h2>مقالات سایت</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-box-layout4">
                    <div class="item-img">
                        <a href="#"><img src="{{url("websiteui")}}/img/blog/blog01.jpg" alt="blog"></a>
                    </div>
                    <div class="item-content">
                        <ul class="entry-meta">
                            <li><i class="fas fa-calendar-alt"></i>15 مهر 1398</li>
                            <li><i class="fas fa-user"></i>هلدینگ هرس</li>
                        </ul>
                        <h3 class="item-title"><a href="#">روانشناسی رفتار مصرف کننده در دوران رکود</a></h3>
                        <p class="text-justify">
                            شیوه بخش بندی بازار که قبل از رکود اقتصادی به کار می رفت، ناکارآمد است. بیشتر شرکت ها باید
                            دوباره به میان مردم رفته و با صحبت با مشتریان، نگرش بخش بندی را بازسازی کنند.
                        </p>
                        <a href="#" class="ghost-btn-2 border-aqau text-white">ادامه مطلب<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-box-layout4">
                    <div class="item-img">
                        <a href="#"><img src="{{url("websiteui")}}/img/blog/blog02.jpg" alt="blog"></a>
                    </div>
                    <div class="item-content">
                        <ul class="entry-meta">
                            <li><i class="fas fa-calendar-alt"></i>15 مهر 1398</li>
                            <li><i class="fas fa-user"></i>هلدینگ هرس</li>
                        </ul>
                        <h3 class="item-title"><a href="#">آینده شغلی و بازار کار مدیریت خدمات بهداشتی درمانی</a></h3>
                        <p class="text-justify">
                            آیا متقاضی رشته مدیریت خدمات بهداشتی درمانی هستید ؟
                            <br>
                            آیا می خواهید بدانید آینده شغلی و بازار کار رشته مدیریت خدمات بهداشتی درمانی به چه صورت است ؟
                        </p>
                        <a href="#" class="ghost-btn-2 border-aqua text-white">ادامه مطلب<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 d-block d-md-none d-lg-block">
                <div class="blog-box-layout4">
                    <div class="item-img">
                        <a href="#"><img src="{{url("websiteui")}}/img/blog/blog03.jpg" alt="blog"></a>
                    </div>
                    <div class="item-content">
                        <ul class="entry-meta">
                            <li><i class="fas fa-calendar-alt"></i>15 مهر 1398</li>
                            <li><i class="fas fa-user"></i>هلدینگ هرس</li>
                        </ul>
                        <h3 class="item-title"><a href="#">يک طرح بازاريابي ساده براي استارت آپ ها</a></h3>
                        <p class="text-justify">
                            يک طرح بازاريابي جزئيات مربوط به نحوه تعيين اهداف شرکت را مشخص مي‌کند. اين طرح فعاليت‌هاي
                            بازاريابي را با اهداف بازاريابي و استراتژي پيوند مي‌دهد و براي اطمينان از تمرکز و مسير درست شرکت
                            ضروري است.
                        </p>
                        <a href="#" class="ghost-btn-2 border-aqua text-white">ادامه مطلب<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End Here -->
<!-- Contact Info Area Start Here -->
@endsection