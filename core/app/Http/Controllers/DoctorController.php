<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\doctorTimes;
use App\Times;
use App\Rezerv;
use App\Document;
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
            $user->city = $request->input("Shahrestan");
            $user->postal_code = $request->input("postal_code");
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

            $mojavez = $request->file('mojavez');
            if (isset($mojavez))
                if ($mojavez->isValid()) {
                    $fileName="mojavez-". time() ."-".$mojavez->getClientOriginalName();
                    $mojavez->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'mojavez';
                    $document->save();
                }
            $profile_image = $request->file('profile_image');
            if (isset($profile_image))
                if ($profile_image->isValid()) {
                    $fileName="profile_image-". time() ."-".$profile_image->getClientOriginalName();
                    $profile_image->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'profile_image';
                    $document->save();
                }
            $meli_cart = $request->file('meli_cart');
            if (isset($meli_cart))
                if ($meli_cart->isValid()) {
                    $fileName="meli_cart-". time() ."-".$meli_cart->getClientOriginalName();
                    $meli_cart->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'meli_cart';
                    $document->save();
                }
            $shaba_Confirmation = $request->file('shaba_Confirmation');
            if (isset($shaba_Confirmation))
                if ($shaba_Confirmation->isValid()) {
                    $fileName="shaba_Confirmation-". time() ."-".$shaba_Confirmation->getClientOriginalName();
                    $shaba_Confirmation->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'shaba_Confirmation';
                    $document->save();
                }
            $sejeld = $request->file('sejeld');
            if (isset($sejeld))
                if ($sejeld->isValid()) {
                    $fileName="sejeld-". time() ."-".$sejeld->getClientOriginalName();
                    $sejeld->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'sejeld';
                    $document->save();
                }
            $psp_contract = $request->file('psp_contract');
            if (isset($psp_contract))
                if ($psp_contract->isValid()) {
                    $fileName="psp_contract-". time() ."-".$psp_contract->getClientOriginalName();
                    $psp_contract->move('upload/document', $fileName);
                    $document = new Document();
                    $document->user_id =$user->id;
                    $document->image = $fileName;
                    $document->type = 'psp_contract';
                    $document->save();
                }
            if ($request->hasFile('haras_contract'))
                $haras_contract = $request->file('haras_contract');
                    foreach ($haras_contract as $value){
                        $fileName="haras_contract-". time() ."-".$value->getClientOriginalName();
                        $value->move('upload/document', $fileName);
                        $document = new Document();
                        $document->user_id =$user->id;
                        $document->image = $fileName;
                        $document->type = 'haras_contract';
                        $document->save();
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

    public function selfRezervTimes($doctor_id,$date){
        $times =doctorTimes::where('doctor_id',decrypt($doctor_id))->where('date',decrypt($date))->first();
        return View('doctor.self_rezerv_times',['times'=>$times]);
    }

    public function rezervDoctorView($doctor_id,$time,$date){
        return View('doctor.rezerv_form',['doctor_id'=>$doctor_id , 'time'=>$time , 'date' =>$date]);
    }

    public function rezervDoctor(Request $request){
        $rezerv = new Rezerv();
        $rezerv->name = $request->input("name");
        $rezerv->n_code = $request->input("n_code");
        $rezerv->phone = $request->input("phone");
        $rezerv->father_name = $request->input("father_name");
        $rezerv->sex = $request->input("sex");
        $rezerv->birthdate = $request->input("birthdate");
        $rezerv->doctor_id = decrypt($request->input("doctor_id"));
        $rezerv->rezerv_time = decrypt($request->input("time"));
        $rezerv->rezerv_date = decrypt($request->input("date"));
        $rezerv->status = 1;
        $rezerv->save();
        $seed = str_split('0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
        $rand .= $rand;
        Rezerv::where('id', $rezerv->id)
            ->update(['patient_code' => $rand]);
        return redirect()->back();
    }
}
