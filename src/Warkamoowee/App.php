<?php

namespace Warkamoowee;

use \Slim\Slim;

class App
{
    public function run()
    {
        $app = new Slim();
        $app->contentType('application/json;charset=utf-8');

        $app->get('/', function () use ($app) {
            echo '{"greetings": "Hello I\'m warkamoowee, your new project!"}';
        });

        $app->run();
    }
}
