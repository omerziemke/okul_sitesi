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
    public function handle($request, Closure $next)
    {
        if (Auth::check()&& Auth::user()->yetki()=='ögretmen')
        {
            return view('admin.kullanicilar.kullanıcıtemplate');
        }else{

            return redirect('/');
        }

    }
}
