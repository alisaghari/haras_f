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
                        <div class="card">
                            <div class="card-header">
                                <label class="card-title primary" for="inputDanger"><strong>افزودن پکیج جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($package))
                                        <form action="{{url("admin")}}/package" method="post" class="needs-validation was-validated" novalidate="">
                                            @else
                                                <form action="{{url("admin")}}/package/download/update" method="post" class="needs-validation was-validated" novalidate="">
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    @endif
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام</label>
                                                            <input type="text" name="title" class="form-control position-relative" id="validationTooltip01"  placeholder="نام پکیج" value="@if(isset($package->title)){{$package->title}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">هزینه یک نفر</label>
                                                            <input type="text" name="price1" class="form-control position-relative" id="validationTooltip02" placeholder="هزینه یک نفر" value="@if(isset($package->price1)){{$package->price1}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">هزینه دو نفر</label>
                                                            <input type="text" name="price2" class="form-control position-relative" id="validationTooltip02" placeholder="هزینه دو نفر" value="@if(isset($package->price2)){{$package->price2}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">هزینه سه نفر</label>
                                                            <input type="text" name="price3" class="form-control position-relative" id="validationTooltip02" placeholder="هزینه سه نفر" value="@if(isset($package->price3)){{$package->price3}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">هزینه چهار نفر</label>
                                                            <input type="text" name="price4" class="form-control position-relative" id="validationTooltip02" placeholder="هزینه جهار نفر" value="@if(isset($package->price4)){{$package->price4}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">هزینه پنج نفر</label>
                                                            <input type="text" name="price5" class="form-control position-relative" id="validationTooltip02" placeholder="هزینه پنج نفر" value="@if(isset($package->price5)){{$package->price5}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">مدت دوره(روز)</label>
                                                            <input type="text" name="day" class="form-control position-relative" id="validationTooltip02" placeholder="مدت دوره(روز)" value="@if(isset($package->day)){{$package->day}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">نوع خدمات بیمه</label>
                                                            <input type="text" name="type" class="form-control position-relative" id="validationTooltip02" placeholder="نوع خدمات بیمه" value="@if(isset($package->type)){{$package->type}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">نمایش برای ...</label>
                                                            <input type="text" name="category" class="form-control position-relative" id="validationTooltip02" placeholder="انتخاب دسته بندی" value="@if(isset($package->price5)){{$package->price5}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip02">کد پکیج</label>
                                                            <input type="text" name="code" class="form-control position-relative" id="validationTooltip02" placeholder="کد پکیج" value="@if(isset($package->code)){{$package->code}}@endif" required="">

                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            @if(!isset($package))
                                                                <button class="btn btn-primary" type="submit" style="margin-top: 25px ; width: 100%">افزودن پکیج</button>
                                                            @else
                                                                <button class="btn btn-success" type="submit" style="margin-top: 25px ">ویرایش پکیج</button>
                                                                <a class="btn btn-primary" href="{{url("admin/packages/download")}}" style="margin-top: 25px ">لغو ویرایش</a>
                                                            @endif
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
    </div>
@endsection