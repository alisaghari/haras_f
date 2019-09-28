@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">افزودن زمینه تخصصی پزشکان</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">پزشکان</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن زمینه تخصصی
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
                                <label class="card-title primary" for="inputDanger"><strong>افزودن زمینه تخصصی</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($field))
                                        <form action="{{url("admin")}}/doctor/field/add" method="post" class="needs-validation was-validated" novalidate="">
                                            @else
                                                <form action="{{url("admin")}}/doctor/field/update" method="post" class="needs-validation was-validated" novalidate="">
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    @endif
                                                    @csrf

                                                    <div class="form-row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-4 mb-4">
                                                            <label for="validationTooltip01">نام</label>
                                                            <input type="text" name="name" class="form-control position-relative" id="validationTooltip01"  placeholder="عنوان تخصص" value="@if(isset($field->name)){{$field->name}}@endif" required="">
                                                        </div>
                                                    </div>

                                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

                                                    <div class="form-row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-4 mb-4">
                                                            @if(!isset($field))
                                                                <button class="btn btn-primary" type="submit">افزودن تخصص</button>
                                                            @else
                                                                <button class="btn btn-success" type="submit">ویرایش تخصص</button>
                                                                <a class="btn btn-primary" href="{{url("admin/doctor/fields")}}">لغو ویرایش</a>
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

@section("footer2")
    <script type="text/javascript" src="{{url("/component")}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="{{url("/component")}}/date_picker/js/persianDatepicker.min.js"></script>
@endsection