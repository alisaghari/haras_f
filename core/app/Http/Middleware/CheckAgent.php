<?php

namespace App\Http\Middleware;

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
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/agent/login');
        }
    }
}
