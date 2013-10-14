<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use projectmeta\ConfPlusPlus\ConfigManager;
use projectmeta\ConfPlusPlus\Test\Context\AbstractSubContext;

/**
 * Features context.
 */
class ConfigManagerGetContext extends AbstractSubContext
{

    /**
     * @Then /^it is retrieved from the ConfigManager$/
     */
    public function itIsRetrievedFromTheConfigmanager()
    {
       $this->configManager->get($this->alias);
    }

}
