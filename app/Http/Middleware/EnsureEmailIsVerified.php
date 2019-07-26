<?php

namespace App\Http\Middleware;

use Closure;

class EnsureEmailIsVerified
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
        // 
        // 1. login in?
        // 2. non verdification?
        // 3. realated with eaml verdification?
        if ($request->user() &&
            ! $request->user()->hasVerifiedEmail() &&
            ! $request->is('email/*', 'logout')) {
                
                // return corresponded content
                return $request->expectsJson()
                ? abort(403, 'Your email address is not verified.')
                : redirect()->route('verification.notice');
            }
            
            return $next($request);
    }
}
