<?php

use Litegram\Keyboard;
use Litegram\Debug\Payloads;

require __DIR__ . '/vendor/autoload.php';

$bootstrap = require __DIR__ . '/bot/core/bootstrap.php';

$config = require __DIR__ . '/config/bot.php';
$config['components'] = $bootstrap['components'];

$bot = bot($config)->webhook()->plugins($bootstrap['plugins']);

foreach (glob(__DIR__ . '/bot/core/keyboards/*.php') as $keyboard) {
    Keyboard::add(require $keyboard);
}

foreach (glob(__DIR__ . '/bot/core/middlewares/*.php') as $middleware) {
    require $middleware;
}

require __DIR__ . '/bot/brain.php';

$bot->run();
