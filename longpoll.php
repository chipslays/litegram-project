<?php

use Litegram\Bot;
use Litegram\Keyboard;
use Litegram\Support\Collection;

require __DIR__ . '/vendor/autoload.php';

$bootstrap = require __DIR__ . '/bot/core/bootstrap.php';

$config = require __DIR__ . '/config/bot.php';
$config['components'] = $bootstrap['components'];

$bot = bot($config);

$bot->longpoll(function (Collection $payload, Bot $bot) use ($bootstrap) {
    $bot->plugins($bootstrap['plugins']);

    foreach (glob(__DIR__ . '/bot/core/keyboards/*.php') as $keyboard) {
        Keyboard::add(require $keyboard);
    }

    foreach (glob(__DIR__ . '/bot/core/middlewares/*.php') as $middleware) {
        require $middleware;
    }

    require __DIR__ . '/bot/brain.php';

    $bot->cli->log($payload->toArray());
});