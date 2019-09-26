@extends("agent.master")
@section("header")
    <link rel="stylesheet" type="text/css" href="{{url("userui")}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
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
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>نام و نام خانوادگی</th>
                                                            <th>کد ملی</th>
                                                            <th>شماره همراه</th>
                                                            <th>شماره کارت بانکی</th>
                                                            <th>افزودن پکیج</th>
                                                            <th>حذف / ویرایش</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($users as $user)
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>معماری سیستم</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>تومان320,800</td>
                                                            <td>تومان320,800</td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>نام و نام خانوادگی</th>
                                                            <th>کد ملی</th>
                                                            <th>شماره همراه</th>
                                                            <th>شماره کارت بانکی</th>
                                                            <th>افزودن پکیج</th>
                                                            <th>حذف / ویرایش</th>
                                                        </tr>
                                                        </tfoot>
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
@endsection
