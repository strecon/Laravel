<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
        if (Auth::user()->is_admin) {
            return redirect()->route('admin::panel');
        } else {
//                    return redirect()->route('profile', ['id' => $id];
//                    return redirect()->route('profile', [$user]);
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
