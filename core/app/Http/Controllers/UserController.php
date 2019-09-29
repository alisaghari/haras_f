<?php

namespace App\Http\Controllers;

use App\cart;
use App\order_package;
use App\package;
use App\User;
use App\user_package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view("user.index");
    }

    public function phone()
    {
        return view("user.auth.phone");
    }

    public function sendVerify(Request $request)
    {
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

        $users = User::where("phone", $request->input("phone"))->get();
        $new = 1;
        foreach ($users as $user) {
            $new = 0;
        }
        if ($new == 0) {
            User::where('phone', $request->input("phone"))
                ->update(['verify' => Hash::make($rand)]);
        }
        if ($new == 1) {
            $user = new User();
            $user->phone = $request->input("phone");
            $user->verify = Hash::make($rand);
            $user->save();
        }

        $url = "https://ippanel.com/services.jspd";
        $param = array
        (
            'uname'=>'rokhtarh',
            'pass'=>'2241377',
            'from'=>'100020400',
            'message'=>$rand,
            'to'=>$request->input("phone"),
            'op'=>'send'
        );

        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);


      var_dump($response);

        return view("user.auth.verify")->with("phone", $request->input("phone"))->with("verify", $rand);
    }

    public function verify(Request $request)
    {

        $user = User::where("phone", $request->input("phone"))->first();
        if (isset($user)) {
            if ($user != "") {
                if (Hash::check($request->input("verify"), $user->verify)) {
                    session_start();
                    $_SESSION["userLogin"]=true;
                    $_SESSION["userId"]=$user->id;
                    if ($user->register==1 ){
                        return redirect("user");
                    }else{
                        return view("user.auth.register")->with("user",$user);
                    }

                }else{
                    return redirect("user/login");
                }
            }
        }
    }
    public function register(Request $request){
        session_start();
        if (isset($_SESSION["userId"])){
            $user=User::find($_SESSION["userId"]);
            $user->f_name=$request->input("f_name");
            $user->l_name=$request->input("l_name");
            $user->type=400;
            $user->address=$request->input("address");
            if ($request->input("tell")!="")
            $user->tell=$request->input("tell");
            $user->n_code=$request->input("n_code");
            $user->birthdate=$request->input("birthdate");
            $user->cart=$request->input("cart");
            if ($request->input("bazaryab")!="")
            $user->bazaryab=$request->input("bazaryab");
            $user->register=1;
            $user->status=1;
            $user->save();
            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
            $rand.=$user;
            User::where('id', $user->id)
                ->update(['user_code' => Hash::make($rand)]);
            return redirect("user");
        }else{
            return redirect("user/login");
        }
    }

    public function service(){
        $packages=package::all();
        return view("user.service")->with("packages",$packages);
    }

    public function package_order(Request $request){
        $carts=cart::where("user_id",$_SESSION["userId"])->where("status",0)->get();
        $new=1;
        foreach ($carts as $cart){
            $new=0;
            $cartId=$cart->id;
        }
        if ($new==1){
            $cartn=new cart();
            $cartn->user_id=$_SESSION["userId"];
            $cartn->cart_number="نا مشخص";
            $cartn->cvv2="نا مشخص";
            $cartn->expire_date="نا مشخص";
            $cartn->status=0;
            $cartn->save();
            $cartId=$cartn->id;
        }

        $p=package::where("id",$request->input("p_id"))->first();
        $package=new order_package();
        $package->u_id=$_SESSION["userId"];
        $package->c_id=$cartId;
        $package->p_id=$request->input("p_id");
        $package->count=$request->input("count");
        if ($request->input("count")==1){
            $package->price=$p->price1;
        }

        if ($request->input("count")==2){
            $package->price=$p->price2;
        }

        if ($request->input("count")==3){
            $package->price=$p->price3;
        }

        if ($request->input("count")==4){
            $package->price=$p->price4;
        }

        if ($request->input("count")==5){
            $package->price=$p->price5;
        }

        $package->save();

        for ($i=0 ; $i<$request->input("count");$i++){
            $id=$request->input("p_row").$i;
            $userpackage=new user_package();
            $userpackage->name=$request->input("namedyn$id");
            $userpackage->n_code=$request->input("n_codedyn$id");
            $userpackage->birthdate=$request->input("birthdatedyn$id");
            $userpackage->o_id=$package->id;
            $userpackage->save();
        }
return redirect("user/basket");

    }

    public function basket(){
        $orders=cart::with("packages")->where("user_id",$_SESSION["userId"])->where("status",0)->get();
        return view("user.basket")->with("orders",$orders);
    }

    public function cart(){
        $carts=cart::with("user")->where("user_id",$_SESSION["userId"])->get();
        return view("user.cart")->with("carts",$carts);
    }
    public function pay_package(){
        $orders=cart::with("packages")->where("user_id",$_SESSION["userId"])->where("status",0)->get();

        $price=0;
        foreach ($orders as $order){
            foreach ($order->packages as $package){
                $price+=$package->price;
            }
        }
        $LoginAccount 	= 'xxxxxxxxxxxxxxxxxxxxx';
        $Amount 		= $price*10; // Rial
        $OrderId 		= time();
        $CallBackUrl 	= url("user/pay/verify");

        $client = new \nusoap_client('https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';

        $result = $client->call('SalePaymentRequest', array("requestData" =>
            array(
                'LoginAccount' 		=> $LoginAccount,
                'Amount' 			=> $Amount,
                'OrderId' 			=> $OrderId,
                'CallBackUrl' 		=> $CallBackUrl,
                'AdditionalData' 	=> ''
            ),
        ));

        if (isset($result['SalePaymentRequestResult']) && $result['SalePaymentRequestResult'] != "")
        {
            $result = $result['SalePaymentRequestResult'];

            if (isset($result['Status']) && $result['Status'] == 0 && isset($result['Token']) && $result['Token'] != "")
            {
                $token = $result['Token'];

                header("Location:https://pec.shaparak.ir/NewIPG/?Token={$token}");
            } else {
                echo "Error : {$result['Status']}";
            }
        } else {
            echo "No response from the bank";
        }
    }


}
