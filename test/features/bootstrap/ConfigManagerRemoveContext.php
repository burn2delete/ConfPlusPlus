<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use projectmeta\ConfPlusPlus\Test\Context\AbstractSubContext;
use projectmeta\ConfPlusPlus\ConfigManager;

/**
 * Features context.
 */
class ConfigManagerRemoveContext extends AbstractSubContext
{

   /**
     * @Given /^it is removed from the ConfigManager$/
     */
    public function itIsRemovedFromTheConfigmanager()
    {
        $this->configManager->remove($this->alias);
    }

}
