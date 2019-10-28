<?php

namespace App\Http\Middleware;

use Closure;

class EoUser
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
        if(auth()->eouser()){
            return $next($request);
          }
        return redirect();
    }
}
