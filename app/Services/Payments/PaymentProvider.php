<?php

namespace App\Services\Payments;

interface PaymentProvider
{
    public function processPayment(float $amount): string;
}
