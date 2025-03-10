<?php

// app/Models/OrderHistory.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'guest_id',
        'total_price',
        'address',
        'authority',
        'tracking_code',
        'status',
        'process',
        'is_checked',
    ];

    protected $casts = [
        'address' => 'array',
        'is_checked' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderHistoryItems()
    {
        return $this->hasMany(OrderHistoryItem::class);
    }
}