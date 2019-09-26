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
    <title>ورود - قالب مدیریتی آفتاب پرست - بوت استرپ 4 برنامه وب مدرن و پوسته استاتیک داشبورد + کیت رابط کاربری</title>
    <link rel="apple-touch-icon" href="{{ url("userui") }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("userui") }}/app-assets/images/ico/favicon.ico">
    <link href='{{ url("userui") }}/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/core/colors/palette-switch.min.css">
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
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/app-assets/css-rtl/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url("userui") }}/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="{{ url("userui") }}/app-assets/images/logo/logo.png" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                            ثبت نام نهایی
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="{{url("agent/register")}}" method="post" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round"  name="organ_name"  style="font-size: 25px ; text-align: center" id="user-password" placeholder="نام سازمان / نام شرکت" >
                                            <div class="form-control-position">
                                                <i class="ft-home"></i>
                                            </div>
                                        </fieldset>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text"  class="form-control round" name="f_name" placeholder="نام"  id="user-name" value="{{$user->f_name}}"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="l_name" id="user-name"  value="{{$user->l_name}}"  placeholder="نام خانوادگی" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text"  class="form-control round" name="address"  value="{{$user->address}}"  placeholder="آدرس"  id="user-name"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-map-pin"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="tell" id="user-name"  value="{{$user->tell}}"   placeholder="شماره ثابت " required>
                                                    <div class="form-control-position">
                                                        <i class="ft-phone-call"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text"  class="form-control round" name="n_code"  value="{{$user->n_code}}"  placeholder="شماره ملی"  id="user-name"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-edit"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="birthdate" id="user-name"  value="{{$user->birthdate}}"   placeholder="تاریخ تولد" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="saheb_hesab" id="user-name"  placeholder="نام صاحب حساب" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="cart" id="user-name"  placeholder="شماره کارت بانکی عضو شتاب" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="hesab" id="user-name"  placeholder="شماره حساب" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>
تصویر مجوز با فرمت jpeg یا png
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" class="form-control round" name="image" id="user-name" accept="image/*"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>


                                        <div class="form-group text-center">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">ثبت</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ url("userui") }}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url("userui") }}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url("userui") }}/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="{{ url("userui") }}/app-assets/js/core/app.min.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url("userui") }}/app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>