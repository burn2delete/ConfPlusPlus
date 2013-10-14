<?php

/**
 * This file is part of the ConfPlusPlus package.
 *
 * (c) Degree9 Solutions Inc.
 * (c) Matthew Ratzke <matthew.003@me.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace projectmeta\ConfPlusPlus;

use projectmeta\ConfPlusPlus\Exception\AliasNotFoundException;
use projectmeta\ConfPlusPlus\Loader\PhpLoader;
use projectmeta\ConfPlusPlus\Loader\YamlLoader;
use projectmeta\ConfPlusPlus\Loader\XmlLoader;
use projectmeta\ConfPlusPlus\Writer\PhpWriter;
use projectmeta\ConfPlusPlus\Writer\YamlWriter;
use projectmeta\ConfPlusPlus\Writer\XmlWriter;
use projectmeta\Stingray\Stingray;
use projectmeta\Stingray\Exception\ArrayNodeNotFoundException;

/**
 * ConfigManager.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
class ConfigManager
{

    /**
     * Internal storage of all objects.
     *
     * @var array
     */
    protected $_storage = array();

    /**
     * Constructor.
     *
     */
    public function __construct()
    {

        $this->stingray = new Stingray();

        $this->_storage['cache'] = array();
        $this->_storage['config'] = array();
        $this->_storage['loader'] = array();
        $this->_storage['writer'] = array();

        $this->registerDefaults();

    }

    /**
     * Add's an object to registry.
     *
     * @param string  $alias    Alias name
     * @param string  $object   Object being added to bag
     * @param boolean $override Override existing nodes
     *
     * @api
     */
    public function add($alias, $object, $override = false)
    {

        if (!$this->has($alias) || $override == true) {

            $this->stingray->set($this->_storage, $alias, $object, true);

        } else {

            throw new AliasNotFoundException($alias);

        }
    }

    /**
     * Removes object from registry.
     *
     * @param string $alias Object alias name
     *
     * @api
     */
    public function remove($alias)
    {

        if ($this->has($alias)) {

            $node =& $this->stingray->get($this->_storage, $alias);

            unset($node);

            return true;

        } else {

            throw new AliasNotFoundException($alias);

        }

    }

    /**
     * Gets an object from registry.
     *
     * @param string $alias Object alias name
     *
     * @api
     */
    public function get($alias)
    {
        if ($this->has($alias)) {

            $this->stingray->get($this->_storage, $alias);

        } else {

            throw new AliasNotFoundException($alias);

        }


    }

    /**
     * Checks for registered objects.
     *
     * @param string $alias Object alias name
     *
     * @api
     */
    public function has($alias)
    {

        try {

            if ($this->stingray->get($this->_storage, $alias)) {
                return true;

            }

        } catch (ArrayNodeNotFoundException $e) {
            return false;

        }

    }

    /**
     * Registers default configs.
     */
    private function registerDefaults()
    {

        foreach ($this->defaults() as $default) {

            $this->add($default['alias'], $default['object'], true);

        }

    }

    /**
     * Default's.
     *
     * @return array Array of defaults
     *
     * @api
     */
    private function defaults()
    {
        return array(
            //default loaders
            array('alias' => 'loader.configplusplus.yaml', 'object' => new YamlLoader()),
            array('alias' => 'loader.configplusplus.php', 'object' => new PhpLoader()),
            array('alias' => 'loader.configplusplus.xml', 'object' => new XmlLoader()),
            //default writers
            array('alias' => 'writer.configplusplus.yaml', 'object' => new YamlWriter()),
            array('alias' => 'writer.configplusplus.php', 'object' => new PhpWriter()),
            array('alias' => 'writer.configplusplus.xml', 'object' => new XmlWriter())
        );

    }

}
