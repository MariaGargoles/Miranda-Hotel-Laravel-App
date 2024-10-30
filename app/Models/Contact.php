<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model  
{
    use HasFactory;

    protected $table = 'contacts';  

    protected $fillable = [
        'date',
        'client_name',
        'client_email',
        'client_phone',
        'subject',
        'comment',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }
}
