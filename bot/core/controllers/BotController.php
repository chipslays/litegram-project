<?php

/**
 * Base bot controller for start, help, settings commands.
 * You can create multiple controller files.
 */
class BotController extends Controller
{
    public function start($source = null)
    {
       say('🎉 Litegram is alive!');
    }

    public function help()
    {
        say('How can I help you?');
    }

    public function settings()
    {
        say('What do you want to set up?');
    }
}