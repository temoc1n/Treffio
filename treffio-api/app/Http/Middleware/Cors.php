<?php

/*

    I added this middleware in order to allow all origins connecting to the api
    so we don't have to deal with CORS, in other words would it be better practices to
    only add the valid origins, but for now I left it like this.

*/

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request)
        ->header('Access-Control-Allow-Origin', '*');   //Add header to allow all origins
    }
}
