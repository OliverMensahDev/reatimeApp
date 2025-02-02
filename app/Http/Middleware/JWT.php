<?php

namespace App\Http\Middleware;

use Closure;

class JWT
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
        \Tymon\JWTAuth\Facades\JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
}
