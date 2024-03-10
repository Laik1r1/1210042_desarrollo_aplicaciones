<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Validate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->header('user') == 'miguel') {
            return $next($request);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No tienes permiso para obtener este dato.',
            ], 401);
        }

    }
}
