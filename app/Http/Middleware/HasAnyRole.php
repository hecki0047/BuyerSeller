<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class HasAnyRole
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
        dd(66);
        $user = Sentinel::getUser();
        $users = Sentinel::findRoleByName('Users');

        if (!$user->inRole($users)) {
            return redirect('login');
        }
        return $next($request);
    }
}
