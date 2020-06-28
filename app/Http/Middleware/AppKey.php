<?php

namespace App\Http\Middleware;

use Closure;
use PhpParser\Node\Stmt\Return_;

class AppKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('APP_KEY');
        if ($token != 'ABCD') {
            return response()->json(["message" => 'Access Denied!'], 401);
        }
        return $next($request);
    }
}
