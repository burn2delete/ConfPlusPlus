<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use projectmeta\ConfPlusPlus\ConfigManager;
use projectmeta\ConfPlusPlus\test\Config\YamlConfig;
use projectmeta\ConfPlusPlus\test\Console\YamlConfigApplication;
use Symfony\Component\Console\Tester\CommandTester;

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
        $this->config->load();
    }


    /**
     * @Then /^the config properties can be accessed$/
     */
    public function theConfigPropertiesCanBeAccessed()
    {
        if($this->config->get('bool') == true)
        {

            print_r($this->config->get('bool'));

        }
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
        $this->settingID = $arg1;
        $this->newValue = $arg2;
    }

    /**
     * @Then /^the Setting is retrieved from the Config$/
     */
    public function theSettingIsRetrievedFromTheConfig()
    {
        if($this->config->get($this->settingID) == true)
        {

            print_r($this->config->get($this->settingID));

        }
    }

    /**
     * @Then /^the Setting is changed in the Config$/
     */
    public function theSettingIsChangedInTheConfig()
    {
        $this->config->set($this->settingID, $this->newValue);
        if($this->config->get($this->settingID) != false)
        {

            print_r($this->config->get($this->settingID));

        }
    }

    /**
     * @Given /^a Config Application$/
     */
    public function aConfigApplication()
    {
        $this->configApp = new YamlConfigApplication();
    }

    /**
     * @Then /^the Setting is retrieved from the Application Config$/
     */
    public function theSettingIsRetrievedFromTheApplicationConfig()
    {
        $tester = new CommandTester($this->configApp->find($this->settingID));
        if($tester->execute(array()) == true)
        {

            print_r($tester->execute(array()));

        }
    }

    /**
     * @Then /^the Setting is changed in the Application Config$/
     */
    public function theSettingIsChangedInTheApplicationConfig()
    {
        $tester = new CommandTester($this->configApp->find($this->settingID));
        if($tester->execute(array('newValue' => $this->newValue)) == true)
        {

            print_r($tester->execute(array('newValue' => $this->newValue)));

        }
    }

}