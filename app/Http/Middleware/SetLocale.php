<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Config;

class SetLocale
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
        $languages = array_keys(Config::get('languages'));
        if (in_array($request->segment(1), $languages)) {
            App::setLocale($request->segment(1));
        }

        return $next($request);
    }
}
