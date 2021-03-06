<?php

namespace App\Http\Middleware;

use Closure;
use Lang;
use Session;
class Locale
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
        if (!session()->has('locale')) {
            session('locale', 'vi');
        }
        Lang::setLocale(session('locale'));

        return $next($request);
    }
}
