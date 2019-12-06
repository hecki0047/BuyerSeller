<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends \Cartalyst\Sentinel\Users\EloquentUser implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
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
