<?php

namespace projectmeta\ConfPlusPlus\test\Console;

use projectmeta\ConfPlusPlus\Console\Application as BaseApplication;
use projectmeta\ConfPlusPlus\test\Console\Command\YamlConfigBoolCommand;

class YamlConfigApplication extends BaseApplication
{

    protected function getConfigClass()
    {

        return 'projectmeta\ConfPlusPlus\test\Config\YamlConfig';

    }

    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();

        $defaultCommands[] = new YamlConfigBoolCommand();

        return $defaultCommands;
    }

}
