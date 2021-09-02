<?php

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