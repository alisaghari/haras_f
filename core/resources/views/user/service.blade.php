@extends("user.master")

@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <?php $i=0?>
                @foreach($packages as $package)
                <div class=" col-xl-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{url("/user/package/order")}}" method="post" class="form-group">
                                    @csrf
                                    <input type="hidden" value="{{$i}}" name="p_row">
                                    <h5>{{$package->title}}</h5>
                                    <p>
                                        <label for="validationTooltip01">تعداد افراد</label>
                                        <input type="hidden" name="p_id" value="{{$package->id}}">
                                        <select name="count"  class="form-control position-relative"  onchange="showname(this.value,{{$i}})">
                                            <option value="1"> یک نفر {{number_format($package->price1)}}  تومان</option>
                                            <option value="2"> دو نفر{{number_format($package->price2)}} تومان </option>
                                            <option value="3"> سه نفر{{number_format($package->price3)}} تومان </option>
                                            <option value="4"> چهار نفر{{number_format($package->price4)}} تومان  </option>
                                            <option value="5"> پنج نفر{{number_format($package->price5)}} تومان </option>
                                        </select>
                                    <div class="row" id="dynaname{{$i}}">
                                        <div class="col-md-4 mb-3">
                                            <input type="text" name="namedyn00" class="form-control position-relative" id="validationTooltip01"  placeholder="نام شخص بیمه شده در این پکیج" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" name="n_codedyn00" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" name="birthdatedyn00" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                        </div>

                                    </div>
                                    <script>

                                        function showname(value,c) {
                                            $("#dynaname"+c).html("");
                                            value=value-1;
                                            for(var i=0;i<=value;i++){
                                                $("#dynaname"+c).append('<div class="col-md-4 mb-3"> <input type="text" name="namedyn'+c+''+i+'" class="form-control position-relative" id="validationTooltip01"  placeholder="نام شخص بیمه شده در این پکیج" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> <div class="col-md-4 mb-3"> <input type="text" name="n_codedyn'+c+''+i+'" class="form-control position-relative" id="validationTooltip01"  placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div> <div class="col-md-4 mb-3"> <input type="text" name="birthdatedyn'+c+''+i+'" class="form-control position-relative" id="validationTooltip01"  placeholder="تاریخ تولد" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required=""> </div>')
                                            }
                                        }
                                    </script>
                                    </p>
                                    <button type="submit" class="btn btn-warning block-custom-message">خرید پکیج</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php $i++?>
                @endforeach

            </div>

        </div>
    </div>

@endsection

@section("footer")

@endsection