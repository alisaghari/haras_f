@extends("agent.master")

@section("content")
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
                           <h4 class="card-title">درخواست بازاریابی</h4>
                       </div>
                       <div class="card-body">
                           @foreach($marketers as $m)
                           <form>
                               @csrf
                               <div class="row">
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" disabled name="shaba" value="{{$m->shaba}}" placeholder="شماره شبا"/>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" disabled name="hesab" value="{{$m->hesab}}" placeholder="شماره حساب"/>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" disabled name="saheb_hesab" value="{{$m->saheb_hesab}}" placeholder="نام صاحب حساب"/>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-3">
                                       <input type="submit" disabled class="btn btn-black" style="margin-top: 20px" value="کد نماینده و لینک ثبت نام :">
                                   </div>
                                   <div class="col-sm-5">
                                       <input class="form-control" type="text" value="{{$m->link_generate}}" id="myInput">
                                        <a  onclick="myFunction()" style="margin-top: 25px ; float: right" href="#">{{$m->link_generate}}</a>
                                       <script>
                                           function myFunction() {
                                               var copyText = document.getElementById("myInput");
                                               copyText.select();
                                               copyText.setSelectionRange(0, 99999)
                                               document.execCommand("copy");
                                               alert("لینک بازاریابی کپی شد :" + copyText.value);
                                           }
                                       </script>
                                   </div>
                                   <div class="col-sm-4">
                                       <a style="margin-top: 25px ; float: right" href="">کدبازاریاب : {{$m->code}}</a>

                                   </div>
                               </div>
                           </form>
                               @endforeach
                       </div>
                   </div>
               </div>
           </div>
    </div>
@endsection

@section("footer")

@endsection
