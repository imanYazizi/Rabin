<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemoveHostHeaderMiddleware
{

    public function handle(Request $request, Closure $next)
    {

        $domains = ['rabin.karo.studio' , '127.0.0.1'];
        if (!in_array($_SERVER['SERVER_NAME'], $domains)) {
            return response()->json('Too many attempts' , 403);
        }

        return $next($request);
    }
}
