<?php

/*
 * This file is part of the ConfPlusPlus package.
 *
 * (c) Matthew Ratzke <matthew.003@me.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace projectmeta\ConfPlusPlus\Config;

use projectmeta\ConfPlusPlus\Config\ConfigInterface;
use projectmeta\ConfPlusPlus\Exception\LoadFailedException;
use projectmeta\ConfPlusPlus\Loader\YamlLoader;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\Loader\DelegatingLoader;
use Symfony\Component\Config\Loader\LoaderResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;

abstract class AbstractConfig implements ConfigInterface
{

    protected $accessor;

    protected $config;

    protected $delegatingLoader;

    protected $loaderResolver;

    protected $processor;

    protected $processedConfiguration;

    protected $writer;


    public function __construct()
    {

        $this->accessor = PropertyAccess::createPropertyAccessor();

        $this->processor = new Processor();

        //$this->registerWriters();

    }

    public function get($configId)
    {

        return $this->accessor->getValue($this, $configId);

    }

    public function set($configId, $value)
    {

        $this->accessor->setValue($this, $configId, $value);

    }

    public function load()
    {
        $resources = $this->getResources();

        if ($resources != null)
        {
            $this->loaderResolver = new LoaderResolver($this->registerLoaders());

            $this->delegatingLoader = new DelegatingLoader($this->loaderResolver);

            $config = $this->delegatingLoader->load($resources);

            $this->config = $this->processor->processConfiguration($this->getConfiguration(), $config);

        }
        else
        {

            throw new LoadFailedException('Unable to load any resources. No resources found.');

        }

    }

    protected function getConfiguration()
    {

        return $this;

    }

    protected function getResources()
    {

        return null;

    }

}