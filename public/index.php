<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../config/idorm_and_paris.php';

use \Warkamoowee\App;

$app = new App;
$app->run();