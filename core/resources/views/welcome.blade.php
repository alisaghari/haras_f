@extends('site.master')
@section('content')

    <!-- Header Area End Here -->
    <!-- Slider Area Start Here -->
    <!--<div class="mg-t&#45;&#45;100">
        <div class="slides"><img src="{{url("websiteui")}}/img/slider/slide3-1.jpg" alt="slider" title="#slider-direction-2" /></div>
    </div>-->
    <div class="single-item-rtl" style="direction: rtl ; width: 100%">
        @foreach($sliders as $slider)
        <div style=" width: 100%;height: 600px; background-size: cover;background-image: url('{{url("upload/slider")}}/{{$slider->image}}')">
            <div class="container" style="margin-top: 10%">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="item-title">{{$slider->title}}</h2>
                        <div class="slider-paragraph text-light">
                            {{$slider->desc}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    <style>
        .single-item-rtl {
            margin-top: 0px
        }
        .slick-prev {
            left: 25px;
            z-index: 9999;
        }
        .slick-next {

            right: 25px;
            z-index: 9999;
        }
    </style>
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
    <section class="service-wrap-layout4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box-layout6">
                        <div class="item-icon">
                            <img src="{{url("websiteui")}}/img/server.png">
                        </div>
                        <div class="item-content">
                            <a href="{{url("websiteui")}}/#" class="ghost-btn-2 text-accent border-accent">نمایندگان<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box-layout6">
                        <div class="item-icon">
                            <img src="{{url("websiteui")}}/img/coding.png">
                        </div>
                        <div class="item-content">
                            <a href="{{url("websiteui")}}/#" class="ghost-btn-2 text-accent border-accent">دارندگان<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box-layout6">
                        <div class="item-icon">
                            <img src="{{url("websiteui")}}/img/legal-document.png">
                        </div>
                        <div class="item-content">
                            <a href="{{url("websiteui")}}/#" class="ghost-btn-2 text-accent border-accent">طرف قرارداد<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  class="" style="background-color: white; border-radius: 5px;box-shadow: 3px 3px 15px  #0c5460; margin-left: 20px;margin-right: 20px;margin-bottom: -4%;z-index: 999;position: relative;">
        <div class="container">
            <div class="heading-layout2" style="padding-top: 10px">
                <p style="color: black;">لورم ایپسوم یک متن الکی است</p>
            </div>
            <div class="view-all-btn text-center" style="padding-bottom: 10px"> <a href="{{url("websiteui")}}/Portfolio.html" class="btn-fill gradient-accent">مشاهده <i class="fas fa-arrow-circle-right"></i></a> </div>
        </div>

    </section>
    <!-- Service Area End Here -->
    <section  style="z-index: 998;" class="case-study-wrap-layout3 gradient-primary">
        <div class="container">
            <div class="heading-layout2">
                <h2>نمونه کارها</h2>
                <p>پروژه های انجام شده توسط آریا گستران</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="case-study-box-layout3">
                        <div class="item-img"> <img src="{{url("websiteui")}}/img/Portfolio/ir.PNG" alt="Case Study"> </div>
                        <div class="item-content">
                            <div class="item-subtitle">گروه متخصصین ایران</div>
                            <h3 class="item-title"><a href="{{url("websiteui")}}/single-case-study1.html">سایت شرکتی</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="case-study-box-layout3">
                        <div class="item-img"> <img src="{{url("websiteui")}}/img/Portfolio/pd.PNG" alt="Case Study"> </div>
                        <div class="item-content">
                            <div class="item-subtitle">پشگامان پدیده دانش</div>
                            <h3 class="item-title"><a href="{{url("websiteui")}}/single-case-study1.html">موسسه آموزشی</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-block d-md-none d-lg-block">
                    <div class="case-study-box-layout3">
                        <div class="item-img"> <img src="{{url("websiteui")}}/img/Portfolio/ju.PNG" alt="Case Study"> </div>
                        <div class="item-content">
                            <div class="item-subtitle">جاست اسپیک</div>
                            <h3 class="item-title"><a href="{{url("websiteui")}}/single-case-study1.html">فروشگاه اینترنتی</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-btn text-center mg-t-10"> <a href="{{url("websiteui")}}/Portfolio.html" class="btn-fill gradient-accent">مشاهده بیشتر نمونه کارها<i class="fas fa-arrow-circle-right"></i></a> </div>
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
                <h3>برخی از مشتریان ما</h3>
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
                        <img src="{{url("websiteui")}}/img/brand/s1.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/sh1.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/a1.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/k1.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/p1.png" alt="brand">
                    </div>
                </div>
                <div class="brand-box-layout1">
                    <div class="item-img">
                        <img src="{{url("websiteui")}}/img/brand/ir1.png" alt="brand">
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
                            <img src="{{url("websiteui")}}/img/about/aboutus.png" alt="About">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-box-layout3">
                        <div class="item-subtitle">شرکت</div>
                        <h2 class="item-title">هرس کارت</h2>
                        <p>این مجموعه با نشان تجاري "هرس" در سال 1383 پا به عرصه وجود نهاد.
                            اينک مفتخر است با ايجاد چتر حمايتي در حیطه سلامت و شادابی ،با پرداخت يارانه جهت برخي از هزينه هاي مورد نياز هر خانواده ،ارائه دهنده خدماتی متمایز باشد، همچنين توانسته ايم ضمن عقد تفاهم نامه هايی با ارائه دهندگان کالا و خدمات در کشور ، زمينه بسيار مناسبي را جهت ارتقاي سطح سلامت اعضاي محترم خود فراهم آوريم.
                            هرس  با تکيه بر توان علمي و عملياتي خود با ايجاد شبکه اي قدرتمند با ناوبری کامل تحت وب تا کنون در خدمت بیش از 15000 نفر از اعضای خود در کشور عزیزمان بوده  و همچنان در حال گسترش و توسعه ارائه خدماتي متمايز است .سيستم پشتيباني با در اختيار داشتن ابزار و امکانات مدرن روز هميشه و همه جا در کنار شماست و افتخار ميزباني فعال ، همچون برگ زريني در تاريخ عملکرد ما ثبت گرديده است .</p>
                        <a href="{{url("websiteui")}}/#" class="ghost-btn-2 text-accent border-accent mg-t-20">تماس با شرکت : 38905556 - 051<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End Here -->
    <!-- Call To Action Start Here -->
    <section class="action-wrap-layout1 bg-common" data-bg-image="img/figure/seo-banner.jpg">
        <div class="container">
            <div class="heading-layout2">
                <h2>دریافت مشاوره رایگان</h2>
                <p>جهت دریافت مشاوره رایگان در زمینه تمامی خدمات قابل ارائه در سایت کافیست عدد ( 1 ) را به شماره زیر پیامک نمایید.</p>
            </div>
            <div class="action-box-layout1">
                <div class="view-all-btn text-center mg-t-10"> <a href="{{url("websiteui")}}/tel:+989152503502" class="btn-fill gradient-accent">شماره : 09152503502<i class="fas fa-arrow-circle-right"></i></a> </div>

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
            <h2>تخفیف های برتر</h2>
            <p>بهترین تخفیف های سایت را اینجا مشاهده نمایید</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="pricing-box-layout3">
                    <h3 class="item-title">هاست 3گیگ</h3>
                    <div class="item-subtitle">دایرکت ادمین</div>
                    <div class="item-price">
                        <span class="currency">تومان</span>
                        <span class="price">150.000</span>
                        <span class="duration">/سالانه</span>
                    </div>
                    <ul class="item-features">
                        <li>فضای هاست 3گیگ</li>
                        <li>پهنای باند نامحدود</li>
                        <li>ترافیک ماهانه نامحدود</li>
                        <li>نوع هارد nvme</li>
                        <li>کنترل پنل داریرکت ادمین</li>
                    </ul>
                    <a href="{{url("websiteui")}}/#" class="ghost-btn-1 border-accent text-accent">خرید طرح<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pricing-box-layout3">
                    <h3 class="item-title">پک وردپرس</h3>
                    <div class="item-subtitle">پک پنج منظوره وردپرس</div>
                    <div class="item-price">
                        <span class="currency">تومان</span>
                        <span class="price">350.000</span>
                        <span class="duration"></span>
                    </div>
                    <ul class="item-features">
                        <li>امنیت کامل وردپرس</li>
                        <li>نصب افزونه های پرمیوم</li>
                        <li>بهینه سازی کد های سایت</li>
                        <li>نصب درگاه های بانکی</li>
                        <li>باگ گیری سایت</li>
                    </ul>
                    <a href="{{url("websiteui")}}/#" class="ghost-btn-1 border-accent text-accent">خرید طرح<i class="fas fa-arrow-circle-right"></i></a>
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
        @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-box-layout4">
                    <div class="item-img">
                        <a href="{{url("websiteui")}}/single-blog1.html"><img src="{{url("upload/blog")}}/{{$blog->image}}" alt="blog"></a>
                    </div>
                    <div class="item-content">
                        <ul class="entry-meta">
                            <li><i class="fas fa-calendar-alt"></i>28 تیر 1398</li>
                            <li><i class="fas fa-user"></i>آریا گستران</li>
                        </ul>
                        <h3 class="item-title"><a href="{{url("websiteui")}}/single-blog1.html">{{$blog->title}}</a></h3>
                        <p>{{$blog->desc}}</p>
                        <a href="{{url("websiteui")}}/single-blog1.html" class="ghost-btn-2 border-accent text-accent">ادامه مطلب<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Blog Area End Here -->
<!-- Contact Info Area Start Here -->
@endsection