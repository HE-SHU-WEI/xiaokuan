<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordTrait;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;



class Stulist extends Authenticatable implements CanResetPasswordContract
{


    use Notifiable, HasFactory, CanResetPasswordTrait;

    protected $table = 'stulist';
    protected $fillable = ['account', 'password', 'name', 'school', 'grade', 'gmail', 'stuaddress1', 'stuaddress2', 'parname', 'parnumber', 'Howtoknow','password_reset_token','password_reset_token_expiry'];

    // 實現 CanResetPassword 介面所需的方法
    public function getEmailForPasswordReset()
    {
        return $this->gmail;
    }
}
