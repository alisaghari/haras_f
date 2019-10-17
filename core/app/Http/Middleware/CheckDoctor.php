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
        if (isset($_SESSION["userId"])){
            $registers = User::with("user_types")->where("id", $_SESSION["userId"])->get();
            $access=0;
            foreach ($registers as $register) {
                foreach ($register->user_types as $type) {
                    if ($type->type == 115 && $type->is_register == 1 && $type->is_active == 1) {
                        $access=1;
                        $_SESSION["userType"]=115;
                    }
                }
            }
            if($access==1)
                return $next($request);
            else
                return redirect("doctor/login");
        }else{
            return redirect("doctor/login");
        }

    }
}
