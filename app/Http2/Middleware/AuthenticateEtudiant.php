<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateEtudiant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    /*public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }*/

    public function handle(Request $request, Closure $next)
    {
        /*  if (!Auth::check()) {
             return redirect('/index');
         }

         return $next($request);*/

        if(Auth::User())
        {
            return $next($request);
        }

        else{
            return view('connexion');
        }

    }

}
