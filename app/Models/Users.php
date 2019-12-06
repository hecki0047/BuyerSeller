<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class Users extends \Cartalyst\Sentinel\Users\EloquentUser implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $fillable = [
        'first_name','last_name','email', 'password',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function companies(){
        return $this->hasOne('App\Models\Companies','user_id','id');
    }
    public function company(){
        return $this->hasOne('App\Models\Companies','user_id','id');
    }

    public function customers(){
        return $this->hasOne('App\Models\Customer','user_id');
    }

    public function suppliers(){
        return $this->hasOne('App\Models\Supplier','user_id');
    }
    public function main_products(){
        return $this->hasOne('App\Models\SupplierMainProduct','supplier_id','id');
    }
    public function Role_user(){
        return $this->hasOne('App\Models\Role_user','user_id','id');
    }
        
 
}
