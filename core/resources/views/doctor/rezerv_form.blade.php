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
                        <form method="post" action="{{url("doctor/rezerv_doctor")}}">
                            <input type="hidden" value="{{$doctor_id}}" name="doctor_id">
                            <input type="hidden" value="{{$time}}" name="time">
                            <input type="hidden" value="{{$date}}" name="date">
                            @csrf
                            <div class="row" style="margin-top: 15px">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control round" name="name" id="name" placeholder="نام بیمار">
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control round" name="n_code" id="n_code" placeholder="کد ملی">
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control round" name="phone" id="phone" placeholder="شماره همراه">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-sm-4">
                                    <select name="sex" id="" class="form-control round">

                                            <option value="مرد">مرد</option>
                                            <option value="زن">زن</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control round" name="father_name" id="father_name" placeholder="نام پدر">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control round" name="birthdate" id="birthdate" placeholder="تاریخ تولد">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-sm-4">
                                    <input class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" type="submit" value="افزودن">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("footer")

@endsection
