<?php
// app/Providers/StudentServiceProvider.php

namespace App\Providers;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Support\Str;
use App\Models\Stulist;
use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    public function retrieveById($identifier)
    {
        return Stulist::find($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        return Stulist::where($identifier, $token)->first();
    }


    public function retrieveByCredentials(array $credentials)
    {
        return Stulist::where('account', $credentials['account'])->first();
    }

    public function validateCredentials(UserContract $user, array $credentials)
    {
        return $user->getAuthPassword() === $credentials['password'];
    }
}
