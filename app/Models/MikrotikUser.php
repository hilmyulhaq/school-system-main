<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MikrotikUser extends Model
{
    protected $table = 'mikrotik_users';

    protected $fillable = ['name', 'password', 'profile'];
}
