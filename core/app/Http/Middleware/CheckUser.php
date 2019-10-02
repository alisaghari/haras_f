<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (isset($_SESSION["userLogin"])){
            if (!$_SESSION["userLogin"]) {
                Auth::logout();
                return redirect('/user/login');
            }
            $register= User::find($_SESSION["userId"]);
            if ($register->register==0){
                Auth::logout();
                return redirect('/user/login');
            }
            if ($register->status==0){
                Auth::logout();
                return redirect('/user/login');
            }
            $registers= User::with("user_types")->where("id",$_SESSION["userId"])->get();
            $null_type=1;
            $type400=0;
            foreach ($registers as $register){
                foreach ($register->user_types as $type){
                    $null_type=0;
                    if ($type->type==400){
                        $type400=1;
                    }
                }
            }
            if($null_type==1){
                return redirect('/user/login');
            }
            if($type400!=1){
                return redirect('/user/login');
            }
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/user/login');
        }
    }
}
