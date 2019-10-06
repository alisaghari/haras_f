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
                return redirect('/doctor/login')->with('status',0);
            }
            $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
            $null_type = 1;
            $type115 = 0;
            foreach ($registers as $register) {
                foreach ($register->user_types as $type) {
                    $null_type = 0;
                    if ($type->type == 115) {
                        $type115 = 1;
                        $_SESSION["userType"]=115;
                    }
                }
            }
            if ($null_type == 1) {
                return redirect('/doctor/login');
            }
            if ($type115 != 1) {
                return redirect('/doctor/login');
            }
            return $next($request);
        } else {

            Auth::logout();
            return redirect('/doctor/login');
        }
    }
}
