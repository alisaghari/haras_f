<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if (Auth::user()) {
            if (Auth::user()->type != 2000) {
                Auth::logout();
                return redirect('/admin/login');
            }
            return $next($request);
        } else {
            Auth::logout();
            return redirect('/admin/login');
        }

    }
}
