<?php

namespace App\Http\Middleware;

class LoggingMiddleware
{
    public function handle($request, \Closure $next)
    {
        // Logging logic
        return $next($request);
    }
}
