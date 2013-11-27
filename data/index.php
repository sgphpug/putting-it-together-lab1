<?php
include __DIR__ . '/vendor/autoload.php';

use Respect\Rest\Router;

$r3 = new Router;

$r3->get('/', function() {
    return 'Hello World';
});

$r3->get('/foo/*', function($name) {
    return "I'm $name!";
});

$r3->get('/bar', function(){
	return array('hello'=> 'Mama!');
})->accept(array(
    'application/json' => 'json_encode'
));


