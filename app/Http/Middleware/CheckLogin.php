<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
        
        if(empty(session('UserInfo')['uname'])){
            
            return redirect('/');
        }
        if(session('status')=='down'){
            session(['UserInfo'=>null]);
        }
        // echo '<div style="width:150px;">'.session('UserInfo')['uname'].'</div>';
        return $next($request);
    }
}
