<?php

namespace projectmeta\ConfPlusPlus\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;

class ConfigCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $configId = (preg_match('/:/', $this->getName()) == true) ? preg_replace('/:/', '', $this->getName()) : $this->getName();

        if ($input->getArgument('value') != null)
        {

            $this->executeSet($configId, $input, $output);

        } else {

            $this->executeGet($configId, $input, $output);

        }

    }

    protected function executeGet($configId, InputInterface $input, OutputInterface $output)
    {

        $output->writeln($this->getApplication()->appConfig->get($configId));

    }

    protected function executeSet($configId, InputInterface $input, OutputInterface $output)
    {

        $this->getApplication()->appConfig->set($configId, $input->getArgument('value'));

    }
}
