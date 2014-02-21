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

        $configId = (preg_match('/[config]*:/i', $this->getName()) == true) ? preg_replace('/[config]*:/i', '', $this->getName()) : $this->getName();

        if ($input->hasArgument(0))
        {

            $this->getApplication()->appConfig->set($configId, $input->getArgument(0));

        } else {

            $this->getApplication()->appConfig->get($configId);

        }

    }
}
