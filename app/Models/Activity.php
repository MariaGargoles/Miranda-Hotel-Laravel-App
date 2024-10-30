<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'dateTime', 'notes', 'user_id', 'paid', 'satisfaction'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
