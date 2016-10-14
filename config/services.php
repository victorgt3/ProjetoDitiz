<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    'facebook' => [
    'client_id' => '1819176794967296',
    'client_secret' =>'72d142e39a2c7982c19ec724800fbdc0',
    'redirect' => 'http://localhost:8000/home',
    ],

    'google' => [
	'client_id' => '649524349186-ir33iv3f057ai641gpevjm3vb9r85hr6.apps.googleusercontent.com',
	'client_secret' =>'QZy6q2vnf8Uehc1chh4FNURH',
	'redirect' => 'http://localhost:8000/home',
    ],

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

];
