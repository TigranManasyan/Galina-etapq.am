<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale'); // վերցնում ենք {locale}-ն URL-ից
        if (!in_array($locale, ['hy', 'en'])) {
            $locale = config('app.locale'); // default fallback
        }

        App::setLocale($locale);

        return $next($request);
    }
}
