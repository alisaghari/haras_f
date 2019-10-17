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
                           <form method="post" action="{{url("agent/marketer/register")}}">
                               @csrf
                               <div class="row">
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" name="shaba" placeholder="شماره شبا"/>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" name="hesab" placeholder="شماره حساب"/>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" name="saheb_hesab" placeholder="نام صاحب حساب"/>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-4">
                                       <input type="submit" class="btn btn-black" style="margin-top: 20px" value="ارسال درخواست">
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
