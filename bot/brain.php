<?php

$bot->command('start {:source?}', 'BotController@start');
$bot->command('help', 'BotController@help');
$bot->command('settings', 'BotController@help');

$bot->command('litegram', function () {
    $this->say('Litegram v3.x.x');
});