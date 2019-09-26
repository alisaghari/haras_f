<!doctype html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Hogo– Creative Admin Multipurpose Responsive Bootstrap4 Dashboard HTML Template" name="description">
    <meta content="تکنولوژی میدیا سافت Private Limited" name="author">
    <meta name="keywords" content="html admin template, bootstrap admin template premium, premium responsive admin template, admin dashboard template bootstrap, bootstrap simple admin template premium, web admin template, bootstrap admin template, premium admin template html5, best bootstrap admin template, premium admin panel template, admin template"/>

    <!-- Favicon -->
    <link rel="icon" href="{{url("/adminui")}}/assets/images/brand/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{url("/adminui")}}/assets/images/brand/favicon.ico" />
    <!-- Title -->
    <title>هوگو - پوسته چند منظوره پنل مدیریتی بوت استرپ</title>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{url("/adminui")}}/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Dashboard css -->
    <link href="{{url("/adminui")}}/assets/css-dark/style.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{url("/adminui")}}/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Horizontal-menu css -->
    <link href="{{url("/adminui")}}/assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="{{url("/adminui")}}/assets/plugins/horizontal-menu/dark-horizontalmenu.css" rel="stylesheet">

    <!--Daterangepicker css-->
    <link href="{{url("/adminui")}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- Rightsidebar css -->
    <link href="{{url("/adminui")}}/assets/plugins/sidebar/dark-sidebar.css" rel="stylesheet">

    <!-- Sidebar Accordions css -->
    <link href="{{url("/adminui")}}/assets/plugins/accordion1/css/dark-easy-responsive-tabs.css" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{url("/adminui")}}/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <!-- Morris  Charts css-->
    <link href="{{url("/adminui")}}/assets/plugins/morris/morris.css" rel="stylesheet" />

    <!---Font icons css-->
    <link href="{{url("/adminui")}}/assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
    <link href="{{url("/adminui")}}/assets/plugins/iconfonts/icons.css" rel="stylesheet" />
    <link  href="{{url("/adminui")}}/assets/fonts/fonts/font-awesome.min.css" rel="stylesheet">


    <link  href="{{url("/adminui")}}/assets/rtl.css" rel="stylesheet">
@yield("header")
</head>

@yield("header")
<body class="app sidebar-mini rtl">
<style>
    .horizontalMenu>.horizontalMenu-list>li>a {
        display: block;
        padding: 23px 5px !important;
        text-decoration: none;
        position: relative;
        margin: 0 1px;
        color: #d3d8e2;
    }
</style>
<!--Global-Loader-->
<div id="global-loader">
    <img src="{{url("/adminui")}}/assets/images/icons/loader.svg" alt="loader">
</div>

<div class="page">
    <div class="page-main">
        <!--app-header-->
        <div class="app-header header hor-topheader d-flex">
            <div class="container" style="max-width: 100% !important;">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img src="{{url("/adminui")}}/assets/images/brand/logo1.png" class="header-brand-img main-logo" alt="Hogo logo">
                        <img src="{{url("/adminui")}}/assets/images/brand/icon.png" class="header-brand-img icon-logo" alt="Hogo logo">
                    </a><!-- logo-->
                    <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
                    <a href="#" data-toggle="search" class="nav-link nav-link  navsearch"><i class="fa fa-search"></i></a><!-- search icon -->
                    <div class="header-form">
                        <form class="form-inline">
                            <div class="search-element mr-3">
                                <input class="form-control" type="search" placeholder="جستجو کنید" aria-label="Search">
                                <span class="Search-icon"><i class="fa fa-search"></i></span>
                            </div>
                        </form><!-- search-bar -->
                    </div>

                    <div class="d-flex order-lg-2 ml-auto header-rightmenu" style="margin-left:0px !important;">
                        <div class="dropdown">
                            <a  class="nav-link icon full-screen-link" id="fullscreen-button">
                                <i class="fe fe-maximize-2"></i>
                            </a>
                        </div><!-- full-screen -->
                        <div class="dropdown header-notify">
                            <a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-bell "></i>
                                <span class="pulse bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                <a href="#" class="dropdown-item text-center">4 اطلاعیه جدید</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg bg-green">
                                        <i class="fe fe-mail"></i>
                                    </div>
                                    <div>
                                        <strong> پیام ارسال شد. </strong>
                                        <div class="small text-muted"> 12 دقیقه پیش </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg bg-pink">
                                        <i class="fe fe-shopping-cart"></i>
                                    </div>
                                    <div>
                                        <strong> سفارش قرار داده شده </strong>
                                        <div class="small text-muted">2  ساعت پیش </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg bg-blue">
                                        <i class="fe fe-calendar"></i>
                                    </div>
                                    <div>
                                        <strong> رویداد آغاز شده </strong>
                                        <div class="small text-muted">1  ساعت پیش </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg bg-orange">
                                        <i class="fe fe-monitor"></i>
                                    </div>
                                    <div>
                                        <strong>راه اندازی مدیریت خود </strong>
                                        <div class="small text-muted">2  روز قبل </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">مشاهده تمام اعلان ها</a>
                            </div>
                        </div><!-- notifications -->
                        <div class="dropdown header-user">
                            <a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
										<span class="mr-3 d-none d-lg-block ">
											<span class="text-gray-white"><span class="ml-2"> آلیسون </span></span>
										</span>
                                <span class="avatar avatar-md brround"><img src="{{url("/adminui")}}/assets/images/users/female/33.png" alt="Profile-img" class="avatar avatar-md brround"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="header-user text-center mt-4 pb-4">
                                    <span class="avatar avatar-xxl brround"><img src="{{url("/adminui")}}/assets/images/users/female/33.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
                                    <a href="#" class="dropdown-item text-center font-weight-semibold user h3 mb-0"> آلیسون </a>
                                    <small> طراح وب </small>
                                </div>

                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline "></i> تکنولوژی میدیا سافت
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon  mdi mdi-account-plus"></i> افزودن یک حساب دیگر
                                </a>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
                                            <div> صندوق ورودی </div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
                                            <div> خــروج </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- profile -->
                        <div class="dropdown">
                            <a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="fe fe-more-horizontal"></i>
                            </a>
                        </div><!-- Right-siebar-->
                    </div>
                </div>
            </div>
        </div>
        <!--app-header end-->

        <!-- Horizontal-menu -->
        <div class="horizontal-main hor-menu clearfix">
            <div class="horizontal-mainwrapper container clearfix" style="max-width: 100% !important;">
                <nav class="horizontalMenu clearfix">
                    <ul class="horizontalMenu-list">
                        <li aria-haspopup="true"><a href="widgets.html" class="active"><i class="typcn typcn-device-desktop hor-icon"></i> پیشخوان </a></li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-people"></i> کاربران  <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href=" {{url("admin/users")}}"> مشاهده </a></li>
                                <li aria-haspopup="true"><a href="{{url("admin/user")}}"> افزودن </a></li>
                                <li aria-haspopup="true"><a href="chat.html"> تحلیل ها </a></li>
                                <li aria-haspopup="true"><a href="notify.html"> ثبت نام های جدید </a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-people"></i> نمایندگان  <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="cards.html"> مشاهده </a></li>
                                <li aria-haspopup="true"><a href="cards-image.html"> افزودن </a></li>
                                <li aria-haspopup="true"><a href="chat.html"> تحلیل ها </a></li>
                                <li aria-haspopup="true"><a href="notify.html"> ثبت نام های جدید </a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="widgets.html" ><i class="typcn typcn-device-desktop hor-icon"></i> فرم ها </a></li>
                        <li aria-haspopup="true"><a href="widgets.html" ><i class="typcn typcn-device-desktop hor-icon"></i> تیکت ها </a></li>
                        <li aria-haspopup="true"><a href="widgets.html" ><i class="typcn typcn-device-desktop hor-icon"></i> خروجی سفارش ها  </a></li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-people"></i> بازاریابی  <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="cards.html"> مشاهده </a></li>
                                <li aria-haspopup="true"><a href="cards-image.html"> افزودن </a></li>
                                <li aria-haspopup="true"><a href="chat.html">تایید شود </a></li>
                                <li aria-haspopup="true"><a href="chat.html"> تحلیل ها </a></li>
                                <li aria-haspopup="true"><a href="notify.html">درخواست های تسویه </a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-people"></i> پکیج  <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="cards.html"> مشاهده </a></li>
                                <li aria-haspopup="true"><a href="cards-image.html"> افزودن </a></li>
                                <li aria-haspopup="true"><a href="chat.html"> تحلیل ها </a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-people"></i> سایت نمایندگی ها  <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="cards.html"> مشاهده </a></li>
                                <li aria-haspopup="true"><a href="cards-image.html"> افزودن </a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="{{url("admin/carts")}}" ><i class="typcn typcn-device-desktop hor-icon"></i> وضعیت کارت ها </a></li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="si si-people"></i> تنظیمات وبسایت  <i class="fa fa-angle-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{url("admin/slider")}}"> مدیریت اسلایدر </a></li>
                                <li aria-haspopup="true"><a> مدیریت بلاگ </a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="{{url("admin/blog/category")}}"> مدیریت دسته بندی </a></li>
                                        <li aria-haspopup="true"><a href="{{url("admin/blogs")}}"> مدیریت بلاگ </a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="{{url("admin/register")}}"><i class="typcn typcn-device-desktop hor-icon"></i> ایجاد مدیر جدید  </a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!--Nav end -->
            </div>
        </div>
        <!-- Horizontal-menu end -->

        <!--Header submenu -->
        <div class="bg-white p-3 header-secondary header-submenu">
            <div class="container " style="max-width: 100% !important;">
                <div class="row">
                    <div class="col">
                        <div class="d-flex">
                            <a class="btn btn-danger" href="#"><i class="fe fe-rotate-cw mr-1 mt-1"></i> ارتقاء </a>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <a class="btn btn-light mt-4 mt-sm-0" href="#"><i class="fe fe-help-circle mr-1 mt-1"></i> پشتیبانی </a>
                        <a class="btn btn-success mt-4 mt-sm-0" href="#"><i class="fe fe-plus mr-1 mt-1"></i> افزودن جدید </a>
                    </div>
                </div>
            </div>
        </div><!--End Header submenu -->

        <!-- app-content-->
        <div class="container content-area" style="max-width: 100% !important;">
            <div class="side-app">

                <!-- page-header -->

                <!-- End page-header -->

@yield("content")

            </div><!--End side app-->

            <!-- Right-sidebar-->
            <div class="sidebar sidebar-right sidebar-animate">
                <div class="tab-menu-heading siderbar-tabs border-0">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#tab"  class="active" data-toggle="tab"> پروفایل </a></li>
                            <li class=""><a href="#tab1" data-toggle="tab"> چت </a></li>
                            <li><a href="#tab2" data-toggle="tab"> فعالیت </a></li>
                            <li><a href="#tab3" data-toggle="tab"> کار برای انجام</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
                    <div class="tab-content border-top">
                        <div class="tab-pane active " id="tab">
                            <div class="card-body p-0">
                                <div class="header-user text-center mt-4 pb-4">
                                    <span class="avatar avatar-xxl brround"><img src="{{url("/adminui")}}/assets/images/users/female/33.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
                                    <div class="dropdown-item text-center font-weight-semibold user h3 mb-0"> آلیسون </div>
                                    <small> طراح وب </small>
                                    <div class="card-body">
                                        <div class="form-group ">
                                            <label class="form-label  text-left">آفلاین / آنلاین</label>
                                            <select class="form-control select2 " data-placeholder = "یکی انتخاب کن">
                                                <option label="Choose one">
                                                </option>
                                                <option value="1"> آنلاین </option>
                                                <option value="2"> آفلاین </option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label class="form-label text-left"> وب سایت </label>
                                            <select class="form-control select2 " data-placeholder = "یکی انتخاب کن">
                                                <option label="Choose one">
                                                </option>
                                                <option value="1">Spruko.com</option>
                                                <option value="2">sprukosoft.com</option>
                                                <option value="3">sprukotechnologies.com</option>
                                                <option value="4">sprukoinfo.com</option>
                                                <option value="5">sprukotech.com</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item  border-top" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline "></i> تکنولوژی میدیا سافت
                                </a>
                                <a class="dropdown-item border-top" href="#">
                                    <i class="dropdown-icon  mdi mdi-account-plus"></i> افزودن یک حساب دیگر
                                </a>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
                                            <div> صندوق ورودی </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
                                            <div> تنظیمات </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
                                            <div> خــروج </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab1">
                            <div class="chat">
                                <div class="contacts_card">
                                    <div class="input-group p-3">
                                        <input type="text" placeholder="Search..." class="form-control search">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text search_btn  "><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                    <ul class="contacts mb-0">
                                        <li class="active">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/male/3.jpg" class="rounded-circle user_img" alt="img">
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">مریم ناز</h6>
                                                    <small class="text-muted">مریم آنلاین است</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-1398</small></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/female/1.jpg" class="rounded-circle user_img" alt="img">

                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">سحر دریا</h6>
                                                    <small class="text-muted">سحر 7 دقیقه پیش ترک کرد</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-1398</small></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/female/9.jpg" class="rounded-circle user_img" alt="img">
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">مریم ناز</h6>
                                                    <small class="text-muted">مریم آنلاین است</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-1398</small></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/female/12.jpg" class="rounded-circle user_img" alt="img">

                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">یولدوز رفیع</h6>
                                                    <small class="text-muted">یولدوز آنلاین است</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-1398</small></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/male/15.jpg" class="rounded-circle user_img" alt="img">
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">نرگس هاوا</h6>
                                                    <small class="text-muted">نرگس 30 دقیقه پیش ترک کرد</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-1398</small></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/male/17.jpg" class="rounded-circle user_img" alt="img">
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">خدیجه مهر</h6>
                                                    <small class="text-muted">خدیجه 50 دقیقه پیش ترک کرد</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-1398</small></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{url("/adminui")}}/assets/images/users/female/18.jpg" class="rounded-circle user_img" alt="img">

                                                </div>
                                                <div class="user_info">
                                                    <h6 class="mt-1 mb-0 ">خدیجه مهر</h6>
                                                    <small class="text-muted">خدیجه 50 دقیقه پیش ترک کرد</small>
                                                </div>
                                                <div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-1398</small></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " id="tab2">
                            <div class="list d-flex align-items-center border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-primary brround avatar-md">CH</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>وب سایت جدید ایجاد شده است</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">30 دقیقه پیش </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-danger brround avatar-md">N</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>آماده شدن برای پروژه بعدی</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">2 ساعت پیش </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-info brround avatar-md">S</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>زمان بحث زنده را تعیین کنید</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">3 ساعت پیش </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-warning brround avatar-md">K</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>دیدار تیم در روز سه شنبه در ساعت 3 صبح</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">4 ساعت پیش </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-success brround avatar-md">R</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>آماده شدن برای ارائه</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">1 روز قبل </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center  border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-pink brround avatar-md">MS</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>آماده شدن برای ارائه</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">1 روز قبل </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-4">
                                <div class="">
                                    <span class="avatar bg-purple brround avatar-md">L</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>آماده شدن برای ارائه</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">45 دقیقه پیش </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list d-flex align-items-center p-4">
                                <div class="">
                                    <span class="avatar bg-blue brround avatar-md">U</span>
                                </div>
                                <div class="wrapper w-100 ml-3">
                                    <p class="mb-0 d-flex">
                                        <b>آماده شدن برای ارائه</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted mr-1"></i>
                                            <small class="text-muted ml-auto">2 روز قبل </small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <div class="">
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                        <span class="custom-control-label">حتی بیشتر..</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
                                        <span class="custom-control-label">ایده ای پیدا کنید.</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
                                        <span class="custom-control-label">Hangout با دوستان</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" >
                                        <span class="custom-control-label">چیز دیگری را انجام دهید</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" >
                                        <span class="custom-control-label">سالم خوردن، غذا خوردن تازه ..</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
                                        <span class="custom-control-label">چیزی بیشتر را پایان دهید..</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
                                        <span class="custom-control-label"> چیزی بیشتر را انجام دهید </span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" >
                                        <span class="custom-control-label"> بروز رسانی فایل های بیشتر </span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" >
                                        <span class="custom-control-label"> سیستم به روز شده </span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="d-flex p-3 border-top border-bottom">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10" >
                                        <span class="custom-control-label">تغییر تنظیمات ...</span>
                                    </label>
                                    <span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
                                </div>
                                <div class="text-center pt-5">
                                    <a href="#" class="btn btn-primary btn-pill"> ارتقاء بیشتر </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Rightsidebar-->

            <!--footer-->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-12 col-sm-12   text-center">
                            کپی رایت © 2019 <a href="#" style="direction: rtl">  </a> . طراحی شده توسط <a href="https://www.spruko.com/"> شرکت آریا گستران </a> همه حقوق محفوظ است.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer-->

        </div>
        <!-- End app-content-->
    </div>
</div>
<!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Jquery js-->
<script src="{{url("/adminui")}}/assets/js-dark/vendors/jquery-3.2.1.min.js"></script>

<!--Bootstrap.min js-->
<script src="{{url("/adminui")}}/assets/plugins/bootstrap/popper.min.js"></script>
<script src="{{url("/adminui")}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Jquery Sparkline js-->
<script src="{{url("/adminui")}}/assets/js-dark/vendors/jquery.sparkline.min.js"></script>

<!-- Chart Circle js-->
<script src="{{url("/adminui")}}/assets/js-dark/vendors/circle-progress.min.js"></script>

<!-- Star Rating js-->
<script src="{{url("/adminui")}}/assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Moment js-->
<script src="{{url("/adminui")}}/assets/plugins/moment/moment.min.js"></script>

<!-- Daterangepicker js-->
<script src="{{url("/adminui")}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Horizontal-menu js -->
<script src="{{url("/adminui")}}/assets/plugins/horizontal-menu/horizontalmenu.js"></script>

<!-- Sidebar Accordions js -->
<script src="{{url("/adminui")}}/assets/plugins/accordion1/js/easyResponsiveTabs.js"></script>

<!-- Custom scroll bar js-->
<script src="{{url("/adminui")}}/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Owl Carousel js -->
<script src="{{url("/adminui")}}/assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="{{url("/adminui")}}/assets/plugins/owl-carousel/owl-main.js"></script>

<!-- Rightsidebar js -->
<script src="{{url("/adminui")}}/assets/plugins/sidebar/sidebar.js"></script>

<!-- Charts js-->
<script src="{{url("/adminui")}}/assets/plugins/chart/chart.bundle-dark.js"></script>
<script src="{{url("/adminui")}}/assets/plugins/chart/utils.js"></script>

<!--Time Counter js-->
<script src="{{url("/adminui")}}/assets/plugins/counters/jquery.missofis-countdown.js"></script>
<script src="{{url("/adminui")}}/assets/plugins/counters/counter.js"></script>

<!--Morris  Charts js-->
<script src="{{url("/adminui")}}/assets/plugins/morris/raphael-min.js"></script>
<script src="{{url("/adminui")}}/assets/plugins/morris/morris.js"></script>

<!-- Custom-charts js-->
<script src="{{url("/adminui")}}/assets/js-dark/index1.js"></script>

<!-- Custom js-->
<script src="{{url("/adminui")}}/assets/js-dark/custom.js"></script>
@yield("footer")
</body>
</html>