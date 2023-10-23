<?php

namespace App\Http\Middleware;

class SanitizeInputMiddleware
{
    public function handle($request, \Closure $next)
    {
        // Input sanitization logic
        return $next($request);
    }
}
