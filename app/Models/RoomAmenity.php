<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class RoomType extends Model
{
    use HasFactory;

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'room_type_images', 'roomType', 'imageId');
    }

    public function rooms(): HasMany
    {
        return $this->belongsToMany(Room::class, 'roomType');
    }
}
