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
class ConfigManagerHasContext extends AbstractSubContext
{

    /**
     * @Given /^ConfigManager is checked for alias$/
     */
    public function configmanagerIsCheckedForAlias()
    {
        $this->configManager->has($this->alias);
    }

}
