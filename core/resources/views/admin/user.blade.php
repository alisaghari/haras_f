@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">افزودن کاربر جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">کاربران</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن کاربر جدید
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
                                <label class="card-title primary" for="inputDanger"><strong>افزودن کاربر جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($user))
                                        <form action="{{url("admin")}}/user/add" method="post" class="needs-validation was-validated" novalidate="">
                                            @else
                                                <form action="{{url("admin")}}/user/update" method="post" class="needs-validation was-validated" novalidate="">
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    @endif
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام</label>
                                                            <input type="text" name="f_name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام" value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
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
                                                            <label for="validationTooltip01">شماره تماس همراه</label>
                                                            <input type="text" name="phone" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره تماس همراه" value="@if(isset($user->phone)){{$user->phone}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">تاریخ تولد</label>
                                                            <input type="text" name="birthdate" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip01">آدرس</label>
                                                            <input type="text" name="address" class="form-control position-relative" id="validationTooltip01"  placeholder="آدرس" value="@if(isset($user->address)){{$user->address}}@endif" required="">
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره کارت</label>
                                                            <input type="text" name="cart_number" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره کارت" value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">شماره کارت کاربر</label>
                                                            <input type="text" name="cart_number_user" class="form-control position-relative" id="validationTooltip01"  placeholder="شماره کارت کاربر" value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">cvv2</label>
                                                            <input type="text" name="cvv2" class="form-control position-relative" id="validationTooltip01"  placeholder="cvv2" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">تاریخ انقضا</label>
                                                            <input type="text" name="expire_date" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ انقضا" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row" id="dynamic_form">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationTooltip01">انتخاب پیکج</label>
                                                       <select name="p_id[]"  class="form-control position-relative" style="direction: rtl">
                                                           @foreach($packages as $package)
                                                               <option value="{{$package->id}}">{{$package->title}}  (  {{" 1 نفره :".$package->price1}} -{{" 2 نفره :".$package->price2}} -{{"  3 نفره :".$package->price3}} -{{" 4 نفره :".$package->price4}} -{{" 5 نفره :".$package->price5}} )</option>
                                                           @endforeach
                                                       </select>
                                                        </div>

                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationTooltip01">تعداد افراد</label>
                                                            <select name="count[]"  class="form-control position-relative" onchange="showname(this.value,0)">
                                                                <option value="1">یک نفر</option>
                                                                <option value="2">دو نفر</option>
                                                                <option value="3">سه نفر</option>
                                                                <option value="4">چهار نفر</option>
                                                                <option value="5">پنج نفر</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-2 mb-3">
                                                            <input type="button" id="adddyn" onclick="adddyn()"  class="btn btn-primary" id="validationTooltip01"   value="افزودن" required="" style="margin-top: 25px">
                                                        </div>
                                                    <div class="col-sm-12">
                                                        <div class="row" id="dynaname0">
                                                            <div class="col-md-4 mb-3">
                                                            <input type="text" name="namedyn00" class="form-control position-relative" id="validationTooltip01"  placeholder="نام شخص بیمه شده در این پکیج" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                            <input type="text" name="n_codedyn00" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                            <input type="text" name="birthdatedyn00" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    </div>
                                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

                                                    <script>
                                                        var xx=0;
                                                        $('#adddyn').click(function(){
                                                             xx = xx + 1;
                                                            $("#dynamic_form").append('<div class="col-md-6 mb-3"> <label for="validationTooltip01">انتخاب پیکج</label> <select name="p_id[]"  class="form-control position-relative" >@foreach($packages as $package)<option value="{{$package->id}}">{{$package->title}}  {{" 1 نفره :".$package->price1}} -{{" 2 نفره :".$package->price2}} -{{"  3 نفره :".$package->price3}} -{{" 4 نفره :".$package->price4}} -{{" 5 نفره :".$package->price5}}</option>@endforeach</select> </div> <div class="col-md-4 mb-3"> <label for="validationTooltip01">تعداد افراد</label> <select name="count[]"  onchange="showname(this.value,'+xx+')"  class="form-control position-relative"> <option value="1">یک نفر</option> <option value="2">دو نفر</option> <option value="3">سه نفر</option> <option value="4">چهار نفر</option> <option value="5">پنج نفر</option> </select> </div><div class="col-md-2 mb-3"></div><div class="col-sm-12"> <div class="row" id="dynaname'+xx+'"> <div class="col-md-4 mb-3"> <input type="text" name="namedyn'+xx+'0" class="form-control position-relative" id="validationTooltip01"  placeholder="نام شخص بیمه شده در این پکیج" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> <div class="col-md-4 mb-3"> <input type="text" name="n_codedyn'+xx+'0" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> <div class="col-md-4 mb-3"> <input type="text" name="birthdatedyn'+xx+'0" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> </div> </div>');

                                                        });

                                                                        function showname(value,c) {
                                                        $("#dynaname"+c).html("");
                                                                            value=value-1;
                                                                         for(var i=0;i<=value;i++){
                                                                             $("#dynaname"+c).append('<div class="col-md-4 mb-3"> <input type="text" name="namedyn'+c+''+i+'" class="form-control position-relative" id="validationTooltip01"  placeholder="نام شخص بیمه شده در این پکیج" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> <div class="col-md-4 mb-3"> <input type="text" name="n_codedyn'+c+''+i+'" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> <div class="col-md-4 mb-3"> <input type="text" name="birthdatedyn'+c+''+i+'" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div>')
                                                                         }
                                                                        }
                                                    </script>

                                                    @if(!isset($user))
                                                        <button class="btn btn-primary" type="submit">افزودن کاربر</button>
                                                    @else
                                                        <button class="btn btn-success" type="submit">ویرایش کاربر</button>
                                                        <a class="btn btn-primary" href="{{url("admin/users")}}">لغو ویرایش</a>
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