<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        // Logika untuk memeriksa peran pengguna
        if ($request->user() && $request->user()->hasRole($role)) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
