@extends("admin.master")

@section("content")
    <div class="page-header">
        <ol class="breadcrumb"><!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="#"> صفحه اصلی </a></li>
            <li class="breadcrumb-item active" aria-current="page"> داشـبورد 01</li>
        </ol><!-- End breadcrumb -->
        <div class="ml-auto">
            <div class="input-group">
                <a  class="btn btn-primary text-white mr-2"  id="daterange-btn">
										<span>
											<i class="fa fa-calendar"></i> تنظیمات رویداد
										</span>
                    <i class="fa fa-caret-down"></i>
                </a>
                <a href="#" class="btn btn-secondary text-white" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fa fa-star"></i>
										</span>
                </a>
            </div>
        </div>
    </div>

    <!--charts-->
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-counter bg-gradient-danger">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="si si-eye mt-3 mb-0 text-white-transparent"></i>
                                </div>
                                <div class="col-8 text-center">
                                    <div class="mt-4 mb-0 text-white">
                                        <h2 class="mb-0">54,234</h2>
                                        <p class="text-white mt-1">بازدید روزانه </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-counter bg-gradient-secondary ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="si si-basket mt-3 mb-0 text-white-transparent"></i>
                                </div>
                                <div class="col-8 text-center">
                                    <div class="mt-4 mb-0 text-white">
                                        <h2 class="mb-0">80,956</h2>
                                        <p class="text-white mt-1">سفارشات روزانه </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-counter bg-gradient-success">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="si si-people mt-3 mb-0 text-white-transparent"></i>
                                </div>
                                <div class="col-8 text-center">
                                    <div class="mt-4 mb-0 text-white">
                                        <h2 class="mb-0">34,762</h2>
                                        <p class="text-white mt-1">مشتریان روزانه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-counter bg-gradient-pink">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="si si-paper-plane mt-3 mb-0 text-white-transparent"></i>
                                </div>
                                <div class="col-8 text-center">
                                    <div class="mt-4 mb-0 text-white">
                                        <h2 class="mb-0">25,789</h2>
                                        <p class="text-white mt-1 ">درآمد روزانه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="feature">
                                    <div class="fa-stack fa-lg fa-2x icon bg-purple">
                                        <i class="fa fa-bed fa-stack-1x text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-3  d-flex">
                                    <div>
                                        <p class="text-muted mb-1">مجموع بیماران</p>
                                        <h2 class="mb-0 text-dark">23,786K</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="feature">
                                    <div class="fa-stack fa-lg fa-2x icon bg-green">
                                        <i class="fa fa-user-md fa-stack-1x text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-3  d-flex">
                                    <div>
                                        <p class="text-muted mb-1">تعداد کارکنان</p>
                                        <h2 class="mb-0 text-dark">5,752</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="feature">
                                    <div class="fa-stack fa-lg fa-2x icon bg-orange">
                                        <i class="fa fa-hospital-o fa-stack-1x text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-3  d-flex">
                                    <div>
                                        <p class="text-muted mb-1">تعداد اتاق</p>
                                        <h2 class="mb-0 text-dark">34,678</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="feature">
                                    <div class="fa-stack fa-lg fa-2x icon bg-yellow">
                                        <i class="fa fa-flask fa-stack-1x text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body p-3  d-flex">
                                    <div>
                                        <p class="text-muted mb-1">مجموع آزمایشگاه</p>
                                        <h2 class="mb-0 text-dark">456</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-12">
                    <div class="card card-img-holder">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <p class="text-muted mb-1">کل خرید</p>
                                    <h1 class="mb-0 text-dark mainvalue">$7,483</h1>
                                </div>
                                <div class="float-right text-right mt-2">
                                    <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#6352a0&quot;, &quot;#313c4a&quot;]}" style="display: none;">0.52/1.561</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 0 1 46.667386863494265 37.47094008115171 L 25 25" fill="#6352a0"></path><path d="M 46.667386863494265 37.47094008115171 A 25 25 0 1 1 24.999999999999996 0 L 25 25" fill="#313c4a"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-12">
                    <div class="card card-img-holder">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <p class="text-muted mb-1"> فروش کل </p>
                                    <h1 class="mb-0 text-dark mainvalue">$6,129</h1>
                                </div>
                                <div class="float-right text-right mt-2">
                                    <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#9258f1&quot;, &quot;#313c4a&quot;]}" style="display: none;">226/360</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 1 1 7.016504991533726 42.36645926147494 L 25 25" fill="#9258f1"></path><path d="M 7.016504991533726 42.36645926147494 A 25 25 0 0 1 24.999999999999996 0 L 25 25" fill="#313c4a"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col-xl-3 col-md-12">
                    <div class="card card-img-holder">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <p class="text-muted mb-1"> فروش کل </p>
                                    <h1 class="mb-0 text-dark mainvalue">$6,129</h1>
                                </div>
                                <div class="float-right text-right mt-2">
                                    <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#9258f1&quot;, &quot;#313c4a&quot;]}" style="display: none;">226/360</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 1 1 7.016504991533726 42.36645926147494 L 25 25" fill="#9258f1"></path><path d="M 7.016504991533726 42.36645926147494 A 25 25 0 0 1 24.999999999999996 0 L 25 25" fill="#313c4a"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="card card-img-holder">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <p class="text-muted mb-1">مجموع سود</p>
                                    <h1 class="mb-0 text-dark mainvalue">10%</h1>
                                </div>
                                <div class="float-right text-right mt-2">
                                    <span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#bc4e9c&quot;, &quot;#313c4a&quot;]}" style="display: none;">226/360</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 1 1 7.016504991533726 42.36645926147494 L 25 25" fill="#bc4e9c"></path><path d="M 7.016504991533726 42.36645926147494 A 25 25 0 0 1 24.999999999999996 0 L 25 25" fill="#313c4a"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex clearfix">
                                <div class="text-left mt-3">
                                    <p class="card-text text-muted mb-1">کل سفارشات</p>
                                    <h2 class="mb-0 text-dark mainvalue">6,895</h2>
                                </div>
                                <div class="ml-auto">
												<span class="bg-primary-transparent icon-service text-primary ">
													<i class="si si-briefcase  fs-2"></i>
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex clearfix">
                                <div class="text-left mt-3">
                                    <p class="card-text text-muted mb-1">مجموع محصولات</p>
                                    <h2 class="mb-0 text-dark mainvalue">8,379</h2>
                                </div>
                                <div class="ml-auto">
												<span class="bg-success-transparent icon-service text-success">
													<i class="si si-layers fs-2"></i>
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex clearfix">
                                <div class="text-left mt-3">
                                    <p class="card-text text-muted mb-1">مجموع نظرات</p>
                                    <h2 class="mb-0 text-dark mainvalue">1,345</h2>
                                </div>
                                <div class="ml-auto">
												<span class="bg-danger-transparent icon-service text-danger">
													<i class="si si-note  fs-2"></i>
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex clearfix">
                                <div class="text-left mt-3">
                                    <p class="card-text text-muted mb-1">کل فروش</p>
                                    <h2 class="mb-0 text-dark mainvalue">2,456K</h2>
                                </div>
                                <div class="ml-auto">
												<span class="bg-warning-transparent icon-service text-warning">
													<i class="si si-basket-loaded  fs-2"></i>
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">نمودار تک خط</h3>
            </div>
            <div class="card-body">
                <canvas id="Chart1" class=" h-200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">نمودار تک خط</h3>
            </div>
            <div class="card-body">
                <canvas id="Chart2" class=" h-200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">نمودار تک خط</h3>
            </div>
            <div class="card-body">
                <canvas id="Chart3" class=" h-200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">نمودار تک خط</h3>
            </div>
            <div class="card-body">
                <canvas id="Chart4" class=" h-200"></canvas>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
    <!--slider-->





    <style>
        .lic li {
            display: inline-block;
            font-size: 16px;
            list-style-type: none;
            padding:5px;
            text-transform: uppercase;
            text-align: center;
        }

        .lic li span {
            display: block;
            font-size: 25px;
        }
    </style>
@endsection


@section("header")
    <link rel="stylesheet" type="text/css" href="{{url("component")}}/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url("component")}}/slick/slick-theme.css">
    @endsection


@section("footer")








    <!--Bootstrap.min js-->


    <!-- Custom scroll bar js-->



    <!-- Charts js-->
    <script src="{{url("adminui")}}/assets/plugins/chart/chart.bundle-dark.js"></script>
    <script src="{{url("adminui")}}/assets/plugins/chart/chart.extension.js"></script>

    <!-- Custom-charts js-->
    <script src="{{url("adminui")}}/assets/js-dark/chartjs.js"></script>

    <!-- Custom js-->

    <script>
        var ctx = document.getElementById('Chart1');
        var mahane = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12','13', '14', '15', '16', '17', '18','19', '20', '21', '22', '23', '24','25', '26', '27', '28', '29', '30',],
                datasets: [{
                    label: 'گزارش ماهانه',
                    data: [12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,],
                    backgroundColor:
                        'rgba(253, 185, 1, 0.2)'
                    ,
                    borderColor:
                        'rgba(253, 185, 1, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


        var ctx = document.getElementById('Chart2');
        var mahane = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12','13', '14', '15', '16', '17', '18','19', '20', '21', '22', '23', '24','25', '26', '27', '28', '29', '30',],
                datasets: [{
                    label: 'گزارش ماهانه',
                    data: [12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,],
                    backgroundColor:
                        'rgba(0, 0, 255, 0.2)'
                    ,
                    borderColor:
                        'rgba(0, 0, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


        var ctx = document.getElementById('Chart3');
        var mahane = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12','13', '14', '15', '16', '17', '18','19', '20', '21', '22', '23', '24','25', '26', '27', '28', '29', '30'],
                datasets: [{
                    label: 'گزارش ماهانه',
                    data: [12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 14, 3, 5, 2, 3],
                    backgroundColor:
                        'rgba(253, 185, 1, 0.2)'
                    ,
                    borderColor:
                        'rgba(253, 185, 1, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


        var ctx = document.getElementById('Chart4');
        var mahane = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12','13', '14', '15', '16', '17', '18','19', '20', '21', '22', '23', '24','25', '26', '27', '28', '29', '30',],
                datasets: [{
                    label: 'گزارش ماهانه',
                    data: [12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 19, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,12, 14, 3, 5, 2, 3,],
                    backgroundColor:
                        'rgba(253, 185, 1, 0.2)'
                    ,
                    borderColor:
                        'rgba(253, 185, 1, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


    </script>






    <!--Bootstrap.min js-->


    <!-- Charts js-->
    <script src="{{url("adminui")}}/assets/plugins/chart/chart.bundle-dark.js"></script>
    <script src="{{url("adminui")}}/assets/plugins/chart/chart.extension.js"></script>

    <!-- Custom-charts js-->
    <script src="{{url("adminui")}}/assets/js-dark/chartjs.js"></script>

    <!-- Custom js-->


    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{url("component")}}/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".auctioncu").slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 2000
            });
        });
    </script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".shopcu").slick({
                dots: true,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: true,
                autoplaySpeed: 2500
            });
        });
    </script>



@endsection

