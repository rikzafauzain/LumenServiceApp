<?php

namespace App\Http\Middleware;

class AuthenticateMiddleware
{
    public function handle($request, \Closure $next)
    {
        // Logic for authentication
        return $next($request);
    }
}
