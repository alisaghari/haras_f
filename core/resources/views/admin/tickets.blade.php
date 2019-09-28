@extends("admin.master")

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
                            <h4 class="card-title">تیکت های من</h4>
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
                                            <th scope="col">شماره تیکت</th>
                                            <th scope="col">عنوان تیکت</th>
                                            <th scope="col">وضعیت</th>
                                            <th scope="col">مشاهده</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=0;?>
                                        @foreach($tickets as $ticket)
                                            <?php $i++;?>
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <th scope="row">{{$ticket->ticket_code}}</th>
                                            <td>{{$ticket->title}}</td>
                                            <td>@if($ticket->status==0)
                                                    <div class="alert round bg-warning " style="width: 200px !important;margin: 0px;" role="alert">
                                                        در انتظار پاسخ
                                                    </div>
                                                @endif
                                                @if($ticket->status==1)
                                                    <div class="alert round bg-success " style="width: 200px !important;margin: 0px;" role="alert">
                                                        پاسخ داده شد
                                                    </div>
                                                @endif
                                            </td>
                                            <td><a class="btn btn-primary round" href="{{url("admin/support/ticket")}}/{{$ticket->u_id}}/{{$ticket->ticket_code}}" >مشاهده</a></td>
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
