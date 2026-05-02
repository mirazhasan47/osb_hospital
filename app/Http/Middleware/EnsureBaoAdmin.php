<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureBaoAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->session()->get('bao_admin_authenticated')) {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }

        return $next($request);
    }
}
