<?php

namespace App\Http\Middleware;

use Closure;

class checkLogOrphanage
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
        $user = Session('orphanage');
        if (!$user || !isset($user)){
            return redirect('orphanage/login');
        }
        return $next($request);
    }
}
