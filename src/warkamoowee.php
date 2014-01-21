<?php
require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\Slim();
$app->contentType('application/json;charset=utf-8');

$app->get('/', function () use ($app) {
    echo '{"greetings": "Hello I\'m warkamoowee, your new project!"}';
});
