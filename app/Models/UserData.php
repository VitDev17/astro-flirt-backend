<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'users_data';

    protected $fillable = [
        'user_id', 'gender', 'like', 'date_of_birth', 'geolocation'
    ];
}
