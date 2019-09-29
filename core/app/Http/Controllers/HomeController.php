<?php

namespace App\Http\Controllers;

use App\Blog;
use App\slider;
use Illuminate\Http\Request;
use App\User;

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
        $doctors = User::where('type',115)->get();
        return View('site.doctors',['doctors'=>$doctors]);
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
}
