<?php

namespace App\Http\Controllers;

use App\agent_package;
use App\cart;
use App\marketer;
use App\order_package;
use App\package;
use App\transaction;
use App\User;
use App\user_package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{


    public function index()
    {
        $user=User::find($_SESSION["userId"]);
        $users_count = User::where("users.namayandeh_id", $_SESSION["userId"])->count("id");
        return view("agent.index")->with("user",$user)->with("users_count",$users_count);
    }


    public function user()
    {
        return view("agent.user");
    }

    public function add_user(Request $request)
    {

        $users = User::where("phone", $request->input("phone"))->orWhere("n_code", $request->input("n_code"))->get();
        $status = 1;
        foreach ($users as $user) {
            $status = 0;
        }
        if ($status == 1) {
            $user = new User();
            $user->phone = $request->input("phone");
            $user->f_name = $request->input("f_name");
            $user->l_name = $request->input("l_name");
            $user->address = $request->input("address");
            $user->tell = $request->input("tell");
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("birthdate");
            $user->cart = $request->input("cart");
            $user->bazaryab = $request->input("bazaryab");
            $user->namayandeh = $request->input("namayandeh");
            $user->namayandeh_id = $_SESSION["userId"];
            $user->status = 0;
            $user->type = 400;
            $user->save();
            \Illuminate\Support\Facades\Session::flash('message', 'با موفقیت ثبت شد');
            \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-success');
            \Illuminate\Support\Facades\Session::flash('title', 'عملیات  موفق');
            return redirect("agent/user/package/" . $user->id);
        } else {
            \Illuminate\Support\Facades\Session::flash('message', 'کاربر قبلا ثبت نام کرده هاست');
            \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-danger');
            \Illuminate\Support\Facades\Session::flash('title', 'عملیات  نا موفق');
            return redirect()->back()->withInput();
        }
    }

    public function users()
    {
        $users = User::leftJoin("carts","carts.user_id","users.id")->where("users.namayandeh_id", $_SESSION["userId"])->distinct('users.id')->get(['users.id','users.*','carts.status']);
        return view("agent.users")->with("users", $users);
    }

    public function package($id)
    {

        $packages = agent_package::join("packages","agent_packages.p_id","packages.id")->where("agent_packages.u_id",$_SESSION["userId"])->get();
        return view("agent.service")->with("packages", $packages)->with("id", $id);
    }


    public function package_order(Request $request)
    {
        $carts = cart::where("user_id", $request->input("id"))->where("status", 0)->get();
        $new = 1;
        foreach ($carts as $cart) {
            $new = 0;
            $cartId = $cart->id;
        }
        if ($new == 1) {
            $cartn = new cart();
            $cartn->user_id = $request->input("id");
            $cartn->cart_number = "نا مشخص";
            $cartn->cvv2 = "نا مشخص";
            $cartn->expire_date = "نا مشخص";
            $cartn->status = 0;
            $cartn->save();
            $cartId = $cartn->id;
        }

        $p = package::where("id", $request->input("p_id"))->first();
        $package = new order_package();
        $package->u_id = $request->input("id");
        $package->c_id = $cartId;
        $package->p_id = $request->input("p_id");
        $package->count = $request->input("count");
        if ($request->input("count") == 1) {
            $package->price = $p->price1;
        }

        if ($request->input("count") == 2) {
            $package->price = $p->price2;
        }

        if ($request->input("count") == 3) {
            $package->price = $p->price3;
        }

        if ($request->input("count") == 4) {
            $package->price = $p->price4;
        }

        if ($request->input("count") == 5) {
            $package->price = $p->price5;
        }

        $package->save();

        for ($i = 0; $i < $request->input("count"); $i++) {
            $id = $request->input("p_row") . $i;
            $userpackage = new user_package();
            $userpackage->name = $request->input("namedyn$id");
            $userpackage->n_code = $request->input("n_codedyn$id");
            $userpackage->birthdate = $request->input("birthdatedyn$id");
            $userpackage->o_id = $package->id;
            $userpackage->save();
        }
        return redirect("agent/user/basket/" . $request->input("id"));

    }

    public function basket($id)
    {
        $orders = cart::with("packages")->where("user_id", $id)->where("status", 0)->get();

        return view("agent.basket")->with("orders", $orders)->with("id", $id);
    }
    public function buy_for_user(Request $request){
        $orders = cart::with("packages")->where("user_id", $request->input("id"))->where("status", 0)->get();
        $totalPrice=0;
        foreach($orders as $order)
            foreach($order->packages as $package){
                $totalPrice+=$package->price;
            }

         $agent_credit=User::find($_SESSION["userId"])->credit;
         if($totalPrice>$agent_credit){
             \Illuminate\Support\Facades\Session::flash('message', 'متاسفانه اعتبار کافی ندارید اعتبار خود را افزایش دهید');
             \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-danger');
             \Illuminate\Support\Facades\Session::flash('title', 'عملیات نا موفق');
             return view("agent.credit");
         }else{
             \Illuminate\Support\Facades\Session::flash('message', 'خرید با موفقیت انجام شد');
             \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-success');
             \Illuminate\Support\Facades\Session::flash('title', 'عملیات  موفق');

             $update_price=$agent_credit-$totalPrice;
             User::where('id', $_SESSION["userId"])
                 ->update(['credit' => $update_price]);
             cart::where('user_id', $request->input("id"))->where('status', 0)
                 ->update(['status' => 1]);
             $orders = cart::with("packages")->where("user_id", $request->input("id"))->where("status", 0)->get();
             return view("agent.basket")->with("orders", $orders)->with("id", $request->input("id"));
         }
    }
    public function u_basket()
    {
        $users = User::join("carts","carts.user_id","users.id")->where("users.namayandeh_id", $_SESSION["userId"])->distinct('users.id')->get(['users.id','users.*','carts.status']);
        return view("agent.u_basket")->with("users", $users);
    }

    public function cart($id)
    {
        $carts = cart::with("user")->where("user_id", $id)->get();
        return view("agent.cart")->with("carts", $carts);
    }

    public function marketer(){
        $marketers=marketer::where("u_id",$_SESSION["userId"])->get();
        $exist=0;
        foreach ($marketers as $m){
            $exist=1;
        }
        if ($exist==0){
            return view("agent.marketer");
        }else{
            return view("agent.exist_marketer")->with("marketers",$marketers);
        }


    }

    public function marketer_register(Request $request){
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

        $marketers=marketer::where("u_id",$_SESSION["userId"])->get();
        $exist=0;
        foreach ($marketers as $m){
            $exist=1;
        }
        if ($exist==0){
            $marketer=new marketer();
            $marketer->u_id=$_SESSION["userId"];
            $marketer->shaba=$request->input("shaba");
            $marketer->hesab=$request->input("hesab");
            $marketer->saheb_hesab=$request->input("saheb_hesab");
            $marketer->code=$rand;
            $marketer->link_generate=url("user/login?code=$rand");
            $marketer->status=0;
            $marketer->save();
        }
        return redirect()->back();

    }

    public function credit(){
        return view("agent.credit");
    }

    public function payment(Request $request){

        $seed = str_split('0123456789asdfghjkl'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';


        foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
        ini_set ( "soap.wsdl_cache_enabled", "0" );


        $PIN = 'qsVv6HDk22U051nX2ql2';
        $wsdl_url = "https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?WSDL";
        $site_call_back_url = url("agent/payment/verify");

        $amount = $request->input("p")*10 ;

        $order_id = $rand;



        $params = array (
            "LoginAccount" => $PIN,
            "Amount" => $amount,
            "OrderId" => $order_id,
            "CallBackUrl" => $site_call_back_url
        );

        $client = new \SoapClient( $wsdl_url );

        try {
            $result = $client->SalePaymentRequest( array (
                "requestData" => $params
            ) );
            if ($result->SalePaymentRequestResult->Token && $result->SalePaymentRequestResult->Status === 0) {
                $transaction=new transaction();
                $transaction->u_id=$_SESSION["userId"];
                $transaction->user_type="agent";
                $transaction->Token=$result->SalePaymentRequestResult->Token;
                $transaction->status=0;
                $transaction->OrderId=$order_id;
                $transaction->TerminalNo="NO";
                $transaction->Amount=$amount/10;
                $transaction->RRN="NO";
                $transaction->save();
                header ( "Location: https://pec.shaparak.ir/NewIPG/?Token=" . $result->SalePaymentRequestResult->Token ); /* Redirect browser */
                exit ();
            }
            elseif ( $result->SalePaymentRequestResult->Status  != '0') {
                $err_msg = "(<strong> کد خطا : " . $result->SalePaymentRequestResult->Status . "</strong>) " .
                    $result->SalePaymentRequestResult->Message ;
            }
        } catch ( Exception $ex ) {
            $err_msg =  $ex->getMessage()  ;
        }
    }

    public function payment_verify(){

        $PIN = '62xnee208xDeqx5eVdAo';
        $wsdl_url = "https://pec.shaparak.ir/NewIPGServices/Confirm/ConfirmService.asmx?WSDL";

        $Token = $_REQUEST ["Token"];
        $status = $_REQUEST ["status"];
        $OrderId = $_REQUEST ["OrderId"];
        $TerminalNo = $_REQUEST ["TerminalNo"];
        $Amount = $_REQUEST ["Amount"];
        $RRN = $_REQUEST ["RRN"];

        $t=transaction::where("OrderId",$OrderId)->where("u_id",$_SESSION["userId"])->where("Token",$_REQUEST ["Token"])->first();
        if ($Amount==$t->Amount){

            if ($RRN > 0 && $status == 0) {

                $params = array (
                    "LoginAccount" => $PIN,
                    "Token" => $Token
                );

                $client = new \SoapClient( $wsdl_url );

                try {
                    $result = $client->ConfirmPayment ( array (
                        "requestData" => $params
                    ) );
                    if ($result->ConfirmPaymentResult->Status != '0') {
                        $err_msg = "(<strong> کد خطا : " . $result->ConfirmPaymentResult->Status . "</strong>) " .
                            $result->ConfirmPaymentResult->Message ;
                    }else{
                        $transaction= transaction::where("order_id",$OrderId)->where("u_id",$_SESSION["userId"])->where("Token",$_REQUEST ["Token"]);
                        $transaction->Token=$Token;
                        $transaction->status=$result->ConfirmPaymentResult->Status;
                        $transaction->order_id=$OrderId;
                        $transaction->TerminalNo=$TerminalNo;
                        $transaction->RRN=$_REQUEST ["RRN"];
                        $transaction->save();
                        User::where('id', $_SESSION["userId"])
                            ->update(['credit' => $Amount/10]);
                    }
                } catch ( Exception $ex ) {
                    $err_msg =  $ex->getMessage()  ;
                }
            }elseif($status) {
                $err_msg = "کد خطای ارسال شده از طرف بانک $status " . "";
            }else {

                $err_msg = "پاسخی از سمت بانک ارسال نشد " ;
            }

        }else{
            echo "مبلغ پرداختی با مبلغ بازگشتی در تناقض است (مشکل امنیتی) ";
        }


    }

    public function transactions(){
        $transactions=transaction::where("u_id",$_SESSION["userId"])->where("user_type","agent")->get();
        return view("agent.transactions")->with("transactions",$transactions);
    }
}
