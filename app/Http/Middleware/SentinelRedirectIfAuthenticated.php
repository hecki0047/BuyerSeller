<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Sentinel;
use Redirect;
use URL;
class SentinelRedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(12367);
        if (Sentinel::check()) {
             $user = Sentinel::getUser();
        $id=$user->id;
         
        $admin = Sentinel::findRoleByName('Admins');
        $users = Sentinel::findRoleByName('Users');
        $suppliers=Sentinel::findRoleByName('Suppliers');
        $buyers=Sentinel::findRoleByName('Buyers');
        
        if ($user->inRole($admin)) {
            return redirect()->intended('admin');
        } elseif ($user->inRole($users)) {
            return 123;//return redirect()->intended('/');
        }

        elseif ($user->inRole($suppliers)) {
            return  redirect()->route('home');
           // return Redirect::to(URL::previous());
        }
        elseif ($user->inRole($buyers)) {
            return  redirect()->route('home');
        }
            //return 123; redirect('/');
        }

        return $next($request);
    }
}
