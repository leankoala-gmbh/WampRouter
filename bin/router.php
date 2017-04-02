<?php

if (!$loader = include __DIR__ . '/../vendor/autoload.php') {
    die('You must set up the project dependencies.');
}

$app = new \Cilex\Application('phmLabs WAMP Router v1.0');

$app->command(new \phmLabs\WampRouter\Command\StartCommand());

$app->command('foo', function ($input, $output) {
    $output->writeln('Example output');
});
$app->run();