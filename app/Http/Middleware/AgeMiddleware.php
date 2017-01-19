<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $age)
    {

        if ($age < 18) {
            abort(403, "No tienes edad para ver este video! Se lo diremos a tus padres. :) ".$age);
        }

        return $next($request);
    }
}
