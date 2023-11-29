<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Stulist extends Authenticatable
{
    protected $table = 'stulist';
    protected $fillable = ['account', 'password', 'name', 'school', 'grade', 'gmail', 'stuaddress1', 'stuaddress2', 'stuaddress3', 'parname', 'pargmail', 'parnumber', 'Howtoknow'];
}
