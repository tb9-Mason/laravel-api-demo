<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RejectNonApiRequests
{
    public function handle(Request $request, Closure $next)
    {
        if (!preg_match('#^api(/|$)#', $request->path()) && $request->path() !== 'up') {
            return response()->json([['error' => 'Not Found']], 404);
        }

        return $next($request);
    }
}
