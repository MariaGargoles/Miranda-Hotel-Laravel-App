<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('BookingNotification', function() {
            return new class {
                public function notifyAdmin($booking) {
                    // File::append(storage_path('logs/bookings.log'), 'Nueva reserva: ' . json_encode($booking) . "\n");
                }
            };
        });
    }
}
