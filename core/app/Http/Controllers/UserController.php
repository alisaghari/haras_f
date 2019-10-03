<?php

namespace App\Http\Controllers;

use App\cart;
use App\order_package;
use App\package;
use App\User;
use App\user_package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view("user.index");
    }


    public function service()
    {
        $packages = package::all();
        return view("user.service")->with("packages", $packages);
    }

    public function package_order(Request $request)
    {
        $carts = cart::where("user_id", $_SESSION["userId"])->where("status", 0)->get();
        $new = 1;
        foreach ($carts as $cart) {
            $new = 0;
            $cartId = $cart->id;
        }
        if ($new == 1) {
            $cartn = new cart();
            $cartn->user_id = $_SESSION["userId"];
            $cartn->cart_number = "نا مشخص";
            $cartn->cvv2 = "نا مشخص";
            $cartn->expire_date = "نا مشخص";
            $cartn->status = 0;
            $cartn->save();
            $cartId = $cartn->id;
        }

        $p = package::where("id", $request->input("p_id"))->first();
        $package = new order_package();
        $package->u_id = $_SESSION["userId"];
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
        return redirect("user/basket");

    }

    public function basket()
    {
        $orders = cart::with("packages")->where("user_id", $_SESSION["userId"])->where("status", 0)->get();
        return view("user.basket")->with("orders", $orders);
    }

    public function cart()
    {
        $carts = cart::with("user")->where("user_id", $_SESSION["userId"])->get();
        return view("user.cart")->with("carts", $carts);
    }

    public function pay_package()
    {
        $orders = cart::with("packages")->where("user_id", $_SESSION["userId"])->where("status", 0)->get();

        $price = 0;
        foreach ($orders as $order) {
            foreach ($order->packages as $package) {
                $price += $package->price;
            }
        }
        $LoginAccount = 'xxxxxxxxxxxxxxxxxxxxx';
        $Amount = $price * 10; // Rial
        $OrderId = time();
        $CallBackUrl = url("user/pay/verify");

        $client = new \nusoap_client('https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';

        $result = $client->call('SalePaymentRequest', array("requestData" =>
            array(
                'LoginAccount' => $LoginAccount,
                'Amount' => $Amount,
                'OrderId' => $OrderId,
                'CallBackUrl' => $CallBackUrl,
                'AdditionalData' => ''
            ),
        ));

        if (isset($result['SalePaymentRequestResult']) && $result['SalePaymentRequestResult'] != "") {
            $result = $result['SalePaymentRequestResult'];

            if (isset($result['Status']) && $result['Status'] == 0 && isset($result['Token']) && $result['Token'] != "") {
                $token = $result['Token'];

                header("Location:https://pec.shaparak.ir/NewIPG/?Token={$token}");
            } else {
                echo "Error : {$result['Status']}";
            }
        } else {
            echo "No response from the bank";
        }
    }

    public function credit(){

        return view("user.credit");
    }

}
