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
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (isset($_SESSION["agentLogin"])) {
            if (!$_SESSION["agentLogin"]) {
                Auth::logout();
                return redirect('/agent/login');
            }
            $register = User::find($_SESSION["userId"]);
            if ($register->register == 0) {
                Auth::logout();
                return redirect('/agent/login');
            }
            if ($register->status == 0) {
                Auth::logout();
                return redirect('/agent/login');
            }
            $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
            $null_type = 1;
            $type501 = 0;
            foreach ($registers as $register) {
                foreach ($register->user_types as $type) {
                    $null_type = 0;
                    if ($type->type == 501) {
                        $type501 = 1;
                    }
                }
            }
            if ($null_type == 1) {
                return redirect('/agent/login');
            }
            if ($type501 != 1) {
                return redirect('/agent/login');
            }
            return $next($request);
        } else {
            Auth::logout();
            return redirect('/agent/login');
        }
    }
}
