<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckOrgan
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

        if (isset($_SESSION["organLogin"])) {
            if (!$_SESSION["organLogin"]) {
                Auth::logout();
                return redirect('/organ/login');
            }
            $register = User::find($_SESSION["userId"]);
            if ($register->register == 0) {
                Auth::logout();
                return redirect('/organ/login');
            }
            if ($register->status == 0) {
                Auth::logout();
                return redirect('/organ/login')->with('status',0);
            }
            $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
            $null_type = 1;
            $type501 = 0;
            foreach ($registers as $register) {
                foreach ($register->user_types as $type) {
                    $null_type = 0;
                    if ($type->type == 501) {
                        $type501 = 1;
                        $_SESSION["userType"]=501;
                    }
                }
            }
            if ($null_type == 1) {
                return redirect('/organ/login');
            }
            if ($type501 != 1) {
                return redirect('/organ/login');
            }
            return $next($request);
        } else {
            Auth::logout();
            return redirect('/organ/login');
        }
    }
}
