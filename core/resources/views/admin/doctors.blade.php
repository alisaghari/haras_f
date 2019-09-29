@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">مدیریت  پزشکان</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">پزشکان</a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="tooltip-validations" id="tooltip-validation">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card" style="padding: 15px">
                            <div class="col-sm-12" style="padding-bottom: 15px">

                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-primary white">
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>شماره تلفن</th>
                                        <th>کد ملی</th>
                                        <th>تخصص</th>
                                        <th>مشاهده کل</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($doctors as $doctor)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$doctor->f_name}}</td>
                                            <td>{{$doctor->l_name}}</td>
                                            <td>{{$doctor->phone}}</td>
                                            <td>{{$doctor->n_code}}</td>
                                            <td>{{$doctor->field}}</td>
                                            <td><a href="{{url("admin/doctor/update")}}/{{$doctor->id}}" class="btn btn-icon btn-success mr-1">مشاهده</a></td>
                                            <td><a href="{{url("admin/doctor/update")}}/{{$doctor->id}}" class="btn btn-icon btn-primary mr-1">ویرایش</a></td>
                                            <td> <a href="{{url("admin/doctor/delete")}}/{{$doctor->id}}" class="btn btn-icon btn-danger mr-1">حذف</a></td>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section("footer2")
    <script type="text/javascript" src="{{url("/component")}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/persianDatepicker.min.js"></script>
@endsection