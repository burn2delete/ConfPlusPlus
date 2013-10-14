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
 * LoaderInterface.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
interface LoaderInterface
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
    public function load($input);

}
