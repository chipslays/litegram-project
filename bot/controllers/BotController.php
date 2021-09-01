<?php

use Litegram\Bot;
use Litegram\Support\Collection;

/**
 * @var Bot $bot
 * @var Collection $config
 * @var Collection $payload
 */
class BotController extends Controller
{
    public function start($source = null)
    {
        $this->bot->say('🎉 Litegram is alive!');
    }

    public function help()
    {
        $this->bot->say('How can I help you?');
    }

    public function settings()
    {
        $this->bot->say('What do you want to set up?');
    }
}