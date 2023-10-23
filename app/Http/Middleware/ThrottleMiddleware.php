<?php

namespace App\Http\Middleware;

class ThrottleMiddleware
{
    public function handle($request, \Closure $next)
    {
        // Throttling logic
        return $next($request);
    }
}
