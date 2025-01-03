<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(last(explode('/', $request->path())));
        if ($request->user()->hasRole('admin')) {
            return $next($request);
        }
        if ($request->user()->hasPermission(last(explode('/', $request->path())))) {
            return $next($request);
        }
        return redirect('/');
    }
}
