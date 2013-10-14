<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use projectmeta\ConfPlusPlus\ConfigManager;
use projectmeta\ConfPlusPlus\test\YamlConfig;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
    }
    
    /**                                                                                                                                                                  
     * @Given /^a Config$/                                                                                                                                               
     */                                                                                                                                                                  
    public function aConfig()                                                                                                                                            
    {                                                                                                                                                                    
        $this->config = new YamlConfig();
    }
    
    /**                                                                                                                                                                  
     * @Given /^a loaded Config$/                                                                                                                                        
     */                                                                                                                                                                  
    public function aLoadedConfig()                                                                                                                                      
    {                                                                                                                                                                    
        $this->config = new YamlConfig('src\projectmeta\ConfPusPlus\test\test.yml');
        $this->config->load();
    }  
    
    /**                                                                                                                                                              
     * @Given /^it is loaded$/                                                                                                                                       
     */                                                                                                                                                              
    public function itIsLoaded()                                                                                                                                     
    {                                                                                                                                                                
        throw new PendingException();                                                                                                                                
    }

    
    /**                                                                                                                                                              
     * @Then /^the config properties can be accessed$/                                                                                                               
     */                                                                                                                                                              
    public function theConfigPropertiesCanBeAccessed()                                                                                                               
    {                                                                                                                                                                
        throw new PendingException();                                                                                                                                
    }

    /**                                                                                                                                                                  
     * @Given /^a Setting ID "([^"]*)"$/                                                                                                                                 
     */                                                                                                                                                                  
    public function aSettingId($arg1)                                                                                                                                    
    {                                                                                                                                                                    
        $this->settingID = $arg1;                                                                                                                                    
    }
    
    /**                                                                                                                                                              
     * @Given /^a Setting ID "([^"]*)" with a new value "([^"]*)"$/                                                                                                  
     */                                                                                                                                                              
    public function aSettingIdWithANewValue($arg1, $arg2)                                                                                                            
    {                                                                                                                                                                
        throw new PendingException();                                                                                                                                
    }
    
    /**                                                                                                                                                              
     * @Then /^the Setting is retrieved from the Config$/                                                                                                            
     */                                                                                                                                                              
    public function theSettingIsRetrievedFromTheConfig()                                                                                                             
    {                                                                                                                                                                
        throw new PendingException();                                                                                                                                
    }
    
    /**                                                                                                                                                              
     * @Then /^the Setting is changed in the Config$/                                                                                                                
     */                                                                                                                                                              
    public function theSettingIsChangedInTheConfig()                                                                                                                 
    {                                                                                                                                                                
        throw new PendingException();                                                                                                                                
    }
    

}