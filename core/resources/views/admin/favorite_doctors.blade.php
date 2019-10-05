@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">مدیریت پزشکان محبوب</h3>
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

        @if (Session::has('job'))
            <div style="direction: rtl" class="col-md-12">
                <div class="container" style="margin-top: 40px">
                    <div class="alert alert-danger border-0 alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="alert-heading mb-2" style=" text-align: right">عملیات  ناموفق</h4>
                        <p style=" text-align: right">کاربر مورد نظر اعتبار کافی ندارد</p>
                    </div>
                </div>
            </div>
        @endif
        @if(isset($id))
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
                                        <form action="{{url("admin")}}/doctor/add_favorite" method="post" class="needs-validation was-validated" novalidate="">
                                            @csrf
                                            <input type="hidden" value="{{$id}}" name="doctor_id">
                                            <div class="form-row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationTooltip01">قیمت(تومان)</label>
                                                    <input type="number" name="price" class="form-control position-relative" id="validationTooltip01"  placeholder="قیمت" value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label for="validationTooltip01">تعداد روز</label>
                                                    <input type="number" name="fav_days" class="form-control position-relative" id="validationTooltip01"  placeholder="تعداد روز" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                    <label for="validationTooltip01">ردیف</label>
                                                    <?php
                                                    $days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
                                                    $f_days =[];
                                                    foreach ($favDoctors as $key =>$value){
                                                        array_push($f_days,$value->favorite);
                                                    }
                                                    $results=array_diff($days,$f_days);
                                                    ?>
                                                    <select name="favorite" id="" class="form-control position-relative">
                                                        @foreach($results as $result)
                                                            <option value="{{$result}}">{{$result}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <button class="btn btn-primary" style="margin-top: 26px" type="submit">افزودن پزشک</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endif

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
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره ردیف</th>
                                        <th>زمان باقیمانده</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($favDoctors as $favDoctor)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <?php
                                            $date1=date_create($favDoctor->fav_date);
                                            $date2=date_create(date("Y/m/d"));
                                            $diff=date_diff($date2,$date1);
                                            $difference = $diff->format("%R%a")
                                            ?>
                                            <td>{{$i}}</td>
                                            <td>{{$favDoctor->f_name}} {{$favDoctor->l_name}}</td>
                                            <td>{{$favDoctor->favorite}}</td>
                                            <td>{{$difference}} روز</td>
                                            <td>
                                                <a href="{{url("admin/doctor/del_favorite")}}/{{$favDoctor->id}}" class="btn btn-icon btn-danger mr-1"><i class="fa fa-close"></i></a>
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