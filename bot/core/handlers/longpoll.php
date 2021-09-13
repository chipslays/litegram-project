<?php

use Litegram\Bot;
use Litegram\Keyboard;
use Litegram\Plugins\Logger;
use Litegram\Support\Collection;

require __DIR__ . '/../../../vendor/autoload.php';

$plugins = require __DIR__ . '/../bootstrap/plugins.php';
$components = require __DIR__ . '/../bootstrap/components.php';

$config = require __DIR__ . '/../../../config/bot.php';
$config['components'] = $components;

$bot = bot($config);

$bot->longpoll(function (Collection $payload, Bot $bot) use ($plugins) {
    $bot->plugins($plugins);

    Logger::log('asd');

    foreach (glob(__DIR__ . '/../../resources/keyboards/*.php') as $keyboard) {
        Keyboard::add(require $keyboard);
    }

    foreach (glob(__DIR__ . '/../middlewares/*.php') as $middleware) {
        require $middleware;
    }

    require __DIR__ . '/../../brain.php';

    $bot->cli->log($payload->toArray());
});