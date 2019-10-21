@extends("agent.master")

@section("content")
    @if(Session::has('message'))
        <div class="container-fluid" style="margin-top: 40px">
            <div class="alert {{ Session::get('alert-class') }} border-0 alert-dismissible mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="alert-heading mb-2">{{ Session::get('title') }}</h4>
                <p>{{ Session::get('message') }}</p>
            </div>
        </div>
    @endif
    <div  class="container" style="max-width: 1524px !important;">
        <div class="row" style="margin-top: 40px">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بسته سه میلیون تومانی</h4>

                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <a class="btn btn-sm btn-info box-shadow-3 round btn-min-width pull-right"style="color:white">مناسب برای نماینده های تازه کار</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600"> تعداد اشخاصی قابل بیمه:
                                <span>10 تن</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center" style="width:100%">

                                    <button type="button" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بسته پنج میلیون تومانی</h4>
                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <a class="btn btn-sm btn-warning box-shadow-3 round btn-min-width pull-right"style="color:white">مناسب نمایندگان نیمه حرفه ای</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600">تعداد اشخاصی قابل بیمه:
                                <span>20 تن</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center" style="width:100%">

                                    <button type="button" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بسته هفت میلیون تومانی</h4>
                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <a class="btn btn-sm btn-primary box-shadow-3 round btn-min-width pull-right"style="color:white">مناسب نمایندگان نیمه حرفه ای تا حرفه ای</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600">تعداد اشخاصی قابل بیمه:
                                <span>27 تن</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-primary" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center" style="width:100%">

                                    <button type="button" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بسته ده میلیون تومانی</h4>
                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <a class="btn btn-sm btn-danger box-shadow-3 round btn-min-width pull-right"style="color:white">مناسب نمایندگان حرفه ای</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600">تعداد اشخاصی قابل بیمه:
                                <span>35 تن</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center" style="width:100%">

                                    <button type="button" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بسته بیست میلیون تومانی</h4>
                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <a class="btn btn-sm btn-purple box-shadow-3 round btn-min-width pull-right"style="color:white">مناسب نمایندگان خیلی حرفه ای</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600">تعداد اشخاصی قابل بیمه:
                                <span>55 تن</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-purple" role="progressbar" style="width: 85%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center" style="width:100%">

                                    <button type="button" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">بسته سی میلیون تومانی</h4>
                        <div class="heading-elements">
                            <ul class="list-inline d-block mb-0">
                                <li>
                                    <a class="btn btn-sm btn-black box-shadow-3 round btn-min-width pull-right"style="color:white">ابر نماینده</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0 pb-1">
                            <h6 class="text-bold-600">تعداد اشخاصی قابل بیمه:
                                <span>80 تن</span>
                            </h6>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-black" role="progressbar" style="width: 100%;background-color: #252525" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="media d-flex">
                                <div class="align-self-center" style="width:100%">

                                    <button type="button" class="btn btn-bg-gradient-x-blue-green col-12 col-md-5 mr-1 mb-1" style="width: 100% ; float: right;    max-width: initial; margin-top:20px">افزایش اعتبار</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section("footer")

@endsection
