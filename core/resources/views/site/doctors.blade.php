@extends('site.master')
@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner bg-common" data-bg-image="{{url('websiteui')}}/img/figure/breadcumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <ul>
                            <li>
                                <a href="{{url('websiteui')}}/index.html">خانه</a>
                            </li>
                            <li>پزشکان</li>
                        </ul>
                        <h1>پزشکان</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
    <!-- Contact Page Area Start Here -->

    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-box-layout1">
                    <form class="contact-form-box" action="{{url('search_doctor')}}" method="post">
                        @csrf
                        <div class="row gutters-15">
                            <div class="col-lg-2 col-12 form-group">
                                <input type="text" class="form-control" name="name" placeholder="نام دکتر" style="margin-top: 10px">
                            </div>
                            <div class="col-md-2 col-12" >
                                <select name="field" id="field"  style="border: none;background-color: #f5f5f5;border-radius: 4px;font-size: 14px;color: #646464;padding:14px 20px;width: 100%; margin-top: 10px">
                                    <option value="1" disabled>تخصص</option>
                                    @foreach($fields as $key =>$value)
                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-3 col-12 form-group">
                                <select id="Ostan" style="border: none;background-color: #f5f5f5;border-radius: 4px;font-size: 14px;color: #646464;padding:14px 20px; margin-top: 10px ;width: 100%" onchange="Func(this.value)" required>
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

                            <div class="col-md-3 col-12" >

                                <select id="Shahrestan" name="Shahrestan"  style="border: none;background-color: #f5f5f5;border-radius: 4px;font-size: 14px;color: #646464;padding:14px 20px;width: 100%; margin-top: 10px">
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


                            <div class="col-md-2 col-12 " style="margin-top: 10px">
                                <button type="submit" class="btn-fill-3 gradient-accent">جستجو پزشک</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="case-study-wrap-layout7">
        <div class="container">
            <div class="isotope-wrap">
                <div class="text-center">
                </div>
                <div class="row featuredContainer">
                    @foreach($doctors as $key =>$value)
                        <?php   $image = \App\Document::where('user_id',$value->id)->where('type','profile_image')->first();
                        ?>
                        <div class="col-lg-2 col-md-6 col-12 seo">
                            <div class="case-study-box-layout6">
                                <div class="item-img">
                                    <img src="{{url('upload/document').'/'.$image['image']}}" alt="Case Study">
                                    <div class="hover-icon">
                                        <a href="{{url('rezerv_days'.'/'.$value->id)}}"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="{{url('rezerv_days'.'/'.$value->id)}}">{{$value->f_name}} {{ $value->l_name}}</a></h3>
                                    <div class="item-subtitle">{{$value->field}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Page Area End Here -->
@endsection