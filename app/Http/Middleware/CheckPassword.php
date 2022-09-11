<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->Api_Password !== env('API_PASSWORD', 'jdsjaskdnmKLJDSLAsdc234nmsdnk23nnmsdfnmdJKdsc')) {
            return response()->json(['message' => 'Unauthrized']);
        }
        return $next($request);
    }
}
