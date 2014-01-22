<?php

require __DIR__.'/../vendor/autoload.php';

use \Dotenv;
use \Warkamoowee\App;

try {
  Dotenv::load(__DIR__);
} catch (Exception $e) {}

$app = new App;
$app->run();