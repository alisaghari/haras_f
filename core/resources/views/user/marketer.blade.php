@extends("user.master")

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
                            <h4 class="card-title">درخواست بازاریاب شدن</h4>
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
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <fieldset class="form-group">
                                                <label>شماره حساب :</label>
                                                <input type="text" name="title" id="roundText" class="form-control round" placeholder="شماره حساب">
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset class="form-group">
                                                <label>شماره شبا :</label>
                                                <input type="text" name="title" id="roundText" class="form-control round" placeholder="شماره شبا">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <fieldset class="form-group">
                                                <label>نام صاحب حساب :</label>
                                                <input type="text" name="title" id="roundText" class="form-control round" placeholder="نام صاحب حساب">
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset class="form-group">
                                                <label>تصویر کارت ملی :</label>
                                                <input type="file" name="title" id="roundText" class="form-control round" placeholder="تصویر">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <fieldset class="form-group">
                                                <button class="btn btn-primary round" type="submit" style="margin-bottom: 30px">ثبت درخواست</button>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6">
                                            <span style="float: right ; font-size: 18px">لینک ثبت نام سریع کاربر از طریق شما :</span> <a style="float: right; font-size: 18px"" href="{{url("user/login")}}?marketer=5781757">{{url("user/login")}}?marketer=5781757</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <span style="float: right; font-size: 18px">کد بازاریابی شما :</span> <span style="float: right; font-size: 18px" >5781757</span>
                                        </div>
                                    </div>
                                </form>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6" style=" font-size: 18px ;text-align: left ; padding-top: 10px ; color: green">
                                                مبلغ قابل تسویه : {{number_format("10000")}}
                                            </div>
                                            <fieldset class="form-group">
                                                <button class="btn btn-primary round" type="submit" style="margin-bottom: 30px">درخواست تسویه</button>
                                            </fieldset>
                                        </div>
                                    </form>
                                <h4>کاربران ثبت نام شده توسط من</h4>
                                <table class="table tab-bordered">
                                    <tr>
                                        <th>نام و نام خانوادگی</th>
                                        <th>مبلغ پرداخت شده</th>
                                    </tr>
                                    <tr>
                                        <td>علی صاغری</td>
                                        <th>{{ number_format(250000) }}</th>
                                    </tr>
                                </table>
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
