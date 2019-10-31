@extends("agent.master")

@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Revenue, Hit Rate & Deals -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">آخرین کاربران من</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a href="{{url("agent/users")}}"><button type="button" class="btn btn-glow btn-round btn-bg-gradient-x-red-pink">مشاهده همه</button></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body p-0 pb-0" style="min-height: 550px">
                                <div class="chartist">
                                  <table class="table table-bordered" style="margin-top: 20px">
                                      <tr>
                                          <th>#</th>
                                          <th>نام و نام خانوادگی</th>
                                          <th>شماره همراه</th>
                                          <th>کد ملی</th>
                                          <th>مشاهده کارت ها</th>
                                      </tr>
                                      <?php $i=0?>
                                      @foreach($users as $u)
                                          <?php $i++?>
                                      <tr>
                                          <td>{{$i}}</td>
                                          <td>{{$u->f_name}} {{$u->l_name}}</td>
                                          <td>{{$u->phone}}</td>
                                          <td>{{$u->n_code}}</td>
                                          <td><a href="{{url("/agent/user/cart")}}/{{$u->id}}" class="btn btn-primary btn-sm buttonAnimation" data-animation="rubberBand"> کارت ها</a></td>
                                      </tr>
                                          @endforeach
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card pull-up">
                                <div class="card-header">
                                    <h4 class="card-title float-left">اعتبار حساب کاربری شما</h4><a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <a href="{{url("agent/credit")}}" class="badge badge-pill badge-info float-right m-0">افزایش اعتبار</a>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body pt-0 pb-1">
                                        <h6 class="text-muted font-large-1"> اعتبار شما : {{number_format($user->credit)}} تومان</h6>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div style="width: 100%">
                                            <a href="{{url("agent/credit")}}" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card pull-up bg-gradient-directional-danger">
                                <div class="card-header bg-hexagons-danger">
                                    <h4 class="card-title white">تعداد کاربران شما</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a class="btn btn-sm btn-white danger box-shadow-1 round btn-min-width pull-right" href="#" target="_blank">گزارش <i class="ft-bar-chart pl-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show bg-hexagons-danger">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center width-100">
                                                <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                                            </div>
                                            <div class="media-body text-right mt-1">
                                                <h3 class="font-large-2 white" style="text-align: center">{{$users_count}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="card pull-up border-top-info border-top-3 rounded-0">
                            <div class="card-header">
                                <h4 class="card-title">{{$user->f_name}} {{$user->l_name}} عزیز خوش آمدید </h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-1">
                                    <h4 class="font-large-1 text-bold-400">شماره حساب : {{$user->hesab}}  <i class="ft-credit-card float-right"></i></h4>
                                </div>
                                <div class="card-footer p-1">
                                    <span class="text-muted"><i class="la la-arrow-circle-o-up info"></i> شماره شبا : @if($user->shaba!="") {{$user->shaba}} @else وارد نشده @endif  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="columns">
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <h4 class="text-uppercase">فروشگاه هرس کارت</h4>
                        <p>این بخش بزودی راه اندازی خواهد شد و این مطالب به صورت تست می باشد
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-1">
                        <div class="card-columns">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="{{ url("userui") }}/app-assets/images/carousel/06.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">عنوان کارت</h4>
                                        <p class="card-text">بعضی از نمونه های سریع نمونه ای که بر روی عنوان کارت ساخته می شوند و بخش عمده ای از محتوای کارت را تشکیل می دهند.</p>
                                        <a href="#" class="btn btn-outline-primary">رفتن به صفحه</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-white bg-primary text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <img src="{{ url("userui") }}/app-assets/images/elements/01.png" alt="element 01" width="190" class="float-left img-fluid">
                                        <h4 class="card-title mt-3 text-white">دقیقه نام تجاری</h4>
                                        <p class="card-text">شیرینی زنجفیلی آب نبات شیرینی سوفل ماکارون.</p>
                                        <button class="btn btn-primary btn-darken-3">الان بخرید</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-white bg-warning text-center border-0 box-shadow-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="{{ url("userui") }}/app-assets/images/elements/04.png" alt="element 05" width="250" class="mb-1 img-fluid">
                                        <h4 class="card-title text-white">دستگاه ذخیره سازی</h4>
                                        <p class="card-text">945 مورد</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-white bg-success text-center border-0 box-shadow-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="{{ url("userui") }}/app-assets/images/elements/06.png" alt="element 02" width="225" class="mb-1 img-fluid">
                                        <h3 class="card-title text-white">بطری سرامیک</h3>
                                        <p class="card-text">456 مورد</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 box-shadow-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">درب تصویر پایین</h4>
                                        <p class="card-text"> ژله و کنجد فنجان پنیر کیک. کیک ماکارونی کیک ماکارونی

                                            گوشت گاو شیرینی پیتزا شیرینی شکلاتی.
                                            کارامل شکلات دسر کیک شکلاتی شکلات ترشی دایره شکلات.</p>
                                        <p class="card-text">کیک کیک ماکارونی کیک پودر کاکائو شیرینی شکلاتی tiramisu

                                            کوفته.</p>
                                        <p class="card-text mt-1">
                                            <small class="text-muted">آخرین به روز رسانی 3 دقیقه پیش</small>
                                        </p>
                                    </div>
                                    <img class="card-img-bottom img-fluid" src="{{ url("userui") }}/app-assets/images/carousel/15.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{ url("userui") }}/app-assets/images/carousel/05.jpg" alt="Card image">
                                    <div class="card-img-overlay overlay-cyan">
                                        <h4 class="card-title text-white">متن معکوس</h4>
                                        <p class="card-text">شیرین تامیموس گوشت آلو کیک مارمالاد مارمالاد پنبه آبنبات چپا chups کیک هویج topping chupa chups.</p>
                                        <p class="card-text">
                                            <small class="text-muted">آخرین به روز رسانی 3 دقیقه پیش</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{ url("userui") }}/app-assets/images/carousel/09.jpg" alt="Card image">
                                    <div class="card-img-overlay overlay-blue-grey">
                                        <h4 class="card-title text-white">متن معکوس</h4>
                                        <p class="card-text">شیرین تامیموس گوشت آلو کیک مارمالاد مارمالاد پنبه آبنبات چپا chups کیک هویج topping chupa chups.</p>
                                        <p class="card-text">
                                            <small class="text-muted">آخرین به روز رسانی 3 دقیقه پیش</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-info text-center box-shadow-0 bg-transparent">
                                <div class="card-content">
                                    <img src="{{ url("userui") }}/app-assets/images/elements/07.png" alt="element 04" width="210" class="float-left mt-3 img-fluid">
                                    <div class="card-body pt-3">
                                        <h4 class="card-title mt-3">متن شما</h4>
                                        <p class="card-text">شیرینی زنجفیلی آب نبات شیرینی سوفل ماکارون.</p>
                                        <button class="btn btn-info">الان بخرید</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="{{ url("userui") }}/app-assets/images/carousel/02.jpg" alt="Card image cap" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
