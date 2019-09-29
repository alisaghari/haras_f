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
        session_start();
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
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/user/login');
        }
    }
}
