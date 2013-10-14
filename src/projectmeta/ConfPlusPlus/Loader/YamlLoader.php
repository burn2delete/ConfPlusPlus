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

/**
 * YamlLoader.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
class YamlLoader extends AbstractLoader
{

    /**
     * Load fresh config.
     *
     * Config is loaded from source
     *
     * @api
     */
    protected function loadFresh($input)
    {

    }

    protected function implementsCache()
    {
        return false;

    }

}
