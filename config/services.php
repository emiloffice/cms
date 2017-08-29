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
        'app_id' => '334111223669076',
        'client_id' => '334111223669076',
        'client_secret' => '06a137b4d36325336caa59d2992ba9f8',
        'app_secret' => '06a137b4d36325336caa59d2992ba9f8',
        'redirect' => 'https://www.multiverseinc.com/OAuth/facebook-callback',
        'default_graph_version' => 'v2.10',
    ],
    'twitter' => [
        'client_id' => 'rbdWaYXk6o0gn41ikLDJ9bj2V',
        'client_secret' => '8ZHGBK9W3d1YLv9P1dNDBqNDeYOmO0DrppwCiLdsGBbqSvuCZ3',
        'redirect' => 'https://www.multiverseinc.com/OAuth/twitter-callback',
    ]

];
