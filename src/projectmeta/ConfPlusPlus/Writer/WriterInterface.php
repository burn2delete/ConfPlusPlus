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

namespace projectmeta\ConfPlusPlus\Writer;

/**
 * WriterInterface.
 *
 * @author Matthew Ratzke <matthew.003@me.com>
 *
 * @api
 */
interface WriterInterface
{
    /**
     * Write configuration to destination.
     *
     * @throws WriteFailedException if the write was unsuccessful
     *
     * @api
     */
    public function write();

}
