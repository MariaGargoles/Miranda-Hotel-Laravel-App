<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->date('bookDate');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->string('specialRequest')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->enum('status', ['In progress', 'Check In', 'Check Out']);
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

