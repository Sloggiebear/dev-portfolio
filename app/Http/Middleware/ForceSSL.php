<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceSSL
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

        // If the request is not secure, redirect to the HTTPS url.
        if( !$request->secure() ) {
            return redirect()->secure( $request->getRequestUri() );
        }

        // Otherwise carry on.
        return $next($request);
    }
}
