<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SalesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session('id'))
        {
            if(session('role') == 2)
            {
                return $next($request);
            }else
            {
                return redirect('/beranda');
            }
        }else
        {
            return redirect('/');
        }
    }
}
