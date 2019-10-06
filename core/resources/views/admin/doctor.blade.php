@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">افزودن پزشک جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">پزشکان</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن پزشک جدید
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div style="direction: rtl" class="col-md-12">
                @if(Session::has('message'))
                    <div class="container" style="margin-top: 40px">
                        <div class="alert {{ Session::get('alert-class') }} border-0 alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="alert-heading mb-2" style=" text-align: right">{{ Session::get('title') }}</h4>
                            <p style=" text-align: right">{{ Session::get('message') }}</p>
                        </div>
                    </div>
                @endif
            </div>

        </div>
        <div class="content-body">
            <section class="tooltip-validations" id="tooltip-validation">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <label class="card-title primary" for="inputDanger"><strong>افزودن پزشک جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($user))
                                        <form action="{{url("admin")}}/doctor/add" method="post" class="needs-validation was-validated" enctype="multipart/form-data" novalidate="">
                                            @else
                                                <form action="{{url("admin")}}/doctor/update" method="post" class="needs-validation was-validated" enctype="multipart/form-data" novalidate="">
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    @endif
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام </label>
                                                            <input type="text" name="f_name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام " value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام خانوادگی</label>
                                                            <input type="text" name="l_name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام خانوادگی" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره ملی</label>
                                                            <input type="text" name="n_code" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره تماس</label>
                                                            <input type="text" name="tell" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره تلفن ثابت" value="@if(isset($user->tell)){{$user->tell}}@endif" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">تاریخ تولد</label>
                                                            <input type="text" name="birthdate" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام صاحب حساب</label>
                                                            <input type="text" name="saheb_hesab" class="form-control position-relative" id="validationTooltip01"  placeholder="صاحب حساب" value="@if(isset($user->saheb_hesab)){{$user->saheb_hesab}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره حساب</label>
                                                            <input type="text" name="hesab" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره حساب" value="@if(isset($user->hesab)){{$user->hesab}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره شبا</label>
                                                            <input type="text" name="shaba" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره شبا" value="@if(isset($user->shaba)){{$user->shaba}}@endif" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> آدرس مطب</label>
                                                            <input type="text" name="address" class="form-control position-relative" id="validationTooltip01"  placeholder="آدرس مطب" value="@if(isset($user->address)){{$user->address}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره همراه</label>
                                                            <input type="text" name="phone" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره همراه" value="@if(isset($user->phone)){{$user->phone}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">کد پستی</label>
                                                            <input type="text" name="postal_code" class="form-control position-relative" id="validationTooltip01"  placeholder="کد پستی" value="@if(isset($user->postal_code)){{$user->postal_code}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> تخصص</label>
                                                            <select name="field" id="validationTooltip01" class="form-control position-relative" required>
                                                                <option value="0" disabled>زمینه تخصصی خود را انتخاب کنید</option>
                                                                @foreach($fields as $key =>$value)
                                                                    <option value="{{$value->name}}" @if(isset($user->field) && $value->name == $user->field) selected @endif>{{$value->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">استان</label>
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

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شهر</label>
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
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> تصویر مجوز با فرمت jpg یا png</label>
                                                            <input type="file" name="mojavez" class="form-control position-relative" id="validationTooltip01" >
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> تصویر کارت ملی با فرمت jpg یا png(پشت و رو)</label>
                                                            <input type="file" name="meli_cart" class="form-control position-relative" id="validationTooltip01"  >
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">
                                                                تصویر تاییدیه شبا
                                                            </label>
                                                            <input type="file" name="shaba_Confirmation" class="form-control position-relative" id="validationTooltip01"  >
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">
                                                                تصویر صفحه اول شناسنامه
                                                            </label>
                                                            <input type="file" name="sejeld" class="form-control position-relative" id="validationTooltip01"  >
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">
                                                                تصویر قرارداد  psp (متن قرار داد را از <a href="#">اینجا</a> دانلود کنید)
                                                            </label>
                                                            <input type="file" name="psp_contract" class="form-control position-relative" id="validationTooltip01"  >
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">
                                                                تصاویر قرارداد  هرس (متن قرار داد را از <a href="#">اینجا</a> دانلود کنید)
                                                            </label>
                                                            <input type="file" multiple name="haras_contract[]" class="form-control position-relative" id="validationTooltip01" >
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">
                                                                تصویر پروفایل
                                                            </label>
                                                            <input type="file" name="profile_image" class="form-control position-relative" id="validationTooltip01"  >
                                                        </div>
                                                    </div>


                                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

                                                    @if(!isset($user))
                                                        <button class="btn btn-primary" type="submit">افزودن پزشک</button>
                                                    @else
                                                        <button class="btn btn-success" type="submit">ویرایش پزشک</button>
                                                        <a class="btn btn-primary" href="{{url("admin/doctors")}}">لغو ویرایش</a>
                                                    @endif
                                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>



        <!-- gallery -->
        @if(isset($user))
            <div class="demo-gallery card">
                <div class="card-header">
                    <div class="card-title">تصاویر مدارک ارسالی</div>
                </div>

                <div class="card-body">
                    <ul id="lightgallery" class="list-unstyled row">

                        @foreach($documents as $document)
                            <li class="col-xs-6 col-sm-3 col-md-2" data-responsive="{{url('upload/document'.'/'.$document->image)}}" data-src="{{url('upload/document'.'/'.$document->image)}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
                                <a href="{{url('admin/doctor/del_document'.'/'.$document->id)}}"><button class="btn btn-danger">حذف</button></a>
                                <a>
                                    <img height="200px" class="img-responsive" src="{{url('upload/document'.'/'.$document->image)}}" alt="Thumb-1">
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
    @endif
    <!-- gallery end -->



    </div>
@endsection

@section("footer")
    <script type="text/javascript" src="{{url("/component")}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/persianDatepicker.min.js"></script>
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

@endsection