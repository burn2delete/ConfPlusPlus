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
 * Thrown when an alias was not found
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 */
class AliasNotFoundException extends \Exception
{
    /**
     * Constructor.
     *
     * @param string $alias The alias that was not found
     */
    public function __construct($alias)
    {
        parent::__construct(sprintf('The alias "%s" does not exist', $alias));
    }
}
