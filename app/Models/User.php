<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'password',
        'img',
        'role',
    ];


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderHistories(){
        return $this->hasMany(OrderHistory::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function recentlyProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
