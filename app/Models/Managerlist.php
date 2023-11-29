<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Managerlist extends Authenticatable
{

    protected $table = 'managerlist';
    protected $fillable = ['name', 'account', 'password'];
}
