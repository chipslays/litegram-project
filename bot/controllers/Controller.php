<?php

use Litegram\Bot;
use Litegram\Support\Collection;

class Controller
{
    /**
     * @var Bot
     */
    protected $bot;

    /**
     * @var Collection
     */
    protected $config;

    /**
     * @var Collection
     */
    protected $payload;

    public function __construct()
    {
        $this->bot = Bot::getInstance();
        $this->config = $this->bot->config();
        $this->payload = $this->bot->payload();
    }
}