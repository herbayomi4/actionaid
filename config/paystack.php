<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    'publicKey' => getenv('pk_test_fd44e6e5426548c0ac080397c34ec9e86677446d'),

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => getenv('sk_test_67fa5e2d5896afbcc66aa00a6a598823248d27a2'),

    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' => getenv('https://paystack.com/pay/actionaid_donate_monthly'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('adeyemioluwaseun47@gmail.com'),

];
