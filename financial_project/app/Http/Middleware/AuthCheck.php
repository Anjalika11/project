<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('user_name')) {
            return redirect()->route('user-login');
        }
    
        if (session()->has('user_name') && session('status') == 0) {
            return redirect()->route('user-waiting');
        }
    
        return $next($request);
    }
    
}
