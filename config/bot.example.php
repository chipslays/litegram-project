<?php

return [
    'bot' => [
        /**
         * Bot token from BotFather, required.
         */
        'token' => '1234567890:BOT_TOKEN',

        /**
         * Webhook handler.
         * Required only for webhook methods and  `lite` CLI command.
         */
        'handler' => 'https://example.com/handler.php',

        /**
         * Bot name.
         */
        'name' => 'Litegram',

        /**
         * Bot username.
         */
        'username' => 'litegram_bot',

        /**
         * Server timezone.
         */
        'timezone' => 'Europe/Samara',

        /**
         * Timelimit only for webhook.
         */
        'timelimit' => 120,

        /**
         * Bot version.
         */
        'version' => '1.0.0',
    ],
    'debug' => [
        'enable' => true,

        /**
         * User ID for send messages.
         * Working with:
         *     - Debug::print(), debug_print
         *     - Debug::json(), debug_json
         *     - Debug::dump(), debug_dump
         */
        'developer' => '436432850',
    ],
    'admin' => [
        /**
         * List of admins.
         * Users IDs or usernames.
         */
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
                    'path' => __DIR__ . '/../bot/resources/locales/yaml',
                ],
                'json' => [
                    'path' => __DIR__ . '/../bot/resources/locales/json',
                ],
            ],
            'fallback' => 'en',
        ],
        'logger' => [
            'path' => __DIR__ . '/../storage/bot/logs',
            'payload_log' => true,
            'errors_log' => true,

            /**
             * Auto-upload logs via Logger::upload() method.
             * Recommended to generate a personal token from https://pastly.cf/api
             */
            'pastly' => [
                'token' => '1627406735:rO0jr-wMn5ZleI6hiKfKQ4aJZyYFaKN5TDoWmj-5V2', // this is a public pastly token, not bot token
                'title' => 'Litegram Log',
                'type' => 'private',
                'expiration' => null,
                'password' => '',
                'syntax' => 'text',
            ],
        ],
    ],
    'components' => [
        // Set in /bot/bootstrap/components.php
    ],
];