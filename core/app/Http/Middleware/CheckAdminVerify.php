<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminVerify
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
        if (isset($_SESSION["type"])){
            $type = $_SESSION["type"];
            if ($type!="admin") {
                Auth::logout();
                return redirect('/admin/login');
            }
            return $next($request);
        }else{
            Auth::logout();
            return redirect('/admin/login');
        }

    }
}
