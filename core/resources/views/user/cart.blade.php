@extends("user.master")

@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <?php $i=0?>
                @foreach($carts as $cart)
                <div class=" col-xl-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                    <div>
                                        <div style="position: absolute;z-index: 9999  ; width: 100% ; left: 0;top: 0 ; text-align: center ">
                                            <h1 style="margin-top: 25% ; color: black ; direction: ltr">{{$cart->cart_number}}</h1>
                                            <h5 style="margin-top: 5% ; color: black ; padding-left: 20px ; padding-right: 20px">{{$cart->user->f_name}} {{$cart->user->l_name}}  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   تاریخ انقضا {{$cart->expire_date}}</h5>
                                            <h5 style="margin-top: 5% ; color: black ; padding-left: 20px ; padding-right: 20px">cvv2 {{$cart->cvv2}}</h5>
                                        </div>
                                        <img src="{{url("/card.jpg")}}" style="width: 100% ; position: relative; z-index: 1000 ; border-radius: 10px" />
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php $i++?>
                @endforeach

            </div>

        </div>
    </div>

@endsection

@section("footer")

@endsection