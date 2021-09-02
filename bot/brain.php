<?php

$bot->command('start {:source?}', 'BotController@start');
$bot->command('help', 'BotController@help');
$bot->command('settings', 'BotController@settings');

$bot->default('message', function () {
    reply('Oh, I dont know what to say to that.');
});

$bot->command('litegram', function () {
    say('Litegram v3.x.x');
});