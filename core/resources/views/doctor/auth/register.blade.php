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
                    <div class="col-lg-10 col-md-12 col-12 box-shadow-2 p-0">
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
                                    <form class="form-horizontal" action="{{url("doctor/register")}}" method="post" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text"  class="form-control round" name="f_name" placeholder="نام"  id="user-name" value="{{$user->f_name}}"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="l_name" id="user-name"  value="{{$user->l_name}}"  placeholder="نام خانوادگی" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="tell" id="user-name"  value="{{$user->tell}}"   placeholder="شماره ثابت " required>
                                                    <div class="form-control-position">
                                                        <i class="ft-phone-call"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text"  class="form-control round" name="n_code"  value="{{$user->n_code}}"  placeholder="شماره ملی"  id="user-name"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-edit"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-3">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="birthdate" id="user-name"  value="{{$user->birthdate}}"   placeholder="تاریخ تولد" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="saheb_hesab" id="user-name"  placeholder="نام صاحب حساب" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text"  class="form-control round" name="address"  value="{{$user->address}}"  placeholder="آدرس مطب"  id="user-name"  required>
                                                    <div class="form-control-position">
                                                        <i class="ft-map-pin"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="shaba" id="user-name"  placeholder="شماره شبا" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <select id="Ostan" class="form-control round" onchange="Func(this.value)" style="width: 100% " required>

                                                    <option>لطفا استان خود را انتخاب کنید</option>
                                                    <option value=" آذرشهر ,اسکو ,اهر ,بستان&zwnj;آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب&zwnj;شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">آذربایجان شرقی</option>
                                                    <option value="ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین&zwnj;دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">آذربایجان غربی</option>
                                                    <option value=" اردبیل ,بیله&zwnj;سوار ,پارس&zwnj;آباد ,خلخال ,کوثر ,گِرمی ,مِشگین&zwnj;شهر ,نَمین ,نیر">اردبیل</option>
                                                    <option value="آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی&zwnj;شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون&zwnj;شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف&zwnj;آباد ,نطنز">اصفهان</option>
                                                    <option value=" آبدانان ,ایلام ,ایوان ,دره&zwnj;شهر ,دهلران ,شیروان و چرداول ,مهران">ایلام</option>
                                                    <option value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">بوشهر</option>
                                                    <option value="اسلام&zwnj;شهر ,پاکدشت ,تهران ,دماوند ,رباط&zwnj;کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">تهران</option>
                                                    <option value=" اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">چهارمحال و بختیاری</option>
                                                    <option value=" بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">خراسان جنوبی</option>
                                                    <option value="بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل&zwnj;آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">خراسان رضوی</option>
                                                    <option value="اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">خراسان شمالی</option>
                                                    <option value="آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ&zwnj;ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">خوزستان</option>
                                                    <option value=" ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه&zwnj;نشان">زنجان</option>
                                                    <option value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی&zwnj;شهر">سمنان</option>
                                                    <option value=" ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک&zwnj;شهر">سیستان و بلوچستان</option>
                                                    <option value="آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم&zwnj;بید ,خنج ,داراب ,زرین&zwnj;دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی&zwnj;ریز">فارس</option>
                                                    <option value="آبیک ,البرز ,بوئین&zwnj;زهرا ,تاکستان ,قزوین">قزوین</option>
                                                    <option value="  ,قم">قم</option>
                                                    <option value=" بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">کردستان</option>
                                                    <option value=" بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">کرمان</option>
                                                    <option value="اسلام&zwnj;آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">کرمانشاه</option>
                                                    <option value="بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">کهگیلویه و بویراحمد</option>
                                                    <option value=" آزادشهر ,آق&zwnj;قلا ,بندر گز ,ترکمن ,رامیان ,علی&zwnj;آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه&zwnj;تپه ,مینودشت">گلستان</option>
                                                    <option value="آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه&zwnj;سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">گیلان</option>
                                                    <option value=" ازنا ,الیگودرز ,بروجرد ,پل&zwnj;دختر ,خرم&zwnj;آباد ,دورود ,دلفان ,سلسله ,کوهدشت">لرستان</option>
                                                    <option value="آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم&zwnj;شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">مازندران</option>
                                                    <option value="آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">مرکزی</option>
                                                    <option value="ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی&zwnj;آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">هرمزگان</option>
                                                    <option value=" اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">همدان</option>
                                                    <option value="ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">یزد</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-3">
                                                <select id="Shahrestan" name="Shahrestan" class="form-control round" style="width: 100%">
                                                    <option value="ارومیه ">ارومیه </option>
                                                    <option value="اشنویه ">اشنویه </option>
                                                    <option value="بوکان ">بوکان </option>
                                                    <option value="پیرانشهر ">پیرانشهر </option>
                                                    <option value="تکاب ">تکاب </option>
                                                    <option value="چالدران ">چالدران </option>
                                                    <option value="خوی ">خوی </option>
                                                    <option value="سردشت ">سردشت </option>
                                                    <option value="سلماس ">سلماس </option>
                                                    <option value="شاهین&zwnj;دژ ">شاهین&zwnj;دژ </option>
                                                    <option value="ماکو ">ماکو </option>
                                                    <option value="مهاباد ">مهاباد </option>
                                                    <option value="میاندوآب ">میاندوآب </option>
                                                    <option value="نقده">نقده</option>
                                                </select>


                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" name="hesab" id="user-name"  placeholder="شماره حساب" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-4">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="number" class="form-control round" name="postal_code" id="user-name"  placeholder="کدپستی" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-credit-card"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-4">
                                                <?php
                                                $fields = \App\Field::all();
                                                ?>
                                                <select name="field" id="" class="form-control round " required>
                                                    <option value="1" disabled>زمینه تخصصی خود را انتخاب کنید</option>
                                                    @foreach($fields as $key =>$value)
                                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>
                                                    تصویر مجوز با فرمت jpg یا png
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" class="form-control round" name="mojavez"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>
                                                    تصویر کارت ملی با فرمت jpg یا png(پشت و رو)
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" class="form-control round" name="meli_cart"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>
                                                    تصویر تاییدیه شبا
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" class="form-control round" name="shaba_Confirmation"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>
                                                    تصویر صفحه اول شناسنامه
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" class="form-control round" name="sejeld"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>
                                                    تصویر قرارداد  psp (متن قرار داد را از <a href="#">اینجا</a> دانلود کنید)
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" class="form-control round" name="psp_contract"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>
                                                    تصاویر قرارداد  هرس (متن قرار داد را از <a href="#">اینجا</a> دانلود کنید)
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" multiple class="form-control round" name="haras_contract[]"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>
                                                    تصویر پروفایل
                                                </label>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="file" multiple class="form-control round" name="profile_image"  accept="image/*" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-image"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
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
<script>
    function Func(Shahrestanha) {
        var _Shahrestan = document.getElementById("Shahrestan");
        _Shahrestan.options.length = 0;
        if(Shahrestanha != "") {
            var arr = Shahrestanha.split(",");
            for(i = 0; i < arr.length; i++) {
                if(arr[i] != "") {
                    _Shahrestan.options[_Shahrestan.options.length]=new Option(arr[i],arr[i]);
                }
            }
        }
    }
</script>

</body>
<!-- END: Body-->
</html>