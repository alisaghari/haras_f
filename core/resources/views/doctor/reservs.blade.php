@extends("doctor.master")
@section("content")
    <?php
    $jdf = new \App\lib\Jdf();
    ?>

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card" >
                    <div class="card-body" style="padding-bottom: 0px">
                        <h4 class="card-title">درخواست های رزرو شده</h4>
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
                                                            <th>زمان</th>
                                                            <th>نام بیمار</th>
                                                            <th>شمار همراه</th>
                                                            <th>جنسیت</th>
                                                            <th>کد ملی</th>
                                                            <th>کد رزرو</th>
                                                            <th>وضعیت</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php

                                                        ?>
                                                        @foreach($rezervs as $key =>$value)
                                                            <tr>
                                                                <td>{{$value->rezerv_date}}</td>
                                                                <td>{{$value->rezerv_time}}</td>
                                                                <td>{{$value->name}}</td>
                                                                <td>{{$value->phone}}</td>
                                                                <td>{{$value->sex}}</td>
                                                                <td>{{$value->n_code}}</td>
                                                                <td>{{$value->patient_code}}</td>
                                                                <?php
                                                                $shamsi_date = explode('/',$value->rezerv_date);
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
