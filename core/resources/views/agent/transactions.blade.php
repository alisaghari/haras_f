@extends("agent.master")

@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>


        <div class="content-body">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">گزارشات تراکنش ها</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">کد خرید</th>
                                            <th scope="col">مبلغ</th>
                                            <th scope="col">وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=0;?>
                                        @foreach($transactions as $transaction)
                                            <?php $i++;?>
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <th scope="row">{{$transaction->OrderId}}</th>
                                            <td>{{number_format($transaction->Amount)}}  تومان </td>
                                            <td>@if($transaction->status==0)
                                                    <div class="alert round bg-warning alert-icon-left alert-dismissible" style="width: 218px !important;margin: 0px;" role="alert">
                                                        <span class="alert-icon">
                                                            <i class="ft-thumbs-down"></i>
                                                        </span>
                                                       پرداخت نا موفق

                                                    </div>
                                                @endif
                                                @if($transaction->status==1)
                                                    <div class="alert round bg-success alert-icon-left alert-dismissible" style="width: 218px !important;margin: 0px;" role="alert">
                                                        <span class="alert-icon">
                                                            <i class="ft-thumbs-up"></i>
                                                        </span>
                                                       پرداخت موفق

                                                    </div>
                                                @endif</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
