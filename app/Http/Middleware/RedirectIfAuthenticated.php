<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
            return redirect(RouteServiceProvider::HOME);
=======
            return redirect('/home');
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        }

        return $next($request);
    }
}
