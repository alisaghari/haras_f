@extends('site.master')
@section('content')
    <?php
    $jdf = new \App\lib\Jdf();
    ?>

    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner bg-common" data-bg-image="{{url('websiteui')}}/img/figure/breadcumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <ul>
                            <li>
                                <a href="{{url('websiteui')}}/index.html">خانه</a>
                            </li>
                            <li>رزرو آنلاین</li>
                        </ul>
                        <h1>رزرو آنلاین</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
    <!-- Contact Page Area Start Here -->
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
                                                                <?php
                                                                $Time =$times->start.":00:00" ;
                                                                $v=$times->visit_time;
                                                                $T=0;
                                                                $rDate1 = \App\Rezerv::where('rezerv_date',$times->date)->where('rezerv_time',date('H:i:s',strtotime($Time)))->first();
                                                                if (!$rDate1){
                                                                echo"<tr>";
                                                                echo "<td>" . $times->date . " </td>";
                                                                echo "<td>" . date('H:i:s',strtotime($Time))  . " </td>";
                                                                ?>
                                                                <td><a href='{{url("rezerv_doctor").'/'.encrypt($times->user->id).'/'.encrypt(date('H:i:s',strtotime($Time))).'/'.encrypt($times->date)}}' ><button type="button" class="btn btn-success btn-min-width mr-1 mb-1" >رزرو</button></a></td>
                                                                <?php
                                                                echo"</tr>";
                                                                }

                                                                for($i=0;$i<(($times->end-$times->start)*60/100- ($v/100))/($v/100);$i++){
                                                                $T+=$v;
                                                                $echo = strtotime("+$T minutes", strtotime($Time));
                                                                $rDate = \App\Rezerv::where('rezerv_date',$times->date)->where('rezerv_time',date('H:i:s', $echo))->first();
                                                                if (!$rDate){
                                                                echo"<tr>";
                                                                echo "<td>" . $times->date . " </td>";
                                                                echo "<td>" . date('H:i:s', $echo)  . " </td>";
                                                                ?>
                                                                <td><a href='{{url("rezerv_doctor").'/'.encrypt($times->user->id).'/'.encrypt(date('H:i:s', $echo)).'/'.encrypt($times->date)}}'><button type="button" class="btn btn-success btn-min-width mr-1 mb-1" >رزرو</button></a></td>
                                                                <?php
                                                                echo"</tr>";
                                                                }
                                                                }
                                                                ?>
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
    <!-- Contact Page Area End Here -->
@endsection