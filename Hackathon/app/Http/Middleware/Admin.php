<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
      // if (!Auth::check()) {
      //     return redirect(route('login'));
      // }
      //if(isset(Auth::user()->typeId) == 2){
        return $next($request);
      // }else{
      //   return redirect(route('notAdmin'));
      // }
    }
}
