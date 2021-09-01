<?php

/**
 * Simple example component for show bot version.
 *
 * @author chipslays <hello@chipslays.ru>
 * @version 1.0.0
 */

$this->command('version', function () {
    $this->say('Bot version: ' . $this->config('bot.version'));
});