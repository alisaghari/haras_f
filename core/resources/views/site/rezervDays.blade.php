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
    <div class="container" style="margin-top:15px; margin-bottom: 15px">
        <div class="content-body" style="background-color: white">
            <div id="user-profile">
                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                        <div class="media d-flex m-1 ">
                            <div class="align-left p-1">
                                <a href="#" class="profile-image">
                                    <?php
                                     $image = $user->documents()->where('type','profile_image')->get();
                                    if (isset($image[0]->image)){
                                        $src = url('upload/document').'/'.$image[0]->image;
                                    } else{
                                        $src= "#";
                                    }
                                    ?>
                                    <img src="{{$src}}" class="rounded-circle img-border height-150" alt="Card image">
                                </a>
                            </div>
                            <div class="media-body text-left  mt-1">
                                <h3 class="font-large-1 ">{{$user->f_name}} {{$user->l_name}}
                                    <span class="font-medium-1 ">({{$user->field}})</span>
                                </h3>
                                <p><i class="ft-map-pin "> </i> {{$user->city}} </p>
                                <span>آدرس مطب:</span>
                                <p class=" text-bold-300 d-none d-sm-block">
                                    {{$user->address}}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                        <div class="col-sm-2" style="margin-bottom: 15px">
                                            <a href="{{url("rezerv_times").'/'.encrypt($value->user->id).'/'.encrypt($value->date)}}'"> <button type="button" class="btn btn-info btn-lg btn-min-width btn-glow mr-1 mb-1" style="width: 100%">{{$value->date}}</button></a>
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


    <!-- Contact Page Area End Here -->
@endsection