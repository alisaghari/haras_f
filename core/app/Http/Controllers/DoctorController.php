<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\doctorTimes;
use App\Times;
use App\Rezerv;
class DoctorController extends Controller
{
    public function index()
    {
        return view("doctor.index");
    }

    public function phone()
    {
        return view("doctor.auth.phone");
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

        return view("doctor.auth.verify")->with("phone", $request->input("phone"))->with("verify", $rand);
    }

    public function verify(Request $request)
    {
        $user = User::where("phone", $request->input("phone"))->first();
        if (isset($user)) {
            if ($user != "") {
                if (Hash::check($request->input("verify"), $user->verify)) {
                    session_start();
                    $_SESSION["doctorLogin"] = true;
                    $_SESSION["userId"] = $user->id;
                    if ($user->register==1 ){
                        return redirect("doctor");
                    } else {
                        return view("doctor.auth.register")->with("user", $user);
                    }

                } else {
                    return redirect("doctor/login");
                }
            }
        }
    }

    public function register(Request $request)
    {
        session_start();
        if (isset($_SESSION["userId"])) {
            $user = User::find($_SESSION["userId"]);
            $user->f_name = $request->input("f_name");
            $user->l_name = $request->input("l_name");
            $user->type = 115;
            $user->address = $request->input("address");
            if ($request->input("tell") != "")
                $user->tell = $request->input("tell");
            $user->n_code = $request->input("n_code");
            $user->birthdate = $request->input("birthdate");
            $user->shaba = $request->input("shaba");
            $user->saheb_hesab = $request->input("saheb_hesab");
            $user->hesab = $request->input("hesab");
            $user->field = $request->input("field");
            $user->city = $request->input("city");
            $user->register=1;
            $user->status=0;
            $user->save();
            $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                . '0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
            $rand .= $user;
            User::where('id', $user->id)
                ->update(['user_code' => Hash::make($rand)]);

            $file = $request->file('image');
            $file1 = $request->file('image_k');
            if (isset($file))
                if ($file->isValid()) {
                    $fileName = md5($user->id);
                    $file->move('upload/c', $fileName.'.jpg');
                }
            if (isset($file1))
                if ($file1->isValid()) {
                    $fileName1 = 'k-'.$user->id;
                    $file1->move('upload/c',$fileName1.'.jpg');
                }

            return redirect("doctor");
        } else {
            return redirect("doctor/login");
        }
    }

    public function times()
    {
        $id= $_SESSION["userId"];
        $doctorTimes = doctorTimes::where('doctor_id' ,$id)->get();
        $times = Times::all();
        return view("doctor.times",['times'=>$times, 'id'=>$id, 'doctorTimes'=>$doctorTimes]);
    }


    public function addTimes(Request $request){
        $time=new doctorTimes();
        $time->start=$request->input("start");
        $time->doctor_id=$request->input("doctor_id");
        $time->end=$request->input("end");
        $time->date=$request->input("date");
        $time->visit_time=$request->input("visit_time");
        $time->save();
        return redirect()->back();
    }

    public function rezerv(){
        $user = User::find($_SESSION["userId"]);
        $rezervs = $user->rezervs()->where('status',1)->orderBy('id','DESC')->get();
        return  View('doctor.reservs',['rezervs'=>$rezervs]);
    }

    public function selfRezerv(){
        $user = User::find($_SESSION["userId"]);
        if ($user){
            if ($user->type == 115){
                $times = $user->doctorTimes;
                return View('doctor.self_rezerv',['times'=>$times,'user'=>$user]);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    public function rezervDoctorView($doctor_id,$time,$date){
        return View('doctor.rezerv_form',['doctor_id'=>$doctor_id , 'time'=>$time , 'date' =>$date]);
    }
}
