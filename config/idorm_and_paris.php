<?php

require __DIR__.'/../vendor/autoload.php';

use \Dotenv;

try {
  Dotenv::load(__DIR__.'/../');
} catch (Exception $e) {}

ORM::configure('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME']);
ORM::configure('username', $_ENV['DB_USERNAME']);
ORM::configure('password', $_ENV['DB_PASSWD']);

