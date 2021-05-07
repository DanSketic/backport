<?php

namespace DanSketic\Backport\Middleware;

use Closure;
use DanSketic\Backport\Facades\Backport;
use Illuminate\Http\Request;

class Bootstrap
{
    public function handle(Request $request, Closure $next)
    {
        Backport::bootstrap();

        return $next($request);
    }
}
