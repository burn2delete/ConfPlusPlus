<?php

namespace projectmeta\ConfPlusPlus\Test\Context;

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use projectmeta\ConfPlusPlus\ConfigManager;

/**
 * Abstract Sub context.
 */
abstract class AbstractSubContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters
     */
    public function __construct(array &$parameters)
    {
        $this->configManager =& $parameters['config_manager'];
        $this->alias =& $parameters['alias'];
        $this->object =& $parameters['object'];

    }
}
