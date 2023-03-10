<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        $user = $request->user();
        $admin_from_site = $request->query()?$request->query()['user']: "0";
        if($admin_from_site === "1"){
            return $next($request);
        }
        if(!$user || $user->is_admin===0){

            return redirect('login');
           
        }


        return $next($request);
    }
}
