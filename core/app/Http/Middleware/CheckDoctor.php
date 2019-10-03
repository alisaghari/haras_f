<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($_SESSION["doctorLogin"])) {
            if (!$_SESSION["doctorLogin"]) {
                Auth::logout();
                return redirect('/doctor/login');
            }
            $register = User::find($_SESSION["userId"]);
            if ($register->register == 0) {
                Auth::logout();
                return redirect('/doctor/login');
            }
            if ($register->status == 0) {
                Auth::logout();
                return redirect('/doctor/login');
            }
            return $next($request);
        } else {
            Auth::logout();
            return redirect('/doctor/login');
        }
    }
}
