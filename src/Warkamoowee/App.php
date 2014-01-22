<?php namespace Warkamoowee;

use \Slim\Slim;
use ORM;

class App
{
    public function run($config)
    {
        $sailorWithIAP = ORM::for_table('sailors')->find_one();

        $sailorRepository = $config['doctrine']->getRepository('Warkamoowee\Models\Sailor');
        $sailorWithDoctrine = $sailorRepository->findAll()[0];

        $app = new Slim();
        $app->contentType('application/json;charset=utf-8');

        $app->get('/', function () use ($app, $sailorWithDoctrine) {
            echo '{"greetings": "Hello '.$sailorWithDoctrine->getName().', Welcome to Warkamoowee!"}';
        });

        $app->run();
    }
}
