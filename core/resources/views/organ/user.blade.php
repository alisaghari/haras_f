@extends("organ.master")

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
    <link rel="stylesheet" href="{{url("component/date_picker")}}/css/persianDatepicker-default.css" />
    <div class="container" style="margin-top: 30px">
               <div class="col-xl-12 col-md-12">
                   <div class="card" >
                       <div class="card-body" style="padding-bottom: 0px">
                           <h4 class="card-title">افزودن کاربر</h4>
                       </div>
                       <div class="card-body">
                           <div class="row" style="    background: linear-gradient(141deg, #1f6d9f 0%, #1fc8db 51%, #2cb5e8 75%);
    border-radius: 15px;
    box-shadow: 0px 0px 4px;
    padding: 23px;
    color: white;">
                           <div class="col-sm-4" style="font-size: 20px ; text-align: center ">نام پکیج : {{$package->title}}</div>
                           <div class="col-sm-4" style="font-size: 20px ; text-align: center">مبلغ پکیچ : {{number_format($package->price1)}} تومان </div>
                           <div class="col-sm-4" style="font-size: 20px ; text-align: center">مدت دوره : {{$package->day}} روز </div>
                           <div class="col-sm-6" style="font-size: 20px ; text-align: center; padding-top: 15px">نوع خدمات بیمه : {{$package->type}}</div>
                           <div class="col-sm-6" style="font-size: 20px ; text-align: center; padding-top: 15px">کد بیمه : {{$package->code}}</div>
                       </div>
                           <br/>
                           <form method="post" action="{{url("organ/user/add")}}"  onsubmit="return validateForm()">
                               <div class="row">
                                   <div class="col-sm-4">
                                        <input type="text" name="phone" maxlength="11" pattern="[0]{1}[9]{1}[0-9]{9}"  oninvalid="this.setCustomValidity('لطفا شماره درست وارد کنید')" oninput="setCustomValidity('')" class="form-control round" placeholder="شماره همراه" required>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="f_name" class="form-control round" placeholder="نام" required>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="l_name" class="form-control round" placeholder="نام خانوادگی" required>
                                   </div>
                               </div>

                               <div class="row" style="margin-top: 15px">
                                   <div class="col-sm-4">
                                       <input type="text" name="address" class="form-control round" placeholder="آدرس" required>
                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="n_code" id="n_code"  class="form-control round" placeholder="شماره ملی" required>
                                       <script type="text/javascript">
                                           function checkCodeMeli(code)
                                           {
                                               var L=code.length;
                                               if(L<8 || parseInt(code,10)==0)
                                                   return false;
                                               code=('0000'+code).substr(L+4-10);
                                               if(parseInt(code.substr(3,6),10)==0)
                                                   return false;
                                               var c=parseInt(code.substr(9,1),10), s=0;
                                               for(var i=0;i<9;i++)
                                                   s+=parseInt(code.substr(i,1),10)*(10-i);
                                               s=s%11;
                                               return (s<2 && c==s) || (s>=2 && c==(11-s));
                                           }
                                       </script>

                                   </div>
                                   <div class="col-sm-4">
                                       <input type="text" name="bd" id="elementId" autocomplete="off" class="form-control round" placeholder="تاریخ تولد" required>
                                   </div>
                               </div>
                               <div class="row" style="margin-top: 15px">

                                   <div class="col-sm-6">
                                       @csrf
                                       <input class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" type="submit" value="افزودن">
                                   </div>

                               </div>
                           </form>
                           <div class="row" style="
                           background:linear-gradient(141deg, #189100 0%, #69f827 51%, #22d100 75%);
                           border-radius: 15px;
                           box-shadow: 0px 0px 4px;
                           padding: 23px;
                           color: white;">
                               <div class="col-sm-4" style="font-size: 20px ; text-align: center "> مجموع مبلغ : {{number_format($tp)}} تومان </div>
                               <div class="col-sm-4" style="font-size: 20px ; text-align: center">تعداد اشخاص : {{$count}} </div>
                               <div class="col-sm-4" style="font-size: 20px ; text-align: center">
                                   <form method="post" action="{{url("organ/payment")}}">
                                       @csrf
                                       <input type="submit" class="btn btn-black" value="پرداخت" >
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

    </div>
@endsection

@section("footer")
    <script src="{{url("component/date_picker")}}/js/jquery-1.10.1.min" ></script>
    <script src="{{url("component/date_picker")}}/js/persianDatepicker.min.js"></script>
    <style>
        .dow,.cell,.monthYear,.goToday {
            font-family:inherit !important;
        }
    </style>
    <script>
        $("#elementId").persianDatepicker({
            cellWidth: 40,
            cellHeight: 40,
            fontSize: 18,

        });
    </script>
    <script type="text/javascript">
        function validateForm()
        {
            var meli_code = document.getElementById("n_code").value;
            if (meli_code.length == 10)
            {
                if(meli_code=='1111111111' || meli_code=='2222222222' || meli_code=='3333333333' || meli_code=='4444444444' || meli_code=='5555555555'  || meli_code=='6666666666'  || meli_code=='7777777777'  || meli_code=='8888888888'  || meli_code=='9999999999' )
                {
                    alert(11);
                }else{
                    c = parseInt(meli_code.charAt(9));
                    n = parseInt(meli_code.charAt(0))*10 + parseInt(meli_code.charAt(1))*9 + parseInt(meli_code.charAt(2))*8 + parseInt(meli_code.charAt(3))*7 + parseInt(meli_code.charAt(4))*6 + parseInt(meli_code.charAt(5))*5 + parseInt(meli_code.charAt(6))*4 + parseInt(meli_code.charAt(7))*3 + parseInt(meli_code.charAt(8))*2;
                    r = n - parseInt(n/11)*11;
                    if ((r == 0 && r == c) || (r == 1 && c == 1) || (r > 1 && c == 11 - r))
                    {
                      //  alert('کد ملی صحیح می باشد');
                    }
                    else
                    {
                        alert('کد ملی وارد شده معتبر نمی باشد');
                        return false;
                    }
                }
            }else{
                alert('کد ملی وارد شده معتبر نمی باشد');
                return false;
            }

        }


    </script>

@endsection
