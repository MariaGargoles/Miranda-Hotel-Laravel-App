<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Stripe API Keys
    |--------------------------------------------------------------------------
    |
    | You can find your API keys in your Stripe Dashboard.
    | https://dashboard.stripe.com/apikeys
    |
    */

    'public_key' => env('STRIPE_PUBLIC_KEY', ''),
    'secret_key' => env('STRIPE_SECRET_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Stripe Webhook Secret
    |--------------------------------------------------------------------------
    |
    | The webhook secret is used to verify that webhooks are sent by Stripe.
    | You can find it in your Stripe Dashboard under Developers > Webhooks.
    |
    */

    'webhook_secret' => env('STRIPE_WEBHOOK_SECRET', ''),

    /*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    |
    | The default currency for payments. This should be a 3-letter ISO 4217 code.
    |
    */

    'currency' => env('STRIPE_CURRENCY', 'usd'),

    /*
    |--------------------------------------------------------------------------
    | Success and Cancel URLs
    |--------------------------------------------------------------------------
    |
    | The URLs that Stripe will redirect to after a payment attempt.
    |
    */

    'success_url' => env('APP_URL') . '/payment/success',
    'cancel_url' => env('APP_URL') . '/payment/cancel',

];

