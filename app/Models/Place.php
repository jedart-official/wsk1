<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'is_empty', 'room_id', 'number'];

    function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
