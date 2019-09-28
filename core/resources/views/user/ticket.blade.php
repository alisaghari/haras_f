@extends("user.master")

@section("content")
    <style>
        .chat-application .chats .chat-left .chat-content {
            float: right;
            margin: 0 20px 15px 0;
            text-align: right;
            color: #ffffff;
            background-color: #25b6c9;
            -webkit-box-shadow: 0 7px 12px 0 rgba(62, 57, 107, .16);
            box-shadow: 0 7px 12px 0 rgba(62, 57, 107, .16);
        }
        .chat-application .chats .chat-left .chat-content:before {
            right: -10px;
            left: auto;
            border-right-color: transparent;
            border-left-color: #4db6ac;
        }
    </style>
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> تیکت شماره {{$code}}</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body chat-application">
                                <div class="chats height-500">
                                    <div class="chats">
                                        @foreach($messages as $message)
                                        <div class="chat @if($message->type=="user") chat-left @endif">
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>{{$message->message}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                    <div class="col-12">
                                        <form method="post" action="{{url("user/support/send/message/".$code)}}">
                                            @csrf
                                        <fieldset>
                                            <div class="input-group position-relative has-icon-left">
                                                <div class="form-control-position">
                                                    <span id="basic-addon3"><i class="ft-image"></i></span>
                                                </div>
                                                <input type="text" name="message" class="form-control" placeholder="ارسال پیام" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary" >ارسال</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                        </form>
                                    </div>

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
