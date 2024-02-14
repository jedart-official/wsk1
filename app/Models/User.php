<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'avatar_id',
        'x','y', 'room_id'
    ];

    protected static function boot(): void
    {
        parent::boot();

        // Добавление обработчика события удаления
        static::deleting(function($user) {
            // Обнуление user_id у связанных мест
            Place::query()->where('user_id', $user->id)->update(['user_id' => null]);
            Message::query()->where('user_id', $user->id)->delete();
        });
    }
    public function room(): HasOne
    {
        return $this->hasOne(Room::class, 'id', 'room_id');
    }
    public function avatar(): HasOne
    {
        return $this->hasOne(Avatar::class, 'id', 'avatar_id');
    }
}
