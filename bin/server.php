<?php

require __DIR__ . '/../vendor/autoload.php';

use Thruway\Peer\Router;
use Thruway\Transport\RatchetTransportProvider;

$host = "127.0.0.1";
$port = 9090;

$router = new Router();

$transportProvider = new RatchetTransportProvider($host, $port);

$router->addTransportProvider($transportProvider);

echo "\n Starting wamp router.\n Listening to host: $host, port: $port. \n\n";
$router->start();