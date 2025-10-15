<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = [
        'fullName',
        'bookDate',
        'checkIn',
        'checkOut',
        'specialRequest',
        'status',
        'room_id',
        'phone',
        'email',
        'amount',
        'currency',
        'stripe_payment_intent_id',
        'stripe_session_id',
        'payment_status',
        'paid_at'
    ];

    protected $casts = [
        'bookDate' => 'date',
        'checkIn' => 'date',
        'checkOut' => 'date',
        'paid_at' => 'datetime',
        'amount' => 'decimal:2'
    ];

    use HasFactory;

    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    /**
     * Check if the booking is paid
     */
    public function isPaid(): bool
    {
        return $this->payment_status === 'succeeded';
    }

    /**
     * Mark the booking as paid
     */
    public function markAsPaid(): void
    {
        $this->update([
            'payment_status' => 'succeeded',
            'paid_at' => now()
        ]);
    }

    /**
     * Calculate the total amount based on room price and nights
     */
    public function calculateAmount(): float
    {
        $checkIn = \Carbon\Carbon::parse($this->checkIn);
        $checkOut = \Carbon\Carbon::parse($this->checkOut);
        $nights = $checkIn->diffInDays($checkOut);
        
        return $nights * $this->room->price;
    }
}
