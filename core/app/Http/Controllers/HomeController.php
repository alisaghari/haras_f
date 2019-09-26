<?php

namespace App\Http\Controllers;

use App\Blog;
use App\slider;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders=slider::all();
        $blogs=Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('welcome')->with("sliders",$sliders)->with("blogs",$blogs);
    }
}
