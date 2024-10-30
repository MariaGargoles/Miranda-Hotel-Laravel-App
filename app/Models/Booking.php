<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'orderDate', 'checkInDate', 'checkOutDate', 'specialRequest', 'roomType', 'status', 'roomId'];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'roomId');
    }
}
