<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   if(Auth::check()){   
        if(Auth::user()->level==2){
            return redirect()->route("client.home");
        }elseif(Auth::user()->level== 1){
        return $next($request);
        }
    }
        return redirect()->back();
    }
}
