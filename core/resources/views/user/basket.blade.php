@extends("user.master")

@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">پرداخت و درخواست صدور کارت</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="collapse"><i class="ft-minus"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-content collapse show">
                            <div class="card-body">
<?php $totalPrice=0?>
<?php $count=0?>
                                    @foreach($orders as $order)
                                        @foreach($order->packages as $package)
                                        <table class="table" >
                                            <thead class="bg-primary white">
                                            <?php $count+=1?>
                                            <tr>
                                                <th>#</th>
                                                <th>نام پکیج</th>
                                                <th>تعداد افراد</th>
                                                <th>مبلغ پرداختی</th>
                                                <th>حذف</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                    <tr>
                                        <th scope="row">{{$count}}</th>
                                        <td>{{$package->package->title}}</td>
                                        <td>{{$package->count}} نفر</td>
                                        <td>{{number_format($package->price)}} تومان</td>
                                        <?php $totalPrice+=$package->price?>

                                        <td><button class="btn btn-danger btn-sm">حذف</button></td>
                                    </tr>
                                            <tr>
                                                <td colspan="5" style="background-color: #f8f8f8 ; padding: 80px  ; padding-top: 5px ; padding-bottom: 0px">
                                                    <table class="table" >
                                                        <thead class="bg-warning white">
                                                        <tr>
                                                            <th>نام  و نام خانوادگی</th>
                                                            <th>تاریخ تولد</th>
                                                            <th>کد ملی</th>
                                                        </tr>
                                                        </thead>
                                                        @foreach($package->users as $user)
                                                        <tr>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->birthdate}}</td>
                                                            <td>{{$user->n_code}}</td>
                                                        </tr>
                                                            @endforeach
                                                    </table>
                                                </td>
                                            </tr>
                                            @endforeach
                                    <tr class="bg-success white">
                                        <td  style="text-align: left">
                                            <form method="post" action="{{url("user/package/pay")}}">
                                                @csrf
                                                <button type="submit" class="btn btn-primary block-custom-message">پرداخت</button>
                                            </form>
                                        </td>
                                        <td  style="text-align: left;font-size: 24px">تعداد سرویس ها</td>
                                        <td  style="text-align: left;font-size: 24px">{{$count}}</td>
                                        <td  style="text-align: left ; font-size: 24px">مبلغ نهایی</td>
                                        <td style="font-size: 24px">{{number_format($totalPrice)}} تومان</td>
                                    </tr>
                                            </tbody>
                                        </table>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("footer")

@endsection