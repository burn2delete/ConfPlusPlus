<?php

namespace projectmeta\ConfPlusPlus\Exception;

class ApplicationConfigException extends \ErrorException
{

    public function __construct($message)
    {

        parent::__construct($message);

    }

}