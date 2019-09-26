<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Barat Hadian">
    <title>داشبورد تجزیه و تحلیل - قالب مدیریتی آفتاب پرست - بوت استرپ 4 برنامه وب مدرن و پوسته استاتیک داشبورد + کیت رابط کاربری</title>
    <link rel="apple-touch-icon" href="{{ url("userui") }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("userui") }}/app-assets/images/ico/favicon.ico">
    <link href='{{ url("userui") }}/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/pages/gap-application.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

                    <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown">
                            برنامه ها</a>
                        <div class="dropdown-menu">
                            <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i class="ft-user"></i> ایمیل</a><a class="dropdown-item" href="gap-application.html"><i class="ft-mail"></i> چت</a><a class="dropdown-item" href="project-summary.html"><i class="ft-briefcase"></i> خلاصه ی پروژه            </a><a class="dropdown-item" href="full-calender.html"><i class="ft-calendar"></i> تقویم            </a></div>
                        </div>
                    </li>

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-up badge-glow">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">اطلاعیه</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-share info font-medium-4 mt-2"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading info">سفارش جدید دریافت شده</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است!</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:30 صبح</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-save font-medium-4 mt-2 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading warning">کاربر جدید ثبت شده است</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10:05 عصر</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-repeat font-medium-4 mt-2 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading danger">خرید جدید</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">دیروز</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-shopping-cart font-medium-4 mt-2 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading primary">مورد جدید در سبد خرید شما</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">هفته گذشته</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-heart font-medium-4 mt-2 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading info">فروش جدید</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">ماه گذشته</time></small>
                                            </div>
                                        </div></a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item info text-right pr-1" href="javascript:void(0)">خواندن همه</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">پیام ها</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{ url("userui") }}/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">سارا مونتری<i class="ft-circle font-small-2 success float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">همه چیز خوب است من ارائه خواهم داد...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:55 صبح</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><span class="media-object rounded-circle text-circle bg-warning">E</span></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">الیزا الیوت<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">باشه. در اینجا برخی از جزئیات بیشتر است...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">2:10 عصر</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{ url("userui") }}/app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">کلی رییس<i class="ft-circle font-small-2 warning float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">یک بار چک کنید و به من اطلاع دهید...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">دیروز</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{ url("userui") }}/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">تونی دیپ<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">ما شروع به توسعه پروژه جدید خواهیم کرد...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">جمعه</time></small>
                                            </div>
                                        </div></a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-right info pr-1" href="javascript:void(0)">خواندن همه</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="{{ url("userui") }}/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{ url("userui") }}/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">برات هادیان</span></span></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> ویرایش مشخصات</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> صندوق ورودی من</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> وظیفه</a><a class="dropdown-item" href="gap-application.html"><i class="ft-message-square"></i> نمودار</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="ft-power"></i> خروج</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{ url("userui") }}/app-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="{{ url("userui") }}/app-assets/images/logo/logo.png"/>
                    <h3 class="brand-text">آفتاب پرست</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{url("user")}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">پیشخوان</span></a></li>
            <li class=" nav-item"><a href="{{url("/user/cart")}}"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">مشاهده کارت ها </span></a></li>
            <li class=" nav-item"><a href="{{url("user/service")}}"><i class="ft-shopping-cart"></i><span class="menu-title" data-i18n="">خرید سرویس جدید </span></a></li>
            <li class=" nav-item"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i18n="">ارتباط با پشتیبان</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="email-application.html">ارسال درخواست پشتیبانی </a>
                    </li>
                    <li><a class="menu-item" href="gap-application.html">مشاهده درخواست های پشتیبانی</a>
                    </li>
                    <li><a class="menu-item" href="full-calender.html">شماره تماس ها</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-layers">$</i><span class="menu-title" data-i18n="">امور مالی </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="email-application.html">مشاهده فاکتور ها </a>
                    </li>
                    <li><a class="menu-item" href="gap-application.html">فاکتور های پرداخت شده</a>
                    </li>
                    <li><a class="menu-item" href="full-calender.html">فاکتور های پرداخت نشده</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="index.html"><i class="ft-credit-card">+</i><span class="menu-title" data-i18n="">افزایش اعتبار حساب</span></a></li>
            <li class=" nav-item"><a href="index.html"><i class="ft-refresh-ccw"></i><span class="menu-title" data-i18n="">تمدید کارت ها</span></a></li>
            <li class=" nav-item"><a href="index.html"><i class="ft-corner-left-up"></i><span class="menu-title" data-i18n="">بازاریاب شدن</span></a></li>




        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    @yield("content")
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-primary box-shadow-3" href="#" id="customizer-toggle-setting"><i class="ft-settings font-medium-3 spinner white"></i></a><div class="customizer-content p-2">
        <h5 class="mt-1 mb-1 text-bold-500">تنظیمات رنگ ناوبری</h5>
        <div class="navbar-color-options clearfix">
            <div class="gradient-colors mb-1 clearfix">
                <div class="bg-gradient-x-purple-blue navbar-color-option" data-bg="bg-gradient-x-purple-blue" title="bg-gradient-x-purple-blue"></div>
                <div class="bg-gradient-x-purple-red navbar-color-option" data-bg="bg-gradient-x-purple-red" title="bg-gradient-x-purple-red"></div>
                <div class="bg-gradient-x-blue-green navbar-color-option" data-bg="bg-gradient-x-blue-green" title="bg-gradient-x-blue-green"></div>
                <div class="bg-gradient-x-orange-yellow navbar-color-option" data-bg="bg-gradient-x-orange-yellow" title="bg-gradient-x-orange-yellow"></div>
                <div class="bg-gradient-x-blue-cyan navbar-color-option" data-bg="bg-gradient-x-blue-cyan" title="bg-gradient-x-blue-cyan"></div>
                <div class="bg-gradient-x-red-pink navbar-color-option" data-bg="bg-gradient-x-red-pink" title="bg-gradient-x-red-pink"></div>
            </div>
            <div class="solid-colors clearfix">
                <div class="bg-primary navbar-color-option" data-bg="bg-primary" title="اولیه"></div>
                <div class="bg-success navbar-color-option" data-bg="bg-success" title="موفقیت"></div>
                <div class="bg-info navbar-color-option" data-bg="bg-info" title="اطلاعات"></div>
                <div class="bg-warning navbar-color-option" data-bg="bg-warning" title="هشدار"></div>
                <div class="bg-danger navbar-color-option" data-bg="bg-danger" title="خطر"></div>
                <div class="bg-blue navbar-color-option" data-bg="bg-blue" title="آبی"></div>
            </div>
        </div>

        <hr>


        <h5 class="mt-1 mb-1 text-bold-500">پس زمینه منوی نوار کناری</h5>
        <!-- <div class="sidebar-color-options clearfix">
            <div class="bg-black sidebar-color-option" data-sidebar="menu-dark" title="مشکی"></div>
            <div class="bg-white sidebar-color-option" data-sidebar="menu-light" title="سفید"></div>
        </div> -->
        <div class="row sidebar-color-options ml-0">
            <label for="sidebar-color-option" class="card-title font-medium-2 mr-2">حالت سفید</label>
            <div class="text-center mb-1">
                <input type="checkbox" id="sidebar-color-option" class="switchery" data-size="xs"/>
            </div>
            <label for="sidebar-color-option" class="card-title font-medium-2 ml-2">حالت تاریک</label>
        </div>

        <hr>

        <label for="collapsed-sidebar" class="font-medium-2">سقوط منو</label>
        <div class="float-right">
            <input type="checkbox" id="collapsed-sidebar" class="switchery" data-size="xs"/>
        </div>

        <hr>

        <!--Sidebar Background Image Starts-->
        <h5 class="mt-1 mb-1 text-bold-500">تصویر پس زمینه نوار کناری</h5>
        <div class="cz-bg-image row">
            <div class="col mb-3">
                <img src="{{ url("userui") }}/app-assets/images/backgrounds/04.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
            <div class="col mb-3">
                <img src="{{ url("userui") }}/app-assets/images/backgrounds/01.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
            <div class="col mb-3">
                <img src="{{ url("userui") }}/app-assets/images/backgrounds/02.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
            <div class="col mb-3">
                <img src="{{ url("userui") }}/app-assets/images/backgrounds/05.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
        </div>
        <!--Sidebar Background Image Ends-->

        <!--Sidebar BG Image Toggle Starts-->
        <div class="sidebar-image-visibility">
            <div class="row ml-0">
                <label for="toggle-sidebar-bg-img" class="card-title font-medium-2 mr-2">مخفی کردن تصویر</label>
                <div class="text-center mb-1">
                    <input type="checkbox" id="toggle-sidebar-bg-img" class="switchery" data-size="xs" checked/>
                </div>
                <label for="toggle-sidebar-bg-img" class="card-title font-medium-2 ml-2">نمایش تصویر</label>
            </div>
        </div>
        <!--Sidebar BG Image Toggle Ends-->

        <hr>
    </div>
</div>
<!-- End: Customizer-->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  &copy; کپی رایت: تمامی حقوق این قالب محفوظ است. طراحی و توسعه توسط <a class="text-bold-800 grey darken-2" href="https://www.rtl-theme.com/author/barat/" target="_blank">Barat Hadian</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="https://www.rtl-theme.com/author/barat/" target="_blank"> قالب های بیشتر</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://www.rtl-theme.com/user-profile/barat/" target="_blank"> پشتیبانی</a></li>
        </ul>
    </div>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ url("userui") }}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url("userui") }}/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url("userui") }}/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/js/core/app.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url("userui") }}/app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>
<!-- END: Page JS-->
@yield("footer")
</body>
<!-- END: Body-->
</html>