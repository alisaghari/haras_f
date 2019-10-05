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
        return view("organ.user");
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
        $users = User::where("namayandeh_id", $_SESSION["userId"])->get();
        return view("organ.users")->with("users", $users);
    }

    public function package($id)
    {
        $packages = package::all();
        return view("organ.service")->with("packages", $packages)->with("id", $id);
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
        return redirect("organ/user/basket/" . $request->input("id"));

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
