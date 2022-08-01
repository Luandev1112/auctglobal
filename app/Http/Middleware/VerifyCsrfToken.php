<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'payments/paypal/status-success',
        'payments/paypal/status-cancel',
        'payments/payu/status-success',
        'payments/payu/status-cancel',
        'stripe-payment'
    ];
}
