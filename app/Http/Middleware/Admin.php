<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Access\AuthorizationException;

class Admin
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
        if (! optional($request->user())->isAdmin()) {
            // return response('You shell NOT pass!', Response::HTTP_FORBIDDEN);
            throw new AuthorizationException;            
        }

        return $next($request);
    }
}
