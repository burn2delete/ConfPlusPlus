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

use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * ConfigInterface.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
interface ConfigInterface extends ConfigurationInterface
{

    /**
     * Load config.
     *
     * Output from this is passed to the class defined by registerLoader()
     *
     * @api
     */
    public function load();

    /**
     * Write config.
     *
     * Output from this is passed to the class defined by registerWriter()
     *
     * @api
     */
    public function write();

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
    public function get($config, $default);

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
    public function set($config, $value, $override);

}
