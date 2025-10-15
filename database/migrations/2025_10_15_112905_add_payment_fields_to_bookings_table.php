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
        Schema::table('bookings', function (Blueprint $table) {
            $table->decimal('amount', 10, 2)->nullable()->after('status');
            $table->string('currency', 3)->default('USD')->after('amount');
            $table->string('stripe_payment_intent_id')->nullable()->after('currency');
            $table->string('stripe_session_id')->nullable()->after('stripe_payment_intent_id');
            $table->enum('payment_status', ['pending', 'processing', 'succeeded', 'failed', 'canceled'])->default('pending')->after('stripe_session_id');
            $table->timestamp('paid_at')->nullable()->after('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn([
                'amount',
                'currency',
                'stripe_payment_intent_id',
                'stripe_session_id',
                'payment_status',
                'paid_at'
            ]);
        });
    }
};
