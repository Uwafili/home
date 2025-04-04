<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class BlockMessagePage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
        if (auth()->check() && auth()->user()->cannot('view-message-page')) {
            return redirect()->route('home')->with('error', 'Access denied to message page.');
        }
        


        return $next($request);
    }
}
