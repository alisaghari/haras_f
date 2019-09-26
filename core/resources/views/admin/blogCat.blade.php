@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"   style="text-align: right  ;  padding: 15px;">افزودن  دسته بندی بلاگ جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">  دسته بندی بلاگ ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن  دسته بندی  بلاگ جدید
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
                <div class="card">
                    <div class="card-header">
                        <label class="card-title primary" for="inputDanger"><strong>افزودن  دسته بندی  بلاگ جدید</strong></label>
                    </div>
                    <div class="card-block">
                        <div class="card-body">

                            <form action="{{url("admin")}}/blog/category/add" method="post" class="needs-validation was-validated" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip01">عنوان</label>
                                        <input type="text" name="title" class="form-control position-relative" id="validationTooltip01"  placeholder="عنوان بلاگ" value="@if(isset($blog->title)){{$blog->title}}@endif" required="">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                            <button class="btn btn-primary" type="submit" style="margin-top: 25px ; width: 100%">افزودن دسته بندی</button>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card" style="padding: 15px">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-primary white">
                            <tr>
                                <th>#</th>
                                <th>عنوان </th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>
                            @foreach($categories as $b)
                                <?php
                                $i++;
                                ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$b->name}}</td>
                                    <td><a href="{{url("admin")}}/blog/category/delete/{{$b->id}}" class="btn btn-icon btn-danger mr-1"><i class="fa fa-trash"></i></a></td>
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