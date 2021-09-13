<?php

$bot->command('start {:source?}', 'BotController@start');
$bot->command('help', 'BotController@help');
$bot->command('settings', 'BotController@settings');

$bot->default('message', 'DefaultController@message');

$bot->command('litegram', function () {
    say('Litegram v3.x.x');
});