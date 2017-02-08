<?php

namespace App\Http\Middleware;

use Closure;

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
        // dd($request->session()->has('aid'));
        if($request->session()->has('aid')){

            return $next($request);
        }else{
            //跳转到登陆主页
            return redirect('/admins/admin/index')->with('error','请先登陆');
        }
    }
}
