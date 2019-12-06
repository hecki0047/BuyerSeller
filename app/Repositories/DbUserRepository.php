<?php

namespace App\Repositories;

// use Cartalyst\Sentinel\Users\EloquentUser as User;
use App\Models\Users;
use DB;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class DbUserRepository implements UserRepositoryInterface {

	public function getAll()
	{
		return Users::all();
	}


	public function find($id)
	{
		return Users::findOrFail($id);
	}

	public function updateRole($user_id, $role_id)
    {
    	DB::table('role_users')
            ->where('user_id', $user_id)
            ->update(['role_id' => $role_id]);
    }

    public function create($fields)
    {
    	return Sentinel::create($fields);
    }



}