<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('lang') && in_array($request->lang, ['hu', 'en'])) {
            $request->session()->put('lang', $request->lang);
            return redirect()->back();
        }

        if ($request->session()->has('lang')) {
            config()->set('app.locale', $request->session()->get('lang'));
        }

        return $next($request);
    }

}
