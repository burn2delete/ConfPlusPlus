<?php

namespace projectmeta\ConfPlusPlus\test\Console\Command;

use projectmeta\ConfPlusPlus\Console\Command\ConfigCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;

class YamlConfigBoolCommand extends ConfigCommand
{

    protected function configure()
    {
        $this
            ->setName('config:bool')
            ->setDescription('Get/Set Bool in Config')
            ->addArgument(
                'newValue',
                InputArgument::OPTIONAL,
                'true/false (not validated)'
            );
    }
}
