<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '303921653671423',
        'client_secret' => '255006215a9a9350dd953d6287fcffb7',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '396313001813-njddfa1as3d29bd1gv4g6ghfvqt5qsae.apps.googleusercontent.com',
        'client_secret' => 'VscJJf41bBe5_hdwSS0ArCKW',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
