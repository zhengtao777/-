<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\View\View;

class AdminAuth
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

        //  判断用户是否登录
        $session = $request->session();

        if(!isset->has('user')){ // 如果用户未登录，跳到登录页面
            return redirect('/admin/login')->send();
        }


        //  完成视图的共享
        View::share('username', $session->get('user.username'));
        View::share('user_pic', $session->get('user.image_url'));

        return $next($request);
    }
}
