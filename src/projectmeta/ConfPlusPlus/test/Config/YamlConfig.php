<?php

/**
 * This file is part of the ConfPlusPlus package.
 *
 * (c) Matthew Ratzke <matthew.003@me.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace projectmeta\ConfPlusPlus\test\Config;

use projectmeta\ConfPlusPlus\Config\AbstractConfig;
use projectmeta\ConfPlusPlus\Loader\YamlLoader;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\PropertyAccess\PropertyAccess;


class YamlConfig extends AbstractConfig
{

    public function getConfigTreeBuilder()
    {

        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('test');
        return $treeBuilder;

    }

    public function getResources()
    {

        $configDirectories = array(__DIR__);
        $this->locator = new FileLocator($configDirectories);
        return $this->locator->locate('../test.yml', null, true);

    }

    protected function registerLoaders()
    {

        //default loaders will be here
        return array(new YamlLoader($this->locator));

    }

    public function getBool()
    {

        return $this->config['bool'];

    }

    public function setBool($newValue)
    {

        $this->config['bool'] = $newValue;

    }

    public function getConfigBool()
    {

        return $this->config['bool'];

    }

    public function setConfigBool($newValue)
    {

        $this->config['bool'] = $newValue;

    }

}
