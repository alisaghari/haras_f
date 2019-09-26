@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"  style="text-align: right  ;  padding: 15px;">افزودن پکیج تصویری جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">اسلایدر</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن تصویر جدید
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
                                <label class="card-title primary" for="inputDanger"><strong>افزودن تصویر جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    <form action="{{url("admin")}}/slider/image/add" method="post" class="needs-validation was-validated" enctype="multipart/form-data" novalidate="">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip01">عنوان تصویر</label>
                                                <input type="text" name="title" class="form-control position-relative" id="validationTooltip01"  placeholder="عنوان اسلایدر" value="@if(isset($image->title)){{$image->title}}@endif" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip01">توضیحات تصویر</label>
                                                <input type="text" name="desc" class="form-control position-relative" id="validationTooltip01"  placeholder="توضیحات اسلایدر" value="@if(isset($image->desc)){{$image->desc}}@endif" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip02">آپلود تصویر</label>
                                                <input type="file" name="image" class="form-control position-relative" id="validationTooltip02"  required="">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <button class="btn btn-primary" type="submit" style="margin-top: 25px ; width: 100%">افزودن تصویر</button>
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
                                        <th>تصویر</th>
                                        <th>عنوان تصویر</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($images as $image)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td><img src="{{url('upload/slider'.'/'.$image->image)}}" width="100px" height="100px" alt=""></td>
                                            <td>{{$image->title}}</td>
                                            <td><a href="{{url("admin")}}/slider/image/delete/{{$image->id}}" class="btn btn-icon btn-danger mr-1"><i class="fa fa-trash"></i></a></td>
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