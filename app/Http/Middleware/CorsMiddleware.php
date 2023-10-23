<?php

namespace App\Http\Middleware;

class CorsMiddleware
{
    public function handle($request, \Closure $next)
    {
        // Logic for handling CORS headers
        return $next($request);
    }
}


