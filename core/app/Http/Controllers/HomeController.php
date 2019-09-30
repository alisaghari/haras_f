<?php

namespace App\Http\Controllers;

use App\Blog;
use App\slider;
use Illuminate\Http\Request;
use App\User;
use App\Rezerv;
use App\Field;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //     $this->middleware('auth');
    }

    public function index()
    {
        $sliders=slider::all();
        $blogs=Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('welcome')->with("sliders",$sliders)->with("blogs",$blogs);
    }

    public function doctors(){
        $fields= Field::all();
        $doctors = User::where('type',115)->where('status',1)->get();
        return View('site.doctors',['doctors'=>$doctors,'fields'=>$fields]);
    }

    public function rezervTimes($id){
        $user = User::find($id);
        if ($user){
            if ($user->type == 115){
                $times = $user->doctorTimes;
                return View('site.rezervTimes',['times'=>$times,'user'=>$user]);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }

    }
    public function rezervDoctorView($doctor_id,$time,$date){
        return View('site.rezerv',['doctor_id'=>$doctor_id , 'time'=>$time , 'date' =>$date]);
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
        $rezerv->status = 0;
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

    public function searchDoctor(Request $request){
        $fields= Field::all();
        $doctors=User::where("city","like", '%' .$request->input("city").'%')->orWhere("field","like", $request->input("field"))->get();
        return View('site.doctors',['doctors'=>$doctors,'fields'=>$fields]);
    }

}
