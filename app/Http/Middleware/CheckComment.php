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
        
        if (strstr($request->get('content') ,'idiot') ||
        strstr($request->get('content') , 'stupid') ||
        strstr($request->get('content') , 'hate'))
        {

            return response(view('teams.forbidden-comment'));
        }
        return $next($request);
    }
}
