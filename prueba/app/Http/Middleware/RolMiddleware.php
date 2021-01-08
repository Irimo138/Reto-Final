<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->rol == 'Administrador')){
            return redirect('/admin');
            // return $next($request);
        }
        else if(auth()->check() && (auth()->user()->rol == 'UsuarioPic')){
            return redirect('/PicUser');
        }
        else{
            return redirect('/spots');
        }
    }
}
