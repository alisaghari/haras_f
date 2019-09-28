@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">افزودن پزشک جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">پزشکان</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن پزشک جدید
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
                                <label class="card-title primary" for="inputDanger"><strong>افزودن پزشک جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($user))
                                        <form action="{{url("admin")}}/doctor/add" method="post" class="needs-validation was-validated" enctype="multipart/form-data" novalidate="">
                                            @else
                                                <form action="{{url("admin")}}/doctor/update" method="post" class="needs-validation was-validated" enctype="multipart/form-data" novalidate="">
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    @endif
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام </label>
                                                            <input type="text" name="f_name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام " value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام خانوادگی</label>
                                                            <input type="text" name="l_name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام خانوادگی" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره ملی</label>
                                                            <input type="text" name="n_code" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره تماس</label>
                                                            <input type="text" name="tell" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره تلفن ثابت" value="@if(isset($user->tell)){{$user->tell}}@endif" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">تاریخ تولد</label>
                                                            <input type="text" name="birthdate" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام صاحب حساب</label>
                                                            <input type="text" name="saheb_hesab" class="form-control position-relative" id="validationTooltip01"  placeholder="صاحب حساب" value="@if(isset($user->saheb_hesab)){{$user->saheb_hesab}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره حساب</label>
                                                            <input type="text" name="hesab" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره حساب" value="@if(isset($user->hesab)){{$user->hesab}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره شبا</label>
                                                            <input type="text" name="shaba" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره شبا" value="@if(isset($user->shaba)){{$user->shaba}}@endif" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> آدرس مطب</label>
                                                            <input type="text" name="address" class="form-control position-relative" id="validationTooltip01"  placeholder="آدرس مطب" value="@if(isset($user->address)){{$user->address}}@endif" required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> تصویر مجوز با فرمت jpg یا png</label>
                                                            <input type="file" name="image" class="form-control position-relative" id="validationTooltip01"  required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> تصویر کارت ملی با فرمت jpg یا png</label>
                                                            <input type="file" name="image_k" class="form-control position-relative" id="validationTooltip01"  required="">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01"> تخصص</label>
                                                            <select name="field" id="validationTooltip01" class="form-control position-relative" required>
                                                                <option value="0" disabled>زمینه تخصصی خود را انتخاب کنید</option>
                                                                @foreach($fields as $key =>$value)
                                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره همراه</label>
                                                            <input type="text" name="phone" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره همراه" value="@if(isset($user->phone)){{$user->phone}}@endif" required="">
                                                        </div>

                                                    </div>
                                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

                                                    @if(!isset($user))
                                                        <button class="btn btn-primary" type="submit">افزودن پزشک</button>
                                                    @else
                                                        <button class="btn btn-success" type="submit">ویرایش پزشک</button>
                                                        <a class="btn btn-primary" href="{{url("admin/doctors")}}">لغو ویرایش</a>
                                                    @endif
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

@section("footer2")
    <script type="text/javascript" src="{{url("/component")}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/persianDatepicker.min.js"></script>
@endsection