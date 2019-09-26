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
    <link href="{{url("/adminui")}}/assets/plugins/horizontal-menu/dark-horizontalmenu.css" rel="stylesheet">

    <!--Daterangepicker css-->
    <link href="{{url("/adminui")}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <!-- Sidebar Accordions css -->
    <link href="{{url("/adminui")}}/assets/plugins/accordion1/css/dark-easy-responsive-tabs.css" rel="stylesheet">

    <!-- Rightsidebar css -->
    <link href="{{url("/adminui")}}/assets/plugins/sidebar/dark-sidebar.css" rel="stylesheet">

    <!---Font icons css-->
    <link href="{{url("/adminui")}}/assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
    <link href="{{url("/adminui")}}/assets/plugins/iconfonts/icons.css" rel="stylesheet" />
    <link  href="{{url("/adminui")}}/assets/fonts/fonts/font-awesome.min.css" rel="stylesheet">

    <link  href="{{url("/adminui")}}/assets/rtl.css" rel="stylesheet"></head>
<body class="bg-account">
<!-- page -->
<div class="page">

    <!-- page-content -->
    <div class="page-content">
        <div class="container text-center text-dark">
            <div class="row">
                <div class="col-lg-4 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <form class="form-horizontal"  method="POST" action="{{ url("admin/verify/check") }}">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mb-6">
                                            <img src="{{url("/adminui")}}/assets/images/brand/logo1.png" class="" alt="">
                                        </div>
                                        <h3> اعتبارسنجی و ورود نهایی </h3>
                                        <p class="text-muted">به حساب خود وارد شوید</p>
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                            <input type="text" class="form-control" name="verify" placeholder="کد اعتبارسنجی">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block"> ورود </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- page-content end -->
</div>
<!-- page End-->

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

<!-- Sidebar Accordions js -->
<script src="{{url("/adminui")}}/assets/plugins/accordion1/js/easyResponsiveTabs.js"></script>

<!--Moment js-->
<script src="{{url("/adminui")}}/assets/plugins/moment/moment.min.js"></script>

<!-- Daterangepicker js-->
<script src="{{url("/adminui")}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom scroll bar js-->
<script src="{{url("/adminui")}}/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Custom js-->
<script src="{{url("/adminui")}}/assets/js-dark/custom.js"></script>

</body>
</html>