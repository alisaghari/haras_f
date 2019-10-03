@extends("doctor.master")
@section("content")
    <?php
    $jdf = new \App\lib\Jdf();
    ?>

    <div class="container" style="margin-top: 15px">
        <section id="button-glow">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="text-align: center">می توانید روز های زیر را برای رزرو انتخاب کنید</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>

                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="row">

                                    @foreach($times as $key =>$value)
                                        <?php
                                        $shamsi_date = explode('/',$value->date);
                                        $date1=date_create($jdf->jalali_to_gregorian($shamsi_date[0],$shamsi_date[1],$shamsi_date[2],'/'));
                                        $date2=date_create(date("Y/m/d"));
                                        $diff=date_diff($date2,$date1);
                                        $difference = $diff->format("%R%a")
                                        ?>
                                        @if($difference > +0)
                                            <div class="col-sm-3" style="margin-bottom: 15px">
                                                <a href="{{url("doctor/self_rezerv_times").'/'.encrypt($value->user->id).'/'.encrypt($value->date)}}'"> <button type="button" class="btn btn-info btn-lg btn-min-width btn-glow mr-1 mb-1" style="width: 100%">{{$value->date}}</button></a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section("footer")

@endsection
