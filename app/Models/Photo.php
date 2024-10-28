<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['photo_url'];

    use HasFactory;

    public function rooms():BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'room_photo');
    }
}
