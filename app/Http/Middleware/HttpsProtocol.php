<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $level
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
            if (!$request->secure() && env('APP_ENV') === 'prod') {
                return redirect()->secure($request->getRequestUri());
            }

            return $next($request); 
    }
}