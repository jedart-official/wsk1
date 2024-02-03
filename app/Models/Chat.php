<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['room_id'];
}
