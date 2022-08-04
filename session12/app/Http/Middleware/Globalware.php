<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class Globalware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo '<style>

            * {
                font-family: "Segoe UI", serif;
            }

            body {
                border: solid 1px #aaa;
                padding: 10px;
                border-radius: 10px;
            }

        </style>';
        if(Session::get('nama') != null){
            echo 'Hello, '.Session::get('nama');
        }else{
            echo 'Hello!';
        }
        echo '</br>';
        echo '<a href="/">Home</a></br>';
        return $next($request);
    }
}
