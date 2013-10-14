Feature: ConfigManager Add Objects
    In order to manipulate objects in ConfigManager
    As a Developer
    I need to add them to the ConfigManager

	Scenario Outline: Add Loader to ConfigManager
        Given a loader "<loader>" with an alias "<alias>"
        Then it is added to the ConfigManager

        Scenarios:
            | loader                                          	  | alias                           |
            | projectmeta\ConfPlusPlus\Loader\YamlLoader          | loader.configplusplus.yaml      |
            | projectmeta\ConfPlusPlus\Loader\XmlLoader           | loader.configplusplus.xml       |
            | projectmeta\ConfPlusPlus\Loader\PhpLoader           | loader.configplusplus.php       |

	Scenario Outline: Add Writer to ConfigManager
        Given a writer "<writer>" with an alias "<alias>"
        Then it is added to the ConfigManager

        Scenarios:
            | writer                                          	  | alias                           |
            | projectmeta\ConfPlusPlus\Writer\YamlWriter          | writer.configplusplus.yaml      |
            | projectmeta\ConfPlusPlus\Writer\XmlWriter           | writer.configplusplus.xml       |
            | projectmeta\ConfPlusPlus\Writer\PhpWriter           | writer.configplusplus.php       |

	Scenario Outline: Add Config to ConfigManager
        Given a config "<config>" with an alias "<alias>"
        Then it is added to the ConfigManager

        Scenarios:
            | config                                          	  | alias                           |
            | projectmeta\ConfPlusPlus\Test\Config\YamlTestConfig | config.configplusplus.test.yaml |
            | projectmeta\ConfPlusPlus\Test\Config\XmlTestConfig  | config.configplusplus.test.xml  |
            | projectmeta\ConfPlusPlus\Test\Config\PhpTestConfig  | config.configplusplus.test.php  |
