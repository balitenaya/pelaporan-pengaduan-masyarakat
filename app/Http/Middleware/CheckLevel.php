<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $privilege)
    {

        if ($privilege == Session::get('level')) {
            return $next($request);
        }

        if ($privilege ==  'admin&petugas' || $privilege == 'admin&kades') {
            if (Session::get('level') == 'admin') {
                return $next($request);
            } else if (Session::get('level') == 'petugas') {
                return $next($request);
            } else if (Session::get('level') == 'kades') {
                return $next($request);
            }
        }

        return back();
    }
}
