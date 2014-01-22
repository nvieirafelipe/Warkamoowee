<?php namespace Warkamoowee;

use \Slim\Slim;
use ORM;

class App
{
    public function run()
    {
        $sailorWithIAP = ORM::for_table('sailors')->find_one();

        $user = ORM::for_table('sailors')->find_one();

        $app = new Slim();
        $app->contentType('application/json;charset=utf-8');

        $app->get('/', function () use ($app, $sailorWithIAP) {
            echo '{"greetings": "Hello '.$sailorWithIAP->name.', Welcome to Warkamoowee!"}';
        });

        $app->run();
    }
}
