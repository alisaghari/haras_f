@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"  style="text-align: right  ;  padding: 15px;">افزودن بلاگ جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">بلاگ ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن بلاگ جدید
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
                                <label class="card-title primary" for="inputDanger"><strong>افزودن بلاگ جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($blog))
                                        <form action="{{url("admin")}}/blog/add" method="post" class="needs-validation was-validated" novalidate="" enctype="multipart/form-data">
                                            @else
                                                <form action="{{url("admin")}}/blog/update" method="post" class="needs-validation was-validated" novalidate=""  enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    @endif
                                                    <div class="col-md-12 mb-12" style="margin-bottom: 35px">
                                                        <label for="validationTooltip02">توضیحات</label>
                                                        <textarea type="text" name="desc" class="form-control position-relative content" id="validationTooltip02"  placeholder="توضیحات" required="">@if(isset($blog->desc)){{$blog->desc}}@endif</textarea>

                                                    </div>
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">عنوان</label>
                                                            <input type="text" name="title" class="form-control position-relative" id="validationTooltip01"  placeholder="عنوان بلاگ" value="@if(isset($blog->title)){{$blog->title}}@endif" required="">
                                                        </div>




                                                        <div class="col-md-3 mb-3">
                                                            <label>دسته بندی بلاگ</label>
                                                            <select name="category" id="parent_id" class="form-control position-relative">
                                                                <option value="0">لطفا یک دسته بندی انتخاب کنید</option>
                                                                @foreach($categories as $key=>$value)
                                                                    <option value='{{$value['name']}}'>
                                                                        {{$value['name']}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">تصویر</label>
                                                            <input type="file" name="image" class="form-control position-relative" id="validationTooltip02"  required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            @if(!isset($blog))
                                                                <button class="btn btn-primary" type="submit" style="margin-top: 25px ; width: 100%">افزودن بلاگ</button>
                                                            @else
                                                                <button class="btn btn-success" type="submit" style="margin-top: 25px">ویرایش بلاگ</button>
                                                                <a class="btn btn-primary" href="{{url("admin/blogs")}}" style="margin-top: 25px ">لغو ویرایش</a>
                                                            @endif
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
                                        <th>عکس مطلب</th>
                                        <th>عنوان مطلب</th>
                                        <th>توضیح </th>
                                        <th>دسته بندی </th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($blogs as $b)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td><img src="{{url("upload/blog")}}/{{$b->image}}" style="height: 70px"></td>
                                            <td>{{$b->title}}</td>
                                            <td>{{$b->desc}}</td>
                                            <td>{{$b->category}}</td>
                                            <td><a href="{{url("admin")}}/blog/update/{{$b->id}}" class="btn btn-icon btn-success mr-1"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="{{url("admin")}}/blog/delete/{{$b->id}}" class="btn btn-icon btn-danger mr-1"><i class="fa fa-trash"></i></a></td>
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