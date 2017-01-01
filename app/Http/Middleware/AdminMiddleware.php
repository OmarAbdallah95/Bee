<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if(\Auth::guest())
        {
            return redirect('login');
        }
        else
        {
            if(\Auth::user()->user_role!='admin')
            {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
