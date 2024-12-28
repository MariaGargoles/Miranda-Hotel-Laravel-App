<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Booking;
use App\Models\Photo;
use App\Models\Amenity;
use App\Models\RoomPhoto;
use App\Models\RoomAmenity;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['roomNumber', 'status', 'roomType', 'description', 'offer', 'price', 'discount', 'cancellation'];

    public static function available($checkIn, $checkOut)
    {
        return self::whereDoesntHave('bookings', function (Builder $query) use ($checkIn, $checkOut) {
            $query->where(function ($query) use ($checkIn, $checkOut) {
                $query->where('checkIn', '<=', $checkOut)
                      ->where('checkOut', '>=', $checkIn);
            });
        });
    }



    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_amenity');
    }

    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class, 'room_photo', 'room_id', 'photo_id');
    }

    public function photoUrl()
    {
        return $this->photos()->first() ? $this->photos()->first()->photo_url : 'default.jpg';
    }
}
