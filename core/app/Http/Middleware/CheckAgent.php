<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAgent
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
        if (isset($_SESSION["agentLogin"])){
            if (!$_SESSION["agentLogin"]) {
                Auth::logout();
                return redirect('/agent/login');
            }
           $register= User::find($_SESSION["userId"]);
            if ($register->register==0){
                Auth::logout();
                return redirect('/agent/login');
            }
            if ($register->status==0){
                Auth::logout();
                return redirect('/agent/login');
            }
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/agent/login');
        }
    }
}
