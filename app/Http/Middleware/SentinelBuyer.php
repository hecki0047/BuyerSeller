<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class SentinelBuyer
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
        $user = Sentinel::getUser();
        
        $users = Sentinel::findRoleByName('Buyers');

        if (!$user->inRole($users)) {
            return redirect('login');
        }
        
        return $next($request);
    }
}
