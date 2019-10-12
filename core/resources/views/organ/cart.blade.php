<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Barat Hadian">
    <title>داشبورد تجزیه و تحلیل - قالب مدیریتی آفتاب پرست - بوت استرپ 4 برنامه وب مدرن و پوسته استاتیک داشبورد + کیت رابط کاربری</title>

    <link href='{{ url("userui") }}/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>



    <!-- BEGIN: Vendor CSS-->


    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <style>@page { size: A5 }
        html body {
            height: 100%;
            background-color: #f4f5fa;
            direction: ltr;
        }
        *{
            font-family: Vazir-FD;
        }
    </style>

</head>
<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A5" onload="window.print()">

<!-- Each sheet element should have the class "sheet" -->
<!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
<section class="sheet padding-0mm" style="height: auto">
    <?php $i=0?>
    @foreach($carts as $cart)
        @if($cart->type=="screen")

            <div id='DivIdToPrint' style="float: right">
                <div style="position: absolute;z-index: 9999  ; width: 100% ; left: 0 ; text-align: right ">
                    <div style="width: 50% ; float: right">
                        <span style="margin-top: 88px ; float: right ; margin-right: 120px ">{{$cart->user->f_name}} {{$cart->user->l_name}}</span>
                    </div>
                    <div style="width: 50% ; float: right">
                        <span style="margin-top: 93px ; float: right ; margin-right: 85px">{{$organ->organ_name}}</span>
                        <span style="margin-top: -7px ; float: right ; margin-right: 125px">{{$organ->f_name}} {{$organ->l_name}}</span>
                        <span style="width: 100%  ; float: right"><div style="width: 50% ; float: right"><span style="margin-top: -5px ; float: right ; margin-right: 67px ; font-size: 14px">{{$organ->tell}}</span></div><div style="width: 50%"><span style="margin-top: -5px ; float: right ; margin-right: 47px">{{$organ->birthdate}}</span></div></span>

                    </div>
                </div>
                <img src="{{url("/gharbal.jpg")}}" style="width: 100% ; position: relative; z-index: 1000 ; border-radius: 10px" />
            </div>
        @endif
        <?php $i++?>
    @endforeach

</section>

</body>






</html>
