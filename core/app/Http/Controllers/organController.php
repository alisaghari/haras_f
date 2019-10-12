<?php

namespace App\Http\Controllers;

use App\cart;
use App\order_package;
use App\package;
use App\transaction;
use App\User;
use App\user_package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class organController extends Controller
{


    public function index()
    {
        return view("organ.index");
    }


    public function user()
    {
        $user=User::where("id",$_SESSION["userId"])->first();
        $package=package::where("id",$user->p_id)->first();

         $users = User::join("carts","users.id","carts.user_id")->where("namayandeh_id", $_SESSION["userId"])->where("carts.status",0)->get();
        $count=0;
        $tp=0;
        foreach ($users as $user){
            $count++;
        }
        $tp=$package->price1 * $count;
        return view("organ.user")->with("package",$package)->with("tp",$tp)->with("count",$count);
    }
    public function delete($id){
        User::find($id)->delete();
        return redirect()->back();
    }
    public function add_user(Request $request)
    {
        $userb=User::where("id",$_SESSION["userId"])->first();
        $packageb=package::where("id",$userb->p_id)->first();

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
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("bd");
            $user->namayandeh_id = $_SESSION["userId"];
            $user->status = 0;
            $user->type = 400;
            $user->save();

            $carts = cart::where("user_id", $user->id)->where("status", 0)->get();
            $new = 1;
            foreach ($carts as $cart) {
                $new = 0;
                $cartId = $cart->id;
            }
            if ($new == 1) {
                $cartn = new cart();
                $cartn->user_id = $user->id;
                $cartn->cart_number = "نا مشخص";
                $cartn->cvv2 = "نا مشخص";
                $cartn->expire_date = "نا مشخص";
                $cartn->status = 0;
                $cartn->type = "screen";
                $cartn->n_id = $_SESSION["userId"];
                $cartn->save();
                $cartId = $cartn->id;
            }
            $p = package::where("id", $packageb->id)->first();
            $package = new order_package();
            $package->u_id = $user->id;
            $package->c_id = $cartId;
            $package->p_id = $packageb->id;
            $package->count = 1;
            $package->price = $p->price1;
            $package->save();

            $userpackage = new user_package();
            $userpackage->name = $request->input("f_name")." ".$request->input("l_name");
            $userpackage->n_code = $request->input("n_code");
            $userpackage->birthdate = $request->input("birthdate");
            $userpackage->o_id = $package->id;
            $userpackage->save();

            \Illuminate\Support\Facades\Session::flash('message', 'با موفقیت ثبت شد');
            \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-success');
            \Illuminate\Support\Facades\Session::flash('title', 'عملیات  موفق');
            return redirect()->back()->withInput();
        } else {
            \Illuminate\Support\Facades\Session::flash('message', 'کاربر قبلا ثبت نام کرده هاست');
            \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-danger');
            \Illuminate\Support\Facades\Session::flash('title', 'عملیات  نا موفق');
            return redirect()->back()->withInput();
        }
    }







    public function basket($id)
    {

        $orders = cart::with("packages")->where("user_id", $id)->where("status", 0)->get();
        return view("organ.basket")->with("orders", $orders);
    }

    public function u_basket()
    {
        $user=User::where("id",$_SESSION["userId"])->first();
        $package=package::where("id",$user->p_id)->first();

        $users = User::join("carts","users.id","carts.user_id")->where("carts.n_id", $_SESSION["userId"])->where("carts.status",0)->get();
        $count=0;
        $tp=0;
        foreach ($users as $user){
            $count++;
        }
        $tp=$package->price1 * $count;

        $users = cart::join("users","carts.user_id","users.id")->where("carts.status",0)->where("carts.n_id", $_SESSION["userId"])->get();
        $organ=User::find($_SESSION["userId"]);
        return view("organ.u_basket")->with("users", $users)->with("organ", $organ)->with("tp",$tp)->with("count",$count);
    }
    public function paid_u_basket()
    {
        $users = cart::join("users","carts.user_id","users.id")->where("carts.status",0)->where("carts.n_id", $_SESSION["userId"])->get();
        $organ=User::find($_SESSION["userId"]);
        return view("organ.paid_u_basket")->with("users", $users)->with("organ", $organ);
    }

    public function cart($id)
    {
        $organ=User::find($_SESSION["userId"]);
        $carts = cart::with("user")->where("user_id", $id)->get();
        return view("organ.cart")->with("carts", $carts)->with("organ",$organ);
    }

    public function payment(Request $request){
        $user=User::where("id",$_SESSION["userId"])->first();
        $package=package::where("id",$user->p_id)->first();

        $users = User::join("carts","users.id","carts.user_id")->where("namayandeh_id", $_SESSION["userId"])->where("carts.status",0)->get();
        $count=0;
        $tp=0;
        foreach ($users as $user){
            $count++;
        }
        $tp=$package->price1 * $count;

        //generate order_code
        $seed = str_split('0123456789asdfghjkl'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';


        foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

        ini_set ( "soap.wsdl_cache_enabled", "0" );


        $PIN = '62xnee208xDeqx5eVdAo';
        $wsdl_url = "https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?WSDL";
        $site_call_back_url = url("organ/payment/verify");

        $amount = $tp*10 ;

        $order_id = $rand;

        $transaction=new transaction();
        $transaction->u_id=$_SESSION["userId"];
        $transaction->Token="NO";
        $transaction->status=0;
        $transaction->OrderId=$order_id;
        $transaction->TerminalNo="NO";
        $transaction->Amount=$amount;
        $transaction->RRN="NO";
        $transaction->save();

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
    public function payment_verify(Request $request){

        $PIN = '62xnee208xDeqx5eVdAo';
        $wsdl_url = "https://pec.shaparak.ir/NewIPGServices/Confirm/ConfirmService.asmx?WSDL";

        $Token = $_REQUEST ["Token"];
        $status = $_REQUEST ["status"];
        $OrderId = $_REQUEST ["OrderId"];
        $TerminalNo = $_REQUEST ["TerminalNo"];
        $Amount = $_REQUEST ["Amount"];
        $RRN = $_REQUEST ["RRN"];

        $t=transaction::where("OrderId",$OrderId)->where("u_id",$_SESSION["userId"])->first();
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
                        $transaction= transaction::where("order_id",$OrderId)->where("u_id",$_SESSION["userId"]);
                        $transaction->Token=$Token;
                        $transaction->status=$result->ConfirmPaymentResult->Status;
                        $transaction->order_id=$OrderId;
                        $transaction->TerminalNo=$TerminalNo;
                        $transaction->RRN="NO";
                        $transaction->save();
                        cart::where('n_id', $_SESSION["userId"])
                            ->update(['status' => 1]);
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
}
