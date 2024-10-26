<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $fillable = ['amenitie'];

    use HasFactory;

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'room_amenity');
    }
}
