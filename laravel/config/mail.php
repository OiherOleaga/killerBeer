<?php

return [

    'driver' => env('MAIL_MAILER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),

    'port' => env('MAIL_PORT', 2525),

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'KillerBeer@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'KillerBeer'),
    ],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME', 'OIHER OLEAGA GUERRERO'),

    'password' => env('MAIL_PASSWORD', '123456'),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

    'log_channel' => env('MAIL_LOG_CHANNEL', 'single'),

    'pretend' => false,

];
