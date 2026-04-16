<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as Middleware;

class RedirectIfAuthenticated extends Middleware
{
    protected function redirectTo($request, ...$guards)
    {
        foreach ($guards as $guard) {
            if (\Illuminate\Support\Facades\Auth::guard($guard)->check()) {
                return route('dashboard');
            }
        }
    }
}
