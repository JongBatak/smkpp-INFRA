<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manajemen extends Model
{
    protected $table = 'manajemens';
    protected $fillable = [
        'name',
        'role',
        'profile'
    ];
}
