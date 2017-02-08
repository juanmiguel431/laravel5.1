<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LangMiddleware
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

        if (!empty(session('lang'))) {
            // \App::setLocale(session('lang'));
            // app()->setLocale(\Session::get('locale'));
            //app()->setLocale(session('lang'));
            //Config::get('app.locale')
            App::setLocale(session('lang'));
        }

        return $next($request);
    }
}
