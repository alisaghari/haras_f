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

    public function credit(){
        $user = User::find($_SESSION["userId"]);
        return View('doctor.credit',compact('user'));
    }
}
