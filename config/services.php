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

    'twitter' => [
        'client_id' => 'rU6dDl3JZonZ5o41brSN4wdQO',
        'client_secret' => '6l0hSxJy5OfCSJfQcHo5VGW1MMNUk6vVAelEhjyf4OLPJdHLwB',
        'redirect' => 'http://localhost:8000/callback/twitter',
    ],

    'facebook' => [
        'client_id' => '1194265993950590',
        'client_secret' => 'd5814fe9b8e549dc6400ad9f184b613b',
        'redirect' => 'http://localhost:8000/callback/facebook',

    ],

];
