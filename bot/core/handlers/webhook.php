<?php

use Litegram\Keyboard;
use Litegram\Debug\Payloads;

require __DIR__ . '/../../../vendor/autoload.php';

$plugins = require __DIR__ . '/../bootstrap/plugins.php';
$components = require __DIR__ . '/../bootstrap/components.php';

$config = require __DIR__ . '/../../../config/bot.php';
$config['components'] = $components;

$bot = bot($config)->webhook(Payloads::START)->plugins($plugins);

foreach (glob(__DIR__ . '/../../resources/keyboards/*.php') as $keyboard) {
    Keyboard::add(require $keyboard);
}

foreach (glob(__DIR__ . '/../middlewares/*.php') as $middleware) {
    require $middleware;
}

require __DIR__ . '/../../brain.php';

$bot->run();