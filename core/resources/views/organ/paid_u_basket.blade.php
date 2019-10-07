@extends("organ.master")
@section("header")
    <link rel="stylesheet" type="text/css" href="{{url("userui")}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("userui")}}/app-assets/css-rtl/plugins/animate/animate.min.css">
@endsection
@section("content")
    @if(Session::has('message'))
        <div class="container" style="margin-top: 40px">
            <div class="alert {{ Session::get('alert-class') }} border-0 alert-dismissible mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="alert-heading mb-2">{{ Session::get('title') }}</h4>
                <p>{{ Session::get('message') }}</p>
            </div>
        </div>
    @endif

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card" >
                    <div class="card-body" style="padding-bottom: 0px">
                        <h4 class="card-title">مشاهده کاربران</h4>
                    </div>
                    <div class="card-body">
                        <section id="configuration">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-body card-dashboard">
                                                <div class="row" style="    background: linear-gradient(141deg, #1f6d9f 0%, #1fc8db 51%, #2cb5e8 75%);
    border-radius: 15px;
    box-shadow: 0px 0px 4px;
    padding: 23px;
    color: white;
margin-bottom: 15px">
                                                    <div class="col-sm-6" style="font-size: 20px ; text-align: center ">نام سازمان : {{$organ->organ_name}}</div>
                                                    <div class="col-sm-6" style="font-size: 20px ; text-align: center">نام مدیر  : {{$organ->f_name." ".$organ->l_name}}</div>
                                                    <div class="col-sm-6" style="font-size: 20px ; text-align: center; padding-top: 15px">آدرس : {{$organ->address}}  </div>
                                                    <div class="col-sm-6" style="font-size: 20px ; text-align: center; padding-top: 15px">تلفن ثابت :  {{$organ->tell}}</div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>نام و نام خانوادگی</th>
                                                            <th>تاریخ تولد</th>
                                                            <th>کد ملی</th>
                                                            <th>شماره همراه</th>
                                                            <th>چاپ</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i=0;?>
                                                        @foreach($users as $user)
                                                            <?php $i++;?>
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{$user->f_name}} {{$user->l_name}}</td>
                                                                <td>{{$user->birthdate}}</td>
                                                                <td>{{$user->n_code}}</td>
                                                                <td>{{$user->phone}}</td>
                                                                <td>
                                                                    <a href="{{url("organ/user/cart")}}/{{$user->id}}" class="btn btn-primary btn-sm buttonAnimation" data-animation="rubberBand"><i class="ft-printer"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    <script src="{{url("userui")}}/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="{{url("userui")}}/app-assets/js/scripts/tables/datatables/datatable-basic.min.js" type="text/javascript"></script>
    <script src="{{url("userui")}}/app-assets/js/scripts/animation/animation.js" type="text/javascript"></script>
@endsection
