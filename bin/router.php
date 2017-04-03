<?php

if (!$loader = include __DIR__ . '/../vendor/autoload.php') {
    die('You must set up the project dependencies.');
}

$app = new \Cilex\Application("\n<comment>phmLabs/WampRouter ##development##</comment> written by Nils Langner, based on voryx/thruway.");

$app->command(new \phmLabs\WampRouter\Command\StartCommand());

$app->command('foo', function ($input, $output) {
    $output->writeln('Example output');
});

$app->run();