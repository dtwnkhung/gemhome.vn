<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if ($request->user()->hasRole('super-admin') || $request->user()->hasRole('editor') || $request->user()->hasRole('admin')) {
            return $next($request);
        }
        return redirect('home');
    }
}
