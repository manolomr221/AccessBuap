<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class admin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
        if ($request->ajax()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect()->guest('login');
        }
        } else if (!Auth::guard($guard)->user()->is_admin) {
            return redirect('/')->with('error','Necesitas ser Administrador para registrar personas');
        }
        return $next($request);
    }
}
