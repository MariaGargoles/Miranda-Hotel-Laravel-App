<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Amenity extends Model
{
    use HasFactory;

    public function room(): BelongsToMany
    {
        return $this->belongsToMany(Room::class);
    }
}
