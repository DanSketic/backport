<?php

namespace DanSketic\Backport\Middleware;

use Illuminate\Http\Request;

class Session
{
    public function handle(Request $request, \Closure $next)
    {
        $path = '/'.trim(config('backport.route.prefix'), '/');

        config(['session.path' => $path]);

        if ($domain = config('backport.route.domain')) {
            config(['session.domain' => $domain]);
        }

        return $next($request);
    }
}
