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
class ConfigManagerAddContext extends AbstractSubContext
{

    /**
     * @Given /^it is added to the ConfigManager$/
     */
    public function itIsAddedToTheConfigmanager()
    {
        $this->configManager->add($this->alias, $this->object, true);
    }

}
