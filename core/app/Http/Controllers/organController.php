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
            $user->birthdate = $request->input("birthdate");
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
        $users = User::where("namayandeh_id", $_SESSION["userId"])->get();
        return view("organ.u_basket")->with("users", $users);
    }

    public function cart($id)
    {
        $carts = cart::with("user")->where("user_id", $id)->get();
        return view("organ.cart")->with("carts", $carts);
    }
}
