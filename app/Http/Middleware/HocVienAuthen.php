<?php

namespace App\Http\Middleware;

// use Illuminate\Support\Facades\Auth;
use Auth;

use Closure;

class HocVienAuthen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'appuser')
    {
        // nếu chưa đăng nhập
        if (! auth('appuser')->check()) {
            return redirect('appuser/dang-nhap');
        }
        // nếu user chưa active
        if(auth('appuser')->user()->status < 1) {
            return redirect('/');
        }

        if (strpos($request->getPathInfo(), 'dang-nhap') !== false) {
            return redirect('/');
        }
        return $next($request);
    }
}
