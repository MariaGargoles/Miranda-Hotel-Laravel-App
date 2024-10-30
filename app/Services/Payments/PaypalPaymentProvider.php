<?php

namespace App\Services\Payments;

class PaypalPaymentProvider implements PaymentProvider
{
    public function processPayment(float $amount): string
    {
        return "Processed payment of {$amount} via PayPal.";
    }
}
