<?php

namespace App\Http\Middleware;

use Closure;

class HomeMiddleware
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
        if($request->session()->has('email')){

            return $next($request);
        }else{
            //跳转到登陆主页
            return redirect('/home/login')->with('error','请先登陆');
        }
    }
    
}
