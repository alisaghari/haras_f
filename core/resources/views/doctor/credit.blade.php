@extends("doctor.master")

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
                            <h4 class="card-title"> افزایش اعتبار (اعتبار شما {{number_format($user->credit)}}  تومان)</h4>
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
                                <button type="button" class="btn btn-bg-gradient-x-purple-blue col-6 col-md-4 mr-1 mb-1">افزایش اعتبار</button>
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
