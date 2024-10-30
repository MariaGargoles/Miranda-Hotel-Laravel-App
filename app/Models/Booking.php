<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = ['fullName', 'bookDate', 'checkIn', 'checkOut', 'specialRequest', 'status', 'room_id', 'phone', 'email'];

    use HasFactory;

    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
