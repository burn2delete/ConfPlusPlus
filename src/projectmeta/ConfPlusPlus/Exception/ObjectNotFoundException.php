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
class ObjectNotFoundException extends \Exception
{
    /**
     * Constructor.
     *
     * @param string $object The object which was not found
     */
    public function __construct($object, $type = 'object')
    {
        parent::__construct(sprintf('The %s "%s" does not exist', $type, $object));
    }
}
