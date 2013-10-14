<?php

/*
 * This file is part of the ConfPlusPlus package.
 *
 * (c) Degree9 Solutions Inc.
 * (c) Matthew Ratzke <matthew.003@me.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace projectmeta\ConfPlusPlus\Config;

use Symfony\Component\Config\Definition\Processor;
use projectmeta\ConfPlusPlus\Config\ConfigInterface;
use projectmeta\ConfPlusPlus\ConfigManager;

/**
 * AbstractConfig.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
abstract class AbstractConfig implements ConfigInterface
{

    /**
     * Config storage.
     *
     * @var array
     */
    protected $_config;

    /**
     * ConfigManager Instance.
     *
     * @var ConfigManager
     */
    protected $configManager;

    /**
     * Cache instance
     *
     * @var AbstractCache
     */
    protected $cache;

    /**
     * Loader instance
     *
     * @var AbstractLoader
     */
    protected $loader;

    /**
     * Writer instance
     *
     * @var AbstractWriter
     */
    protected $writer;

   /**
     * Constructor.
     *
     * @param &$configManager Reference to parent ConfigManager instance
     */
    public function __construct(ConfigManager &$configManager)
    {

        $this->_config = null;
        $this->configManager = $configManager;
        //$this->cache = ($this->configManager->has($this->registerCache())) ? $this->configManager->get($this->registerCache()) : null;
        $this->loader = ($this->configManager->has($this->registerLoader())) ? $this->configManager->get($this->registerLoader()) : null;
        $this->writer = ($this->configManager->has($this->registerWriter())) ? $this->configManager->get($this->registerWriter()) : null;

    }

    /**
     * Registers the config cache.
     *
     * @return string The cache alias or null to disable
     *
     * @api
     */
//    abstract protected function registerCache();

    /**
     * Registers the config loader.
     *
     * @return string The loader alias
     *
     * @api
     */
    abstract protected function registerLoader();

    /**
     * Registers the config writer.
     *
     * @return string|null The writer alias or null to disable (read only).
     *
     * @api
     */
    abstract protected function registerWriter();

    /**
     * Load config.
     *
     *
     * @api
     */
    public function load()
    {
/*        if ($this->cache->isFresh()) {
            return $this->validateLoad($this->cache->load());

        }
*/

        return $this->validateLoad($this->loader->load($this->preLoad()), $this->_config);

    }

    /**
     * Generates input for Loader.
     *
     * @api
     */
    abstract protected function preLoad();

    /**
     * Write config.
     *
     * Output from this is passed to the class defined by registerWriter().
     *
     * @api
     */
    public function write()
    {

        if ($this->writer != null) {

            $this->writer->write($this->validateWrite($this, $this->_config));

        } else {

            throw new \WriteDisabledException();

        }

    }

    /**
     * Get config value.
     *
     * Get's config value or returns a default value
     *
     * @param $config string The config alias
     * @param $default mixed A default value used if config does not exist
     *
     * @api
     */
    public function get($config, $default)
    {


    }

    /**
     * Set config value.
     *
     * Set's config alias to value
     *
     * @param $config string The config alias
     * @param $value mixed The value to set config alias to
     * @param $override boolean Override any missing node errors
     *
     * @api
     */
    public function set($config, $value, $override)
    {

    }

    /**
     * Validate config load.
     *
     * Validate the load config
     *
     * @param $config Loaded config
     * @param $tree Defined config tree
     *
     * @return array Processed configuration
     *
     * @api
     */
    protected function validateLoad($config)
    {

        $processor = new Processor();

        return $processor->processConfiguration($this, $config);

    }

    /**
     * Validate config write.
     *
     * Validate the write config
     *
     * @param $config Config being written
     *
     * @param $tree Defined config tree
     *
     * @return array Processed configuration
     *
     * @api
     */
    protected function validateWrite($config, $tree)
    {

        $processor = new Processor();

        return $processor->processConfiguration($this, $config);

    }

}
