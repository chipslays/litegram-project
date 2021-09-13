<?php

/**
 * Controller for default answers.
 */
class DefaultController extends Controller
{
    public function message()
    {
        reply('Oh, I dont know what to say to that.');
    }
}