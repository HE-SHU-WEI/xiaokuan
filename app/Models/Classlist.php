<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classlist extends Model
{
    protected $table = 'classlist';
    protected $fillable = [
        'teacherid',
        'teachername',
        'classname',
        'link',
        'videotime',
        'introduction',
        'know',
        'forwho',
        'photo',
        'money',
        'classtype',
    ];

}
