<?php

namespace App\Http\Middleware;

use App\Model\User;
use Closure;

class checkLog
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
        $token_header = $request->header('token');
        $email_header = $request->header('email');
        $user = User::where('email', $email_header)
            ->where('token', $token_header)
            ->count();
        if ($user <= 0){
            return response()->json([
                'success' => false,
                'message' => 'Check header token or email',
            ]);
        }
        return $next($request);
    }
}
