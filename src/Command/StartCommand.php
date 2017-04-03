<?php

namespace phmLabs\WampRouter\Command;

use Cilex\Provider\Console\Command;

use Psr\Log\NullLogger;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Thruway\Logging\Logger;
use Thruway\Peer\Router;
use Thruway\Transport\RatchetTransportProvider;

class StartCommand extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('start')
            ->setDescription('Start the WAMP router')
            ->addOption('host', 'H', InputOption::VALUE_OPTIONAL, 'The web socket server host.', '127.0.0.1')
            ->addOption('port', 'p', InputOption::VALUE_OPTIONAL, 'The web socket server port.', '9090');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $host = $input->getOption('host');
        $port = $input->getOption('port');

        $output->writeln('');
        $output->writeln('<comment>phmLabs/WampRouter</comment> written by Nils Langner, based on voryx/thruway.');
        $output->writeln('');

        $output->writeln("<info>Starting on $host:$port.</info>");
        $output->writeln('');

        if (!$input->getOption('verbose')) {
            Logger::set(new NullLogger());
        }

        $router = new Router();

        $transportProvider = new RatchetTransportProvider($host, $port);

        $router->addTransportProvider($transportProvider);


        $router->start();
    }
}
