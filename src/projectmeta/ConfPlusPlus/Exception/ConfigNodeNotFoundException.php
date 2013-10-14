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
 * Thrown when a config node was not found
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 */
class ConfigNodeNotFoundException extends \Exception
{
    /**
     * Constructor.
     *
     * @param string $node   The node that was not found
     * @param string $parent The parent node being searched
     */
    public function __construct($node, $parent)
    {
        parent::__construct(sprintf('The node "%s" was not found in "%s"', $node, $parent));
    }
}
