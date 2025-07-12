<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Please login to access this area.');
        }

        if (!auth()->user()->hasRole('admin')) {
            Auth::logout();
            return redirect('/login')->withErrors(['email' => 'Access denied. Only administrators can access this system.']);
        }

        return $next($request);
    }
}
