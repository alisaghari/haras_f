<?php

namespace App\Http\Controllers;

use App\User;
use App\user_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function phone_agent()
    {

        return view("agent.auth.phone");
    }

    public function sendVerify_agent(Request $request)
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
            'uname' => 'rokhtarh',
            'pass' => '2241377',
            'from' => '100020400',
            'message' => $rand,
            'to' => $request->input("phone"),
            'op' => 'send'
        );

        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);


        var_dump($response);

        return view("agent.auth.verify")->with("phone", $request->input("phone"))->with("verify", $rand);
    }

    public function verify_agent(Request $request)
    {

        $user = User::where("phone", $request->input("phone"))->first();
        if (isset($user)) {
            if ($user != "") {
                if (Hash::check($request->input("verify"), $user->verify)) {

                    $_SESSION["agentLogin"] = true;
                    $_SESSION["userId"] = $user->id;
                    if ($user->register == 1) {
                        $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
                        $type501 = 0;
                        foreach ($registers as $register) {
                            foreach ($register->user_types as $type) {
                                if ($type->type == 501) {
                                    $type501 = 1;
                                }
                            }
                        }
                        if ($type501 == 0) {
                            return view("agent.auth.register")->with("user", $user);
                        }
                        return redirect("agent");
                    } else {
                        return view("agent.auth.register")->with("user", $user);
                    }

                } else {
                    return redirect("agent/login");
                }
            }
        }
    }

    public function register_agent(Request $request)
    {

        if (isset($_SESSION["userId"])) {
            $user = User::find($_SESSION["userId"]);
            $user->f_name = $request->input("f_name");
            $user->l_name = $request->input("l_name");
            $user->type = 501;
            $user->address = $request->input("address");
            if ($request->input("tell") != "")
                $user->tell = $request->input("tell");
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("birthdate");
            $user->cart = $request->input("cart");
            $user->saheb_hesab = $request->input("saheb_hesab");
            $user->register = 1;
            $user->hesab = $request->input("hesab");
            if ($request->input("organ_name") != "")
                $user->organ_name = $request->input("organ_name");
            $user->save();

            $user_type = new user_type();
            $user_type->u_id = $user->id;
            $user_type->type = 501;
            $user_type->save();
            $_SESSION["userType"] = 501;
            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
            $rand .= $user;
            User::where('id', $user->id)
                ->update(['user_code' => Hash::make($rand)]);

            $file = $request->file('image');
            if (isset($file))
                if ($file->isValid()) {
                    $fileName = md5($user->id);
                    $file->move('upload/c', $fileName);
                }

            return redirect("agent");
        } else {
            return redirect("agent/login");
        }
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
            'uname' => 'rokhtarh',
            'pass' => '2241377',
            'from' => '100020400',
            'message' => $rand,
            'to' => $request->input("phone"),
            'op' => 'send'
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

                    $_SESSION["userLogin"] = true;
                    $_SESSION["userId"] = $user->id;
                    if ($user->register == 1) {
                        $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
                        $type400 = 0;
                        foreach ($registers as $register) {
                            foreach ($register->user_types as $type) {
                                if ($type->type == 400) {
                                    $type400 = 1;
                                }
                            }
                        }
                        if ($type400 == 0) {
                            return view("user.auth.register")->with("user", $user);
                        }
                        return redirect("user");
                    } else {
                        return view("user.auth.register")->with("user", $user);
                    }

                } else {
                    return redirect("user/login");
                }
            }
        }
    }

    public function register(Request $request)
    {


        if (isset($_SESSION["userId"])) {
            $user = User::find($_SESSION["userId"]);
            $user->f_name = $request->input("f_name");
            $user->l_name = $request->input("l_name");
            $user->type = 400;
            $user->address = $request->input("address");
            if ($request->input("tell") != "")
                $user->tell = $request->input("tell");
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("birthdate");
            $user->cart = $request->input("cart");
            if ($request->input("bazaryab") != "")
                $user->bazaryab = $request->input("bazaryab");
            $user->register = 1;
            $user->status = 1;
            $user->save();

            $user_type = new user_type();
            $user_type->u_id = $user->id;
            $user_type->type = 400;
            $user_type->save();
            $_SESSION["userType"] = 400;

            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
            $rand .= $user;
            User::where('id', $user->id)
                ->update(['user_code' => Hash::make($rand)]);
            return redirect("user");
        } else {
            return redirect("user/login");
        }
    }

    //organ

    public function phone_organ()
    {

        return view("organ.auth.phone");
    }

    public function sendVerify_organ(Request $request)
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
            'uname' => 'rokhtarh',
            'pass' => '2241377',
            'from' => '100020400',
            'message' => $rand,
            'to' => $request->input("phone"),
            'op' => 'send'
        );

        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);


        var_dump($response);

        return view("organ.auth.verify")->with("phone", $request->input("phone"))->with("verify", $rand);
    }

    public function verify_organ(Request $request)
    {

        $user = User::where("phone", $request->input("phone"))->first();
        if (isset($user)) {
            if ($user != "") {
                if (Hash::check($request->input("verify"), $user->verify)) {

                    $_SESSION["organLogin"] = true;
                    $_SESSION["userId"] = $user->id;
                    if ($user->register == 1) {
                        $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
                        $type501 = 0;
                        foreach ($registers as $register) {
                            foreach ($register->user_types as $type) {
                                if ($type->type == 501) {
                                    $type501 = 1;
                                }
                            }
                        }
                        if ($type501 == 0) {
                            return view("organ.auth.register")->with("user", $user);
                        }
                        return redirect("organ");
                    } else {
                        return view("organ.auth.register")->with("user", $user);
                    }

                } else {
                    return redirect("organ/login");
                }
            }
        }
    }

    public function register_organ(Request $request)
    {

        if (isset($_SESSION["userId"])) {
            $user = User::find($_SESSION["userId"]);
            $user->f_name = $request->input("f_name");
            $user->l_name = $request->input("l_name");
            $user->type = 501;
            $user->address = $request->input("address");
            if ($request->input("tell") != "")
                $user->tell = $request->input("tell");
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("birthdate");
            $user->cart = $request->input("cart");
            $user->saheb_hesab = $request->input("saheb_hesab");
            $user->register = 1;
            $user->hesab = $request->input("hesab");
            if ($request->input("organ_name") != "")
                $user->organ_name = $request->input("organ_name");
            $user->save();

            $user_type = new user_type();
            $user_type->u_id = $user->id;
            $user_type->type = 501;
            $user_type->save();
            $_SESSION["userType"] = 501;
            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
            $rand .= $user;
            User::where('id', $user->id)
                ->update(['user_code' => Hash::make($rand)]);

            $file = $request->file('image');
            if (isset($file))
                if ($file->isValid()) {
                    $fileName = md5($user->id);
                    $file->move('upload/c', $fileName);
                }

            return redirect("organ");
        } else {
            return redirect("organ/login");
        }
    }

}
