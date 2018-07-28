<?php

namespace App\Http\Middleware;

use Closure;

class CheckComment
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
        if ( str_contains($request->get('content'), ['hate', 'idiot', 'stupid']) )
        {

            return response(view('teams.forbidden-comment'));
        }
        return $next($request);
    }
}
