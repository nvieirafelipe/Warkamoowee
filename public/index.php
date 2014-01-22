<?php

require __DIR__.'/../vendor/autoload.php';

use \Dotenv;
use \Warkamoowee\App;

Dotenv::load(__DIR__);

$app = new App;
$app->run();