<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Userlist extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'userlist';
    protected $fillable = ['name', 'account', 'password', 'introduction', 'background', 'photo', 'entry'];

}
