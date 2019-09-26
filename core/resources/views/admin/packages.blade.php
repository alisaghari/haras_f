@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"    style="text-align: right  ;  padding: 15px;">افزودن پکیج  جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12" >
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">پکیج ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن پکیج جدید
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-primary white">
                                    <tr>
                                        <th>#</th>
                                        <th>کد</th>
                                        <th>نام پکیج</th>
                                        <th>هزینه یک نفر</th>
                                        <th>هزینه دو نفر</th>
                                        <th>هزینه سه نفر</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($packages as $package)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$package->code}}</td>
                                            <td>{{$package->title}}</td>
                                            <td>{{$package->price1}}</td>
                                            <td>{{$package->price2}}</td>
                                            <td>{{$package->price3}}</td>
                                            <td><a href="{{url("admin")}}/package/download/update/{{$package->id}}" class="btn btn-icon btn-success mr-1"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="{{url("admin")}}/package/delete/{{$package->id}}" class="btn btn-icon btn-danger mr-1"><i class="fa fa-trash"></i></a></td>
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