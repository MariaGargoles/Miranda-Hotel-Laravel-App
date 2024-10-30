<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'room_number',
        'room_type',
        'price',
        'offer_price',
        'status',
        'availability',
    ];

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

    public function amenities()
    {
        return $this->hasMany(Amenities::class);
    }
}
