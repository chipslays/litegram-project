<?php

return [
    'bot' => [
        'token' => '1234567890:BOT_TOKEN',
        'handler' => 'https://example.com/handler.php',
        'name' => 'Litegram',
        'username' => 'litegram_bot',
        'timezone' => 'Europe/Samara',
        'timelimit' => 120,
        'version' => '1.0.0',
    ],
    'debug' => [
        'enable' => true,
        'developer' => '436432850',
    ],
    'admin' => [
        'list' => [
            'chipslays' => 'password',
            '436432850' => 'password',
        ],
    ],
    'plugins' => [
        'storage' => [
            'driver' => null, // null - store data in RAM (useful for long-poll)
            'drivers' => [
                'file' => [
                    'dir' => __DIR__ . '/../storage/bot/store',
                ],
                'database' => [],
            ],
        ],
        'cache' => [
            'driver' => 'memcached',
            'drivers' => [
                'memcached' => [
                    'host'  => 'localhost',
                    'port' => '11211',
                ],
                'redis' => [
                    'host'  => '127.0.0.1',
                    'port' => '6379',
                ],
            ],
        ],
        'database' => [
            'driver' => 'mysql',
            'drivers' => [
                'sqlite' => [
                    'prefix' => 'litegram_',
                    'database' => 'path/to/database.sqlite',
                ],
                'mysql' => [
                    'host'      => 'localhost',
                    'prefix'    => 'litegram_',
                    'database'  => 'litegram',
                    'username'  => 'litegram',
                    'password'  => 'litegram',
                    'charset'   => 'utf8mb4',
                    'collation' => 'utf8mb4_unicode_ci',
                ],
                'pgsql' => [
                    'host'      => 'localhost',
                    'prefix'    => 'litegram_',
                    'database'  => 'litegram',
                    'username'  => 'litegram',
                    'password'  => 'litegram',
                    'charset'   => 'utf8mb4',
                    'collation' => 'utf8mb4_unicode_ci',
                ],
            ],
        ],
        'localization' => [
            'driver' => 'yaml',
            'drivers' => [
                'yaml' => [
                    'path' => __DIR__ . '/../bot/core/locales/yaml',
                ],
                'json' => [
                    'path' => __DIR__ . '/../bot/core/locales/json',
                ],
            ],
            'fallback' => 'en',
        ],
        'logger' => [
            'path' => __DIR__ . '/../storage/bot/logs',
            'autolog' => false,
            'pastly' => [
                'token' => '1627406735:rO0jr-wMn5ZleI6hiKfKQ4aJZyYFaKN5TDoWmj-5V2',
                'title' => 'Litegram Log',
                'type' => 'private',
                'expiration' => null,
                'password' => '',
                'syntax' => 'text',
            ],
        ],
    ],
    'components' => [
        // set in /bot/core/bootstrap.php
    ],
];