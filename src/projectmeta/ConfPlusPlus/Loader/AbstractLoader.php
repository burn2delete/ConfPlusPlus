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

namespace projectmeta\ConfPlusPlus\Loader;

use projectmeta\ConfPlusPlus\Loader\LoaderInterface;

/**
 * AbstractLoader.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
abstract class AbstractLoader implements LoaderInterface
{

    /**
     * Load configuration from source.
     *
     * @param string $input Config source input
     *
     * @return $array PHP array of config
     *
     * @throws LoadFailedException if the load was unsuccessful
     *
     * @api
     */
    public function load($input)
    {

        if ($this->implementsCache() == true) {

            $this->registerCache();

            return $this->loadCache($input);

        }

        return $this->loadFresh($input);

    }

    /**
     * Load config from cache.
     *
     * Config is loaded from cache
     *
     * Should return loadFresh() if cache needs
     * to be refreshed
     *
     * @api
     */
    private function loadCache($input)
    {
        return null;

    }

    /**
     * Load fresh config.
     *
     * Config is loaded from source
     *
     * @api
     */
    abstract protected function loadFresh($input);

    /**
     * Register Cache.
     *
     * Handles any cache registration required
     *
     */
    protected function registerCache()
    {
        return null;

    }

    /**
     * Implements Cache.
     *
     * Defines if Loader implements a cache
     *
     * @return true|false Defines if loader implements a cache
     *
     */
    abstract protected function implementsCache();

}
