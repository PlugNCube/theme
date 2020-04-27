<?php

namespace Cubes\Theme\Http\Middleware;

use Closure;

class RouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string                   $themeName
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $themeName)
    {
        library()->theme()->setTheme($themeName);
        return $next($request);
    }
}
