<?php

bot()->addMiddleware('basic', function ($next) {
    // do before...
    $next();
    // do after...
});

bot()->addMiddleware('simple', function () {
    return true;
});