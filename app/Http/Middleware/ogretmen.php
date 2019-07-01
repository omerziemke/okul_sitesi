<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ogretmen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle($request, Closure $next,$guard = null)
    {
        if ($guard == "ogretmen" && Auth::guard($guard)->check())
        {
            return handle($request);
        }else{

            return redirect('ogretmen/login');
        }

    }
}
