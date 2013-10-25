<?php

namespace projectmeta\ConfPlusPlus\Exception;

class LoadFailedException extends Exception
{
    
    public function __construct($message)
    {
        
        parent::__construct($message);
        
    }
    
}