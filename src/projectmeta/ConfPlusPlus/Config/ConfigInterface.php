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

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

interface ConfigInterface extends ConfigurationInterface
{
    
    
    /**
     * Load
     * 
     * Loads configuration files
     * 
     * Finds configuration files and passes them to the DelegatingLoader.
     * 
     */
    public function load();
    
    public function get($config); 
    
    public function set($config, $value);
    
    //public function save();    
}