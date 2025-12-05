<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Fixes Intelephense error
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if logged in AND is admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }
        abort(403, 'Unauthorized action.');
    }
}
