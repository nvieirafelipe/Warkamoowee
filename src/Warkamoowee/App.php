<?php

namespace Warkamoowee;

use \Slim\Slim;
use ORM;

class App
{
    public function run()
    {
        ORM::configure('mysql:host=localhost;dbname=warkamoowee');
        ORM::configure('username', 'root');
        ORM::configure('password', '');

        $user = ORM::for_table('sailors')->find_one();

        $app = new Slim();
        $app->contentType('application/json;charset=utf-8');

        $app->get('/', function () use ($app, $user) {
            echo '{"greetings": "Hello '.$user->name.', Welcome to Warkamoowee!"}';
        });

        $app->run();
    }
}
