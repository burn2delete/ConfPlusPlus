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

namespace projectmeta\ConfPlusPlus\Exception;

/**
 * Thrown when write is disabled for a config
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 */
class WriteDisabledException extends \BadMethodCallException
{
    /**
     * Constructor.
     *
     * @param string $alias The alias that was not found
     */
    public function __construct($alias)
    {
        parent::__construct(sprintf('Write is disabled for this config "%s"', $alias));
    }
}
