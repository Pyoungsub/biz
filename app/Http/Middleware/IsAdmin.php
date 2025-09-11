<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // 로그인되어 있지 않거나 admin이 아닌 경우
        if (!Auth::check() || !Auth::user()->admin) {
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}