<?php

require __DIR__.'/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use \Dotenv;

try {
  Dotenv::load(__DIR__.'/../');
} catch (Exception $e) {}

$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/yaml"), $isDevMode);

$conn = array(
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWD'],
    'host' => $_ENV['DB_HOST'],
    'driver' => 'pdo_mysql'
);

$entityManager = EntityManager::create($conn, $config);
