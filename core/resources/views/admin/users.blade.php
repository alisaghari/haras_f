@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">لیست کاربران</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">کاربران</a>
                            </li>
                            <li class="breadcrumb-item active">لیست کاربران
                            </li>
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
                                <form action="{{url("admin")}}/user/search" method="post" class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="input-group" style="width: 100% ; float: right">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-phone"></i> </span>
                                                </div>
                                                <input type="text" name="phone" class="form-control position-relative" id="validationTooltipUsername" value="@if(isset($user->phone)){{$user->phone}}@endif" placeholder="شماره همراه" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group" style="width: 100% ; float: right">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-code"></i> </span>
                                                </div>
                                                <input type="text" name="code" class="form-control position-relative" id="validationTooltipUsername" value="@if(isset($user->code)){{$user->code}}@endif" placeholder="کد کاربر" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group" style="width: 100% ; float: right">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-credit-card-alt"></i> </span>
                                                </div>
                                                <input type="text" name="ncode" class="form-control position-relative" id="validationTooltipUsername" value="@if(isset($user->ncode)){{$user->ncode}}@endif" placeholder="کد ملی" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <button class="btn btn-primary" type="submit" style="float: right ; margin-right: 15px">جستجو کاربر</button>
                                        </div>
                                    </div>
                                    @csrf

                                </form>
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
                                        <th>مشاهده کل</th>
                                        <th>ویرایش</th>
                                        <th>ویرایش کارت</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($users as $user)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$user->f_name}}</td>
                                            <td>{{$user->l_name}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->n_code}}</td>
                                            <td><a href="{{url("admin")}}/user/update/{{$user->id}}" class="btn btn-icon btn-primary mr-1"><i class="fa fa-eye"></i></a></td>
                                            <td><a href="{{url("admin")}}/user/update/{{$user->id}}" class="btn btn-icon btn-success mr-1"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="{{url("admin")}}/user/update/{{$user->id}}" class="btn btn-icon btn-success mr-1"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="{{url("admin")}}/user/delete/{{$user->id}}" class="btn btn-icon btn-danger mr-1"><i class="fa fa-trash"></i></a></td>
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