<?php
/**
 * Copyright © Rafaf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rafaf\HelloWorld\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Sayhello extends Command
{
    protected function configure()
    {
        $this->setName('example:sayhello');
        $this->setDescription('Simple Hello Message');

        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World!");
    }
}
