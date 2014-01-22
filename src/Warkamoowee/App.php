<?php

namespace Warkamoowee;

use \Slim\Slim;
use ORM;

class App
{
    public function run()
    {
        ORM::configure('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME']);
        ORM::configure('username', $_ENV['DB_USERNAME']);
        ORM::configure('password', $_ENV['DB_PASSWD']);

        $user = ORM::for_table('sailors')->find_one();

        $app = new Slim();
        $app->contentType('application/json;charset=utf-8');

        $app->get('/', function () use ($app, $user) {
            echo '{"greetings": "Hello '.$user->name.', Welcome to Warkamoowee!"}';
        });

        $app->run();
    }
}
