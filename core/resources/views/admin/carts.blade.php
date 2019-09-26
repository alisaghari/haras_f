@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2" style="text-align: right  ;  padding: 15px;">
                <h3 class="content-header-title">لیست کارت ها</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-left">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">کارت ها</a>
                            </li>
                            <li class="breadcrumb-item active">لیست کارت ها
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
                                        <div class="col-sm-12">
                                            <a href="{{url("admin/carts/1")}}" class="btn btn-success" style="float: right ; margin-right: 15px ; color: white">پرداخت شده ها</a>
                                            <a href="{{url("admin/carts/2")}}" class="btn btn-purple" style="float: right ; margin-right: 15px ; color: white">در حال صدور</a>
                                            <a href="{{url("admin/carts/3")}}" class="btn btn-primary" style="float: right ; margin-right: 15px ; color: white">صادر شده ها</a>
                                            <a href="{{url("admin/carts/0")}}" class="btn btn-danger" style="float: right ; margin-right: 15px ; color: white">پرداخت نشده ها</a>
                                            <a href="{{url("admin/carts/4")}}" class="btn btn-warning" style="float: right ; margin-right: 15px ; color: black">مفقودی</a>
                                        </div>
                                    </div>
                                    @csrf

                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table">

                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($carts as $cart)
                                        <?php
                                        $i++;
                                        ?>
                                        <tr>
                                            <td colspan="12">
                                                <form method="post" action="{{url("admin/carts/change/status/cart/data")}}">
                                                    @csrf
                                                <table  style="width: 100%">
                                                    <thead class="bg-primary white">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>نام</th>
                                                        <th>نام خانوادگی</th>
                                                        <th>شماره تلفن</th>
                                                        <th>کد ملی</th>
                                                        <th>شماره کارت</th>
                                                        <th>cvv2</th>
                                                        <th>تاریخ انقضا</th>
                                                        <th>وضعیت</th>
                                                        <th>مشاهده پکیج ها</th>
                                                        <th>تایید</th>
                                                    </tr>
                                                    </thead>
                                                    <td>{{$i}}</td>
                                                    <td>{{$cart->user->f_name}}</td>
                                                    <td>{{$cart->user->l_name}}</td>
                                                    <td>{{$cart->user->phone}}</td>
                                                    <td>{{$cart->user->n_code}}</td>
                                                    <td style="direction: ltr !important; ;text-align: right">
                                                        @if($cart->status==2 || $cart->status==4)
                                                            <input type="text" class="form-control"  style="border-color: purple" name="cart_number" placeholder="شماره کارت را وارد کنید">
                                                            <input type="hidden"  name="cart_id" value="{{$cart->id}}">
                                                        @else
                                                            {{$cart->cart_number}}
                                                        @endif
                                                    </td>

                                                        <td>
                                                            @if($cart->status==2 || $cart->status==4)
                                                                <input type="text" class="form-control" style="border-color: purple" name="cvv2" placeholder="cvv2 را وارد کنید">
                                                            @else
                                                                {{$cart->cvv2}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($cart->status==2 || $cart->status==4)
                                                                <input type="text" class="form-control"  style="border-color: purple" name="expire_date" placeholder="تاریخ انقضا">
                                                            @else
                                                                {{$cart->expire_date}}
                                                            @endif
                                                        </td>
                                                        <td>@if($cart->status==0) پرداخت نشده @endif @if($cart->status==1) پرداخت شده @endif @if($cart->status==2) در حال صدور کارت @endif @if($cart->status==3) تایید نهایی شده @endif @if($cart->status==4) مفقودی @endif</td>
                                                        <td>
                                                            <a href="{{url("admin/carts")}}/{{$cart->id}}/2" class="btn btn-icon btn-primary mr-1"><i class="fa fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            @if($cart->status==1)
                                                                <a href="{{url("admin")}}/carts/{{$cart->id}}/2" class="btn btn-icon btn-success mr-1"><i class="fa fa-check"></i></a>
                                                            @endif
                                                            @if($cart->status==2 || $cart->status==4)
                                                                <button type="submit" class="btn btn-icon btn-success mr-1">ثبت اطلاعات</button>
                                                            @endif
                                                        </td>
                                                </table>
                                                </form>
                                            </td>
                                        </tr>
                                        </form>
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