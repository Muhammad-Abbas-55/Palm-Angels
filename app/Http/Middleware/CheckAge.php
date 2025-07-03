<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // http://127.0.0.1:8000/about?age=2&country=pakistan
        // if($request->age<18){
        //     die("Your Age is Less then 18");
        // }
        // return $next($request);
    }
}