<?php

namespace Cubes\Theme\Http\Middleware;

use Closure;

class WebMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (config('theme.active'))
            library()->cube('theme')->setTheme(config('theme.active'));

        return $next($request);
    }
}
