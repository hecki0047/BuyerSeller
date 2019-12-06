<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Redirect;
use URL;
use App\Models\Role_user;

class SentinelSupplier
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
    // dd(12323);       
        $user = Sentinel::getUser();
        if($user){
        $users = Sentinel::findRoleByName('Suppliers');
        // return $user;

        if (!$user->inRole($users)) {
            // return redirect('login');
            $check_buyer = Role_user::where('user_id',Sentinel::getUser()->id)->first();
            if($check_buyer->role_id == 4){
                return $next($request);
            }
            return redirect('ServiceLogin?continue='.URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('Please sign in first.');
        }
        return $next($request);

      }
      else
        // return Redirect::to('login');
        return redirect('ServiceLogin?continue='.URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('Please sign in first.');
    }
}
