<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToRoot
{
    public function handle($request, Closure $next)
    {
        if ($request->is('ru/*')) {
            return redirect(str_replace('/ru/', '/', $request->getRequestUri()));
        }

        return $next($request);
    }
}
