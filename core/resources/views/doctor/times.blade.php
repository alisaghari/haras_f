@extends("doctor.master")
@section("content")
    <?php
    $jdf = new \App\lib\Jdf();
    ?>

    @if(Session::has('message'))
        <div class="container" style="margin-top: 40px">
            <div class="alert {{ Session::get('alert-class') }} border-0 alert-dismissible mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="alert-heading mb-2">{{ Session::get('title') }}</h4>
                <p>{{ Session::get('message') }}</p>
            </div>
        </div>
    @endif

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card" >
                    <div class="card-body" style="padding-bottom: 0px">
                        <h4 class="card-title">زمان های پذیرش</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url("doctor/times")}}">

                            <div class="row" style="margin-top: 15px">
                                <input type="hidden" name="doctor_id" value="{{$id}}">
                                <div class="col-sm-2">
                                    <select name="start" id="" class="form-control round">
                                        @foreach($times as $key =>$value)
                                            <option value="{{$value->start}}">{{$value->start}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="end" id="" class="form-control round">
                                        @foreach($times as $key =>$value)
                                            <option value="{{$value->end}}">{{$value->end}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control round" name="date" id="date" placeholder="تاریخ" autocomplete="off">
                                </div>
                                <div class="col-sm-4">
                                    <input type="number"  class="form-control round" name="visit_time" placeholder="زمان هر ویزیت به دقیقه">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-sm-4">
                                    @csrf
                                    <input class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" type="submit" value="افزودن">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card" >
                    <div class="card-body" style="padding-bottom: 0px">
                        <h4 class="card-title">زمان های پذیرش</h4>
                    </div>
                    <div class="card-body">
                        <section id="configuration">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-body card-dashboard">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                        <tr>
                                                            <th>تاریخ</th>
                                                            <th>زمان شروع</th>
                                                            <th>زمان پایان</th>
                                                            <th>زمان هر ویزیت</th>
                                                            <th>وضعیت</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php

                                                        ?>
                                                        @foreach($doctorTimes as $key =>$value)
                                                            <tr>
                                                                <td>{{$value->date}}</td>
                                                                <td>{{$value->start}}</td>
                                                                <td>{{$value->end}}</td>
                                                                <td>{{$value->visit_time}}</td>
                                                                <?php
                                                                $shamsi_date = explode('/',$value->date);
                                                                $date1=date_create($jdf->jalali_to_gregorian($shamsi_date[0],$shamsi_date[1],$shamsi_date[2],'/'));
                                                                $date2=date_create(date("Y/m/d"));
                                                                $diff=date_diff($date2,$date1);
                                                                $difference = $diff->format("%R%a")
                                                                ?>
                                                                @if($difference <+0)
                                                                    <td style="color: #000;" class="bg-danger">{{ 'منقضی شده' }}</td>
                                                                @else
                                                                    <td style="color: #000" class="bg-success">{{"معتبر"}}</td>
                                                                @endif

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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")

@endsection
