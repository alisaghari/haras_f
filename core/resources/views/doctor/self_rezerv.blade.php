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
                        <h4 class="card-title">رزرو</h4>
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
                                                            <th>ساعت</th>
                                                            <th>رزرو</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($times as $key =>$value)
                                                            <?php
                                                            $shamsi_date = explode('/',$value->date);
                                                            $date1=date_create($jdf->jalali_to_gregorian($shamsi_date[0],$shamsi_date[1],$shamsi_date[2],'/'));
                                                            $date2=date_create(date("Y/m/d"));
                                                            $diff=date_diff($date2,$date1);
                                                            $difference = $diff->format("%R%a")
                                                            ?>
                                                            @if($difference > +0)
                                                                <?php
                                                                $Time =$value->start.":00:00" ;
                                                                $v=$value->visit_time;
                                                                $T=0;
                                                                $rDate1 = \App\Rezerv::where('rezerv_date',$value->date)->where('rezerv_time',date('H:i:s',strtotime($Time)))->first();
                                                                if (!$rDate1){
                                                                echo"<tr>";
                                                                echo "<td>" . $value->date . " </td>";
                                                                echo "<td>" . date('H:i:s',strtotime($Time))  . " </td>";
                                                                echo "<td>".$value->user->address."</td>";
                                                                echo "<td>".$value->user->tell."</td>";
                                                                ?>
                                                                <td><a style="font-size: 1em" class="btn btn-icon btn-success mr-1" href='{{url("doctor/rezerv_doctor").'/'.encrypt($value->user->id).'/'.encrypt(date('H:i:s',strtotime($Time))).'/'.encrypt($value->date)}}' >رزرو</a></td>
                                                                <?php
                                                                echo"</tr>";
                                                                }

                                                                for($i=0;$i<(($value->end-$value->start)*60/100- ($v/100))/($v/100);$i++){
                                                                $T+=$v;
                                                                $echo = strtotime("+$T minutes", strtotime($Time));
                                                                $rDate = \App\Rezerv::where('rezerv_date',$value->date)->where('rezerv_time',date('H:i:s', $echo))->first();
                                                                if (!$rDate){
                                                                echo"<tr>";
                                                                echo "<td>" . $value->date . " </td>";
                                                                echo "<td>" . date('H:i:s', $echo)  . " </td>";
                                                                ?>
                                                                <td><a style="font-size: 1em" class="btn btn-icon btn-success mr-1" href='{{url("doctor/rezerv_doctor").'/'.encrypt($value->user->id).'/'.encrypt(date('H:i:s', $echo)).'/'.encrypt($value->date)}}' >رزرو</a></td>
                                                                <?php
                                                                echo"</tr>";
                                                                }
                                                                }
                                                                ?>
                                                            @endif
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
