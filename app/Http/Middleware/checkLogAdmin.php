<?php

namespace App\Http\Middleware;

use Closure;

class checkLogAdmin
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
        $user = Session('admin');
        if (!$user || !isset($user)){
            return redirect('admin/login');
        }
        return $next($request);
    }
}
