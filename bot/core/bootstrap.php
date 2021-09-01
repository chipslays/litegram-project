<?php

use Litegram\Plugins\Cache;
use Litegram\Plugins\Database;
use Litegram\Plugins\Localization;
use Litegram\Plugins\Logger;
use Litegram\Plugins\Session;
use Litegram\Plugins\Storage;
use Litegram\Plugins\Talk;
use Litegram\Plugins\User;

return [
    'plugins' => [
        // Database::class,
        // User::class,
        Storage::class,
        Session::class,
        Localization::class,
        Logger::class,
        // Talk::class,
        // Cache::class,
    ],

    'components' => [
        'chipslays.version' => [
            'enable' => true,
            'entrypoint' => __DIR__ . '/components/chipslays/version/component.php',
        ],
    ],
];