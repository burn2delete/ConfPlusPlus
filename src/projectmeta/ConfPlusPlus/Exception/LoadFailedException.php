<?php

namespace projectmeta\ConfPlusPlus\Exception;

class LoadFailedException extends \ErrorException
{
    
    public function __construct($message)
    {
        
        parent::__construct($message);
        
    }
    
}