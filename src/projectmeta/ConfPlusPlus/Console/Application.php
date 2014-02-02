<?php

namespace projectmeta\ConfPlusPlus\Console;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Loader\LoaderResolver;
use Symfony\Component\Config\Loader\DelegatingLoader;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Helper\DescriptorHelper;
use Composer\Command\Helper\DialogHelper as ComposerDialogHelper;

class Application extends BaseApplication
{

    protected $appConfig = null;

    protected $configClass = null;

    public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN')
    {

        parent::__construct($name, $version);

        $this->configClass = $this->getConfigClass();

        if ($this->configClass != null)
        {

            $this->appConfig = new ${$this->configClass}();

            $this->appConfig->load();

        }

    }

    protected function getConfigClass()
    {

        return null;

    }

}
