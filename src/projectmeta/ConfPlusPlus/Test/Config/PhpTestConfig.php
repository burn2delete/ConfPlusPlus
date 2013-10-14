<?php

namespace projectmeta\ConfPlusPlus\Test\Config;

use projectmeta\ConfPlusPlus\Config\AbstractConfig;

class PhpTestConfig extends AbstractConfig
{

    protected function registerCache()
    {
        return null;

    }

    protected function registerLoader()
    {
        return 'loader.confplusplus.php';

    }

    protected function registerWriter()
    {
        return 'writer.confplusplus.php';

    }

    protected function preLoad()
    {
        return array();

    }

    public function getConfigTreeBuilder()
    {
        return $treeBuilder;

    }

}
