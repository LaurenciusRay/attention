<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EoUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($guard == "eouser"){
                //user was authenticated with admin guard.
                return redirect()->route('log');
            } else {
                //default guard.
                return redirect()->route('login.eo-user-form');
            }
        }

        return $next($request);
    }
}
