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
                            <h4 class="card-title">تعریف درصد ها</h4>
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
                                <form method="post" action="{{ url("admin/percentage/reg") }}">
                                    @csrf
                                <table class="table table-bordered">
                                    @foreach($percentages as $percentage)
                                        @if($percentage->type=="percentagekol")
                                    <tr>
                                        <th>نماینده کل</th>
                                        <td colspan="2"><input type="text" class="form-control" placeholder="درصد" value="{{$percentage->percent}}" name="percentagekol"/><input type="hidden" value="{{$percentage->id}}" name="typeidkol"/></td>
                                    </tr>@endif
                                            @if($percentage->type=="percentagejoz")
                                    <tr>
                                        <th>نماینده جزء</th>
                                        <td colspan="2"><input type="text" class="form-control" placeholder="درصد" value="{{$percentage->percent}}" name="percentagejoz"/><input type="hidden" value="{{$percentage->id}}" name="typeidjoz"/></td>
                                    </tr>@endif
                                                @if($percentage->type=="percentagebaz")
                                    <tr>
                                        <th>بازاریاب</th>
                                        <td colspan="2"><input type="text" class="form-control" placeholder="درصد" value="{{$percentage->percent}}" name="percentagebaz"/><input type="hidden" value="{{$percentage->id}}" name="typeidbaz"/></td>
                                    </tr>@endif
                                                    @if($percentage->type=="percentagenbaz")
                                    <tr>
                                        <th>بازاریاب نماینده</th>
                                        <td><input type="text" class="form-control" placeholder="درصد نماینده" value="{{$percentage->percent}}" name="percentagenbaz"/><input type="hidden" value="{{$percentage->id}}" name="typeidnbaz"/></td>
                                        <td><input type="text" class="form-control" placeholder="درصد بازاریاب" value="{{$percentage->percent2}}" name="percentagebazn"/></td>
                                    </tr>@endif
                                        @endforeach
                                        <tr>
                                            <td colspan="3"><input type="submit" class="btn btn-success" style="width: 100%" value="ثبت"></td>
                                        </tr>
                                </table>
                                </form>
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
