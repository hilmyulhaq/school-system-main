<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SchoolClub extends Model
{

    use HasFactory;
    protected $table = 'school_clubs';

    protected $fillable = [
        'club_name',
        'desc',
        
    ];
}
