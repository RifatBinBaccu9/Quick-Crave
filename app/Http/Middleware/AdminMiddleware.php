<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()){
           if(Auth::user()->is_type == 'admin'){
               return $next($request);
           }elseif(Auth::user()->is_type == '0'){
            return redirect()->route('home');
           }
        }else{
            return redirect()->route('home');
        }
    }
}
