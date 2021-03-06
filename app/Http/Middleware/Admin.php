<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use Illuminate\Support\Facades\Redirect;


class Admin
{

    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role == 1){
                return $next($request);
            }
        }

        return redirect('home');
    }


}