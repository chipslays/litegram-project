<?php

use Litegram\Bot;

class Controller
{
    protected $bot;
    protected $config;
    protected $payload;

    public function __construct()
    {
        $this->bot = Bot::getInstance();
        $this->config = $this->bot->config();
        $this->payload = $this->bot->payload();
    }
}