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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Surf', 'Windsurf', 'Kayak', 'ATV', 'Hot air baloon']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('dateTime', precision: 0);
            $table->boolean('paid')->default(false);
            $table->tinyText('notes');
            $table->enum('satisfaction', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
