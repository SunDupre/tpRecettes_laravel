<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Language
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
        $locale;
        if(!session()->has('locale')){
            $locale = config('app.fallback_locale');
        }else{
            $locale = session('locale');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
