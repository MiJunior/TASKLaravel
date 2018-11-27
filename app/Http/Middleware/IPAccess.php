<?php

namespace App\Http\Middleware;

use Closure;

class IPAccess
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
        if(in_array($request->ip(), config('ip'))) {
            abort(403, 'Access denied.');
        }
        return $next($request);
    }
}
